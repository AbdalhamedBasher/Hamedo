<?php

namespace App\Http\Controllers;

use App\Models\units;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index($master=null)
    {

      $units=units::get();

        return view("units.index",["units"=>$units,'breadcrumb'=>'وحدة']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $breadcrumb="إضافة وحدة";
        $units_catogery=units::get();
        $units=units::get();
        return view("units.index",['units_catogery'=>$units_catogery , 'breadcrumb'=>$breadcrumb ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $units=units::create([
        "name"=>$request->name,



     ]);
if( $units) {
    return  redirect()->back()->with(['message'=>"تم إضافة وحدة بنجاح"]);
}
else{
    return  redirect()->back()->withErrors($validator)->withInput();
}
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\units  $units
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
$id=$request->id;
        $units=units::find($id)->update([
            "name"=>$request->name,


         ]);

    if( $units) {
        return  redirect()->back()->with(['message'=>"تم تعديل وحدة بنجاح"]);
    }
    else{
        return  redirect()->back()->with(['message'=>"error"]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\units  $units
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {

        $units=units::find($request->id);
        if( $units) {
            $units->delete();
            return  redirect()->back()->with(['message'=>"تم حذف وحدة بنجاح"]);
        }
        else{
            return  redirect()->back()->withErrors($validator)->withInput();
        }
    }
}
