<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addAdmin(){
        return view('admin.add_admin');
    }

    public function viewAdmins(){
    	$admins=Admin::all();
        return view('admin.view_admins',compact('admins'));
    }


    public function saveAdmin(Request $request){
    	if(User::where('email', $request->email)->exists()){
    		return back()->with('error','Admin already exists');
    	}
    	else{
    		$user=new User();
    		$user->name=$request->name.' '.$request->surname;
    		$user->email=$request->email;
    		$user->role='admin';
    		$user->password=bcrypt($request->password);

    		if($user->save()){
    			$admin=new Admin();
    			$admin->name=$request->name;
    			$admin->surname=$request->surname;
    			$admin->email=$request->email;
    			$admin->phonenumber=$request->phonenumber;
    			$admin->address=$request->address;

    			if($admin->save()){
    				return redirect()->route('view_admins')->with('message','Admin successfully added');
    			}
    			else{
    				return back()->with('error','Failed to add admin, please contact admin');
    			}
    		}

    	}
    }


    public function changePassword(Request $request){
    	$changePass=User::where('id', auth()->user()->id)->update([
    		'password'=>$request->password
    	]);

    	if($changePass){
    		return back()->with('message','Password successfully changed');
    	}
    	else{
    		return back()->with('error','Failed to change password, please contact admin');
    	}
    }


}
