<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
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
$user=user::get();
if(sizeOf($user)<=0){
    return ["message"=>"ليس هنالك مستخدمين مسجلين"];
}
else{
    return ["Users"=>$user,
            "message"=>" يوجد".$user->count()." مستخدم"


                            ];
}

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $users=user::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>$request->password
       ]);
       if($user){
        return [
                "message"=>"تم إضافة المستخدم ".$request->name."بنجاح",
                "code"=>200
        ];
       }
       else{
        return [
            "message"=>"فشلت عملية الادخال",
            "code"=>404
    ];
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=user::find($id);
        if($user){
            return [
                    "message"=>"تم العثور على المستخدم  ".$user->name." بنجاح",
                    "user"=>$user,
                    "code"=>200
            ];
           }
           else{
            return [
                "message"=>" لم يوجد يتم العثور على المستخدم",
                "code"=>404
        ];
           }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= user::find($id);
     if($user){
$user->update([
    "name"=>$request->name,
    "email"=>$request->email,
    "password"=>$request->password
]);
return [
    "message"=>"تم تعديل المستخدم ".$request->name."بنجاح ",
    "code"=>200,
    "user"=>$user
];

     }
     else{
        return [
            "message"=>" لم يوجد يتم العثور على المستخدم",
            "code"=>404

        ];
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= user::find($id);
        if($user){
   $user->delete();
   return [
       "message"=>"تم مسح المستخدم ",
       "code"=>200,

   ];

        }
        else{
           return [
               "message"=>" لم يوجد يتم العثور على المستخدم",
               "code"=>404

           ];
        }
    }
    /* @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function showpages($id)
   {
       $user=user::find($id)->pagesOwned;
       if($user){
           return [
                   "message"=>"تم العثور على المستخدم  ".$user->name." بنجاح",
                   "user"=>$user,
                   "code"=>200
           ];
          }
          else{
           return [
               "message"=>" لم يوجد يتم العثور على المستخدم",
               "code"=>404
       ];
          }
   }
}
