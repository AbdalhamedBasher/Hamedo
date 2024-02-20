<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class PagesController extends Controller
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

      $brands=brand::get();

        return view("brand.index",["brands"=>$brands,'breadcrumb'=>'ماركة']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $breadcrumb="إضافة ماركة";
        $brand_catogery=brand::get();
        $brand=brand::get();
        return view("brand.index",['brand_catogery'=>$brand_catogery , 'breadcrumb'=>$breadcrumb ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $brand=brand::create([
        "name"=>$request->name,
        "company"=>$request->company,


     ]);
if( $brand) {
    return  redirect()->back()->with(['message'=>"تم إضافة ماركة بنجاح"]);
}
else{
    return  redirect()->back()->withErrors($validator)->withInput();
}
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
$id=$request->id;
        $brand=brand::find($id)->update([
            "name"=>$request->name,
            "company"=>$request->company,

         ]);

    if( $brand) {
        return  redirect()->back()->with(['message'=>"تم تعديل ماركة بنجاح"]);
    }
    else{
        return  redirect()->back()->with(['message'=>"error"]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {

        $brand=brand::find($request->id);
        if( $brand) {
            $brand->delete();
            return  redirect()->back()->with(['message'=>"تم حذف ماركة بنجاح"]);
        }
        else{
            return  redirect()->back()->withErrors($validator)->withInput();
        }
    }
}
