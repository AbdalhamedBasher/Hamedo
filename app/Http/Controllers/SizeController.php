<?php

namespace App\Http\Controllers;

use App\Models\size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index($master=null)
    {

      $sizes=size::get();

        return view("size.index",["sizes"=>$sizes,'breadcrumb'=>'الحجم']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $breadcrumb="إضافة الحجم";
        $size_catogery=size::get();
        $size=size::get();
        return view("size.index",['size'=>$size_catogery , 'breadcrumb'=>$breadcrumb ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $size=size::create([
        "name"=>$request->name,



     ]);
if( $size) {
    return  redirect()->back()->with(['message'=>"تم إضافة الحجم بنجاح"]);
}
else{
    return  redirect()->back()->withErrors($validator)->withInput();
}
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
$id=$request->id;
        $size=size::find($id)->update([
            "name"=>$request->name,


         ]);

    if( $size) {
        return  redirect()->back()->with(['message'=>"تم تعديل الحجم بنجاح"]);
    }
    else{
        return  redirect()->back()->with(['message'=>"error"]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {

        $size=size::find($request->id);
        if( $size) {
            $size->delete();
            return  redirect()->back()->with(['message'=>"تم حذف الحجم بنجاح"]);
        }
        else{
            return  redirect()->back()->withErrors($validator)->withInput();
        }
    }
}
