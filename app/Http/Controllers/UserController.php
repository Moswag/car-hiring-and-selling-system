<?php

namespace App\Http\Controllers;

use App\Client;
use App\Company;
use App\CompanyToken;
use App\MyConstants;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        return view('session.login');
    }


    public  function registerAsClient(){
        return view('session.register_as_client');
    }

    public  function registerAsCompany(){
        return view('session.register_as_company');
    }


    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            if(auth()->user()->role==MyConstants::USER_ADMIN){
                return redirect()->route('view_admins')->with('message','You are logged in as '.\auth()->user()->name);
            }
            if(auth()->user()->role==MyConstants::USER_COMPANY_ADMIN){
                return redirect()->route('add_car')->with('message','You are logged in as '.\auth()->user()->name);
            }
            else{
                return redirect()->route('add_car')->with('message','You are logged in as '.\auth()->user()->name);
            }

        }
        else{
            return back()->with('error','Wrong credentials, please try again');
        }
    }



    public function saveCompany(Request $request){
        if(CompanyToken::where('token',$request->token)->exists()) {
            if (User::where('email', $request->email)->exists()) {
                return back()->with('error','User with that email already exists, please try a different one');
            } else {
                $companyT = CompanyToken::where('token', $request->token)->first();
                if ($companyT->status == MyConstants::TOKEN_UNUSED) {
                    $company = Company::find($companyT->company_id);
                    $user = new User();
                    $user->name = $company->name;
                    $user->email = $request->email;
                    $user->role = MyConstants::USER_COMPANY_ADMIN;
                    $user->company_id = $company->id;
                    $user->password = bcrypt($request->password);


                    if ($user->save()) {
                        CompanyToken::where('token', $request->token)->update([
                            'status' => MyConstants::TOKEN_USED]);

                        return back()->with('message','You are now successfully registered, please login to proceed');
                    } else {
                        return back()->with('error','Failed to register, please contact admin');
                    }


                }
                else{
                    return back()->with('error','Token is used, please contact admin');
                }
            }
        }
        else{
            return back()->with('error','Token do not exists, please verify and try again');
        }
    }

    public function registerClient(Request $request){

            if (User::where('email', $request->email)->exists()) {
                return back()->with('User with that email already exists, please try a different one');
            } else {

                    $user = new User();
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->role = MyConstants::USER_CLIENT;
                    $user->password = bcrypt($request->password);


                    if ($user->save()) {
                        $client = new Client();
                        $client->name = $request->name;
                        $client->surname = $request->surname;
                        $client->national_id = $request->national_id;
                        $client->email = $request->email;
                        $client->phonenumber = $request->phonenumber;
                        $client->address = $request->address;

                        if($client->save()){
                            return back()->with('You are now successfully registered, please login to proceed');
                        }
                        else{
                            return back()->with('Failed to register client, please contact admin');
                        }

                    } else {
                        return back()->with('Failed to register, please contact admin');
                    }


                }


        }


        public  function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('index')->with('message','You successfully logged out');
        }


}
