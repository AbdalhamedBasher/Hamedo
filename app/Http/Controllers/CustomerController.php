<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
class CustomerController extends Controller
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
     $customer=customer::get();
     return view('cusomer.index')->with(['customers'=>$customer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer=customer::create([
            "name"=>$request->name,
            'phone_number'=>$request->phone_number,
           'email'=>$request->email,
           "tax_number"=>$request->tax_number,

         ]);

    if( $customer) {
        return  redirect()->back()->with(['message'=>"تم إضافة عميل بنجاح"]);
    }
    else{
        return  redirect()->back()->withErrors($validator)->withInput();
    }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
$customer=customer::find($request->id);



    if( $customer) {
        $customer->update([
            "name"=>$request->name,
            'phone_number'=>$request->phone_number,
           'email'=>$request->email,
           "tax_number"=>$request->tax_number,

         ]);
        return  redirect()->back()->with(['message'=>"تم تعديل العميل بنجاح"]);
    }
    else{
        return  redirect()->back()->withErrors($validator)->withInput();
    }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $customer=customer::find( $request->id);
        if( $customer) {
            $customer->delete();
            return  redirect()->back()->with(['message'=>"تم إضافة عميل بنجاح"]);
        }
        else{
            return  redirect()->back()->withErrors($validator)->withInput();
        }

    }
    public function data_customer($id){
$customer =customer::find($id);
if($customer){
return Response::json(['data' => $customer], 200);
}
else{
    return response()->json(['error' => 'Error msg'], 404); // Status code here

}
    }
}
