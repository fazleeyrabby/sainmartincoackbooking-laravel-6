<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ourprofile;

class OurProfileController extends Controller
{
    public function create(Request $request)
    {
    	$request->session()->forget(['menu']);
    	$request->session()->put(['menu'=>'profile']);

        $ourProfile = Ourprofile::first();
    	return view('admin.ourProfile',compact('ourProfile'));
    }

     public function store(Request $request)
    {

        $this->validate($request, [
            'profile' => 'required|mimes:pdf|max:10000',
        ]);

         $obj = Ourprofile::first();
        // $obj = new Ourprofile;

        if ($request->hasFile('profile')) {
            $files=$request->file('profile');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/logo/';
            $files->move($destination_path, $picture); 
            $obj->profile=$picture;    
        }

        $obj->save();
 
        return redirect()->back()->with('success', ' Your profile PDF has been update successfully'); 
    }
}
