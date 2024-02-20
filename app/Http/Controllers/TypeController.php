<?php

namespace App\Http\Controllers;

use App\Models\type;
use Illuminate\Http\Request;

class typeController extends Controller
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

      $types=type::get();

        return view("type.index",["types"=>$types,'breadcrumb'=>'نوع']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $breadcrumb="إضافة نوع";
        $type_catogery=type::get();
        $type=type::get();
        return view("type.index",['type_catogery'=>$type_catogery , 'breadcrumb'=>$breadcrumb ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $type=type::create([
        "name"=>$request->name,



     ]);
if( $type) {
    return  redirect()->back()->with(['message'=>"تم إضافة نوع بنجاح"]);
}
else{
    return  redirect()->back()->withErrors($validator)->withInput();
}
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
$id=$request->id;
        $type=type::find($id)->update([
            "name"=>$request->name,


         ]);

    if( $type) {
        return  redirect()->back()->with(['message'=>"تم تعديل نوع بنجاح"]);
    }
    else{
        return  redirect()->back()->with(['message'=>"error"]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {

        $type=type::find($request->id);
        if( $type) {
            $type->delete();
            return  redirect()->back()->with(['message'=>"تم حذف نوع بنجاح"]);
        }
        else{
            return  redirect()->back()->withErrors($validator)->withInput();
        }
    }
}
