<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Models\line;
use App\Models\size;
use App\Models\brand;
use App\Models\catogery;
use App\Models\type;
use Illuminate\Http\Request;

class ItemsController extends Controller
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
    public function index($master=null)
    {



        $breadcrumb="إضافة منتج";
        $item=items::get();
        $lines=line::where('main_line', '<>', '')->get();
        $brand=brand::get();
        $size=size::get();
        $type=type::get();
        $catogery=catogery::get();
        return view("items.index",['items'=>$item , 'breadcrumb'=>$breadcrumb ,"lines"=>$lines,"brand"=>$brand,"catogery"=>$catogery,"type"=>$type,  "size"=>$size]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $line=items::create([
            "name"=>$request->name,
            "line"=>$request->line,
            "brand"=>$request->brand,
            "price"=>$request->price,
            "size_number"=>$request->size_number,
            "type"=>$request->type,
            "size"=>$request->size,
            "catogery"=>$request->catogery,
         ]);

    if( $line) {
        return  redirect()->back()->with(['message'=>"تم إضافة خدمة بنجاح"]);
    }
    else{
        return  redirect()->back()->withErrors($validator)->withInput();
    }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

            $id=$request->id;

            $item=items::find($id)->update([
                "name"=>$request->name,
                "catogery"=>$request->catogery,
                "price"=>$request->price,
                "brand"=>$request->brand,
                "size"=>$request->size,
                "size_number"=>$request->size_number,


             ]);



    if( $item) {
        return  redirect()->back()->with(['message'=>"تم تعديل العنصر بنجاح"]);
    }
    else{
        return  redirect()->back()->with(['message'=>"error"]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {

        $item=items::find($request->id)->delete();
        if( $item) {
            return  redirect()->back()->with(['message'=>"تم حذف العنصر بنجاح"]);
        }
        else{
            return  redirect()->back()->withErrors($validator)->withInput();
        }
    }
    public function getItems()
    {




        $item=items::get();
        $lines=line::where('main_line', '<>', '')->get();
        $brand=brand::get();
        $size=size::get();
        $type=type::get();
        $catogery=catogery::get();
         $data=[];


        foreach ($item as $key => $value) {
        $data["name"]=$value->name;
        $data["id"]=$value->id;
        $data["price"]=$value->price;
        $data["brand"]=$value->brand;
        $data["size"]=$value->size_number.' '.$value->size;
        $data["type"]=$value->type;
        $data["catogery"]=$value->catogery;
      }

return $data;


        // return (['items'=>$item]);
    }
}
