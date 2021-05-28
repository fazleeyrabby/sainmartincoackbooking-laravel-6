<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function create(Request $request)
    {
        $request->session()->forget(['menu']);
        $request->session()->put(['menu'=>'about']);
        
    	$about = About::orderBy('id','DESC')->first();
    	return view('admin.about',compact('about'));
    }
    public function store(Request $request)
    {
    	// $about = new About;
    	$about = About::first();
		$about->title = $request->title;
		$about->description = $request->description;  
		$about->save();
		return redirect()->back()->with('success', ' About has been added successfully');  
    }
}
