<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use Illuminate\Http\Request;

class AboutCompanyController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(){
        $about_company = AboutCompany::first(); // or however you want to get the company data

        return view('about-company.index',['about_company' => $about_company]);
    }
    //store or update
    public function store(Request $request)
    {
        $logo = "";
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $logo = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/assets/img/'), $logo);
            $logo = $request->getSchemeAndHttpHost() . "/assets/img/" . $logo;
        }
    
        $previous_projects = [];
        if($request->hasFile('previous_projects')){
            foreach($request->file('previous_projects') as $file){
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('/assets/img/'), $filename);
                $previous_projects[] = $request->getSchemeAndHttpHost() . "/assets/img/" . $filename;
            }
        }
    
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'about' => 'required',
        ]);
    
        $validatedData['logo'] = $logo;
        $validatedData['previous_projects'] = json_encode($previous_projects); // Store as JSON
    
        $about_company = AboutCompany::updateOrCreate(
            ['id' => 1], // Column / value pairs to find
            $validatedData // Data to update or create with
        );
    
        if($about_company){
            return redirect()->back()->with('success','تمت الاضافة بنجاح');
        } else {
            return redirect()->back()->with('error','حدث خطأ ما');
        }
    }
   
public function deleteLogo()
{
    $about_company = AboutCompany::find(1);
    $about_company->logo = null;
    $about_company->save();

    return redirect()->back()->with('success', 'تم حذف صورة الشعار بنجاح');
}

public function deleteProject($project)
{
    $about_company = AboutCompany::find(1);
    $previous_projects = json_decode($about_company->previous_projects, true);
    $previous_projects = array_diff($previous_projects, [$project]);
    $about_company->previous_projects = json_encode($previous_projects);
    $about_company->save();

    return redirect()->back()->with('success', 'تم حذف صورةالمشروع بنجاح');
}
 


  
  
   
}
