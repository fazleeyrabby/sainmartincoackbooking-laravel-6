<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attachefile; 
use App\Admin; 
use Auth; 
use Hash;
use session;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->forget(['menu']);
        $request->session()->put(['menu'=>'dashboard']);

        return view('adminChild');
    }

    public function create()
    {
    	$admin = Admin::where('id',Auth::user()->id)->first();
    	return view('admin.profile.create',compact('admin'));
    }

    public function adminProfileUpdate(Request $request)
    {

    	// return $input = $request->all();
        $user = Admin::where('id',Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
         // profile file
        if( $request->hasFile('profileImg'))
        {
            $files=$request->file('profileImg');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/logo/';
            $files->move($destination_path, $picture); 
            $user->photo=$picture;  
        }

        $password = $request->password;
        $confirmPassword = $request->confirmPassword;
        if($password != $confirmPassword){
            return back()->with('alert','Password does not match');         
        } else {
            // $user = Admin::where('id', Auth::user()->id)->first();
            $user->password = Hash::make($password);
            $user->save();
             return back()->with('success','Admin Profile Updated successfully');
            // return back()->with('success','Password Changed');
        }


        // $password = $request->password;
        // $confirmPassword = $request->confirmPassword;
        // if($password != $confirmPassword)
        // {
        //     return back()->with('alert','Password does not match');         
        // } 
        // else 
        // {
        //     $user->password = bcrypt($password);
        // }
        // $user->save();

       
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }
}
