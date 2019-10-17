<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\CompanyToken;
use App\Http\Controllers\Controller;
use App\MyConstants;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function addToken(){
        $companies=Company::all();
        return view('admin.add_token',compact('companies'));
    }

    public function saveToken(Request $request){
        $token=new CompanyToken();
        $token->company_id=$request->company;
        $token->token=bcrypt($request->company);
        $token->status=MyConstants::TOKEN_UNUSED;

        if($token->save()){
            return redirect()->route('view_tokens')->with('message','Token successfully added');
        }
        else{
            return back()->with('error','Failed to add token, please contact admin');

        }

    }



    public  function viewTokens(){
        $tokens=CompanyToken::all();
        return view('admin.view_tokens', compact('tokens'));
    }
}
