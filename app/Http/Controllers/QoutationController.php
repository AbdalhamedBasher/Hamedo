<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\catogery;
use App\Models\customer;
use App\Models\items;
use App\Models\qoutation;
use App\Models\line;
use App\Models\qoutation_line;
use App\Models\size;
use App\Models\type;
use Illuminate\Http\Request;
use App\Models\units;

use function PHPSTORM_META\type;

class QoutationController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qoute = qoutation::get();
        $qoute_id = qoutation::get()->count() == 0 ? qoutation::get()->count() + 1 : qoutation::get()->max();

        $line_name = line::get();
        $items = items::get();
        $catogery = catogery::get();
        $type = type::get();
        $size = size::get();
        $brand = brand::get();
        return view('qoutation.index')->with(['line' => $line_name, 'qoute_id' => $qoute_id, 'items' => $items, 'catogery' => $catogery, 'type' => $type, 'size' => $size, 'brand' => $brand]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $qoute = qoutation::get();
        $qoute_id = qoutation::get()->count() == 0 ? qoutation::get()->count() + 1 : qoutation::get()->max();
        $customer = customer::get();
        $line = line::get();
        $items = items::get();
        $catogery = catogery::get();
        $type = type::get();
        $size = size::get();
        $brand = brand::get();
        $units = units::get();
        return view('qoutation.create')->with(['line' => $line, 'qoute_id' => $qoute_id, 'customer' => $customer, 'items' => $items, 'catogery' => $catogery, 'type' => $type, 'size' => $size, 'brand' => $brand, 'units' => $units]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qout_line = [];
        //  dd($request);

      $last = (qoutation::max("id")==null)?1:qoutation::max("id")+1;

        $request->validate([


            "factor" =>"numeric|required",
            "qoutation_date" => "date|required",
            "expire_date" =>"date|required",
            "project_name" => "string|required",
            'customer' => "required",
            "indrect" => "required|decimal:0,100",
            "addition"=>"required|decimal:0,100",
            "consult" =>"required|decimal:0,100",
            "risk" =>"required|decimal:0,100",



        ]);
        $qoute = qoutation::create([



            "factor" => $request->factor,
            "qoutation_date" => $request->qoutation_date,
            "expire_date" => $request->expire_date,
            "project_name" => $request->project_name,
            "statues" => $request->statues,
            "description" => $request->description,
            "refrence" => 'Q'.$last,
            'customer' => $request->customer,
            "indrect" => $request->indrect,
            "addition"=>$request->addition,
            "consult" => $request->consult,
            "risk" => $request->risk,


        ]);
if (isset($request->lines) ) {


        foreach ($request->lines as $key => $line) {
            $qoute_batch = $qoute->qoute_batch()->create([
                "line" => $line,
                "factor" => $request->factor,
                "qoute" => $qoute->id,

            ]);






            if (isset($request->item[$line])) {
                foreach ($request->item[$line] as $key => $value) {

                    $qout_line[$key] = $qoute_batch->qoute_lines()->create([

                        "qty" => $request->qty[$line][$key],
                        "item" => $value,
                        "unit" => $request->unit[$line][$key],
                        "qoute_batch" =>  $qoute_batch->id,
                        "material" => $request->material[$line][$key],
                        "material_acc" => $request->material_acc[$line][$key],
                        "material_other" => $request->material_acc[$line][$key],
                        "labour" => $request->labour[$line][$key],
                        "labour_other" => $request->labour_other[$line][$key],



                    ]);
                }
            }
        }

}

        if (($qoute)) {
            return redirect()->route('qoute')->with(['message' => 'تم حفظ التسعيرة']);

        }
        // else {
        //     return redirect()->back()->with(['message' => 'هناك خطا في التسعيرة']);        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\qoutation  $qoutation
     * @return \Illuminate\Http\Response
     */
    public function show(qoutation $qoutation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\qoutation  $qoutation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qoute_id = qoutation::get()->count() == 0 ? qoutation::get()->count() + 1 : qoutation::get()->max();
        $customer = customer::get();
        $qoute=qoutation::find($id);
        $line = line::get();
        $items = items::get();
        $catogery = catogery::get();
        $type = type::get();
        $size = size::get();
        $brand = brand::get();
        $units = units::get();
        return view('qoutation.edit')->with(['qoute'=>$qoute ,'line' => $line, 'qoute_id' => $qoute_id, 'customer' => $customer, 'items' => $items, 'catogery' => $catogery, 'type' => $type, 'size' => $size, 'brand' => $brand, 'units' => $units]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\qoutation  $qoutation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qoutation $qoutation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\qoutation  $qoutation
     * @return \Illuminate\Http\Response
     */
    public function destroy(qoutation $qoutation)
    {
        //
    }
}
