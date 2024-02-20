<?php

namespace App\Http\Controllers;

use App\Models\line;
use App\Models\catogery;
use Illuminate\Http\Request;

class CatogeryController extends Controller
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

     public function index()
     {

       $catogery=catogery::get();
       $lines=line::get();
         return view("catogery.index",["catogery"=>$catogery,"lines"=>$lines,'breadcrumb'=>'الاصناف']);

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

      $catogery=catogery::create([
         "name"=>$request->name,
        "line"=>$request->line,
         "main_catogery"=>$request->main_catogery,

      ]);
 if( $catogery) {
     return  redirect()->back()->with(['message'=>"تم إضافة خدمة بنجاح"]);
 }
 else{
     return  redirect()->back()->withErrors($validator)->withInput();
 }
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\catogery  $catogery
      * @return \Illuminate\Http\Response
      */


     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\catogery  $catogery
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request)
     {
 $id=$request->id;
         $catogery=catogery::find($id)->update([
             "name"=>$request->name,
             "terms"=>$request->terms,
             "main_catogery"=>$request->main_catogery,

          ]);

     if( $catogery) {
         return  redirect()->back()->with(['message'=>"تم تعديل خدمة بنجاح"]);
     }
     else{
         return  redirect()->back()->with(['message'=>"error"]);
     }
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\catogery  $catogery
      * @return \Illuminate\Http\Response
      */
     public function destroy( Request $request)
     {
         $catogery=catogery::find($request->id)->delete();
         if( $catogery) {
             return  redirect()->back()->with(['message'=>"تم حذف خدمة بنجاح"]);
         }
         else{
             return  redirect()->back()->withErrors($validator)->withInput();
         }
     }
}
