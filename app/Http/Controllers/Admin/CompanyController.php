<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use App\MyConstants;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function addCompany(){
        return view('admin.add_company');
    }

    public function saveCompany(Request $request){
        if(Company::where('name',$request->name)->exists()){
            return back()->with('error','Company already exists');
        }

        else{
            $image = $request->file('logo');
            $input['imagename'] = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $myfile = bcrypt($input['imagename']) . '.' . $extension;
            $destination = 'companylogo';
            $image->storeAs($destination, $myfile);


            $company=new Company();
            $company->name=$request->name;
            $company->mission=$request->mission;
            $company->image_url = MyConstants::PATH_URL . $destination . '/' . $myfile;
            //$company->status=MyConstants::STATUS_ACTIVE;


            if($company->save()){
                return redirect()->route('view_companies')->with('message','Company successfully added');
            }
            else{
                return back()->with('error','Failed to add company');
            }
        }
    }


    public function viewCompanies(){
        $companies=Company::all();
        return view('admin.view_companies', compact('companies'));
    }

    public function deleteCompany($id){
        if(Company::where('id',$id)->exists()){
            if(Company::where('id',$id)->delete()){
                return redirect()->route('view_companies')->with('message','Company successfuly deleted');
            }
            else{
                return back()->with('error','Failed to delete company, please contact admin');
            }
        }
    }
}
