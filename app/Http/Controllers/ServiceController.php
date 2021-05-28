<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function create(Request $request)
    {

      $request->session()->forget(['menu']);
      $request->session()->put(['menu'=>'service']);

    	$service = Service::orderBy('id','DESC')->first();
    	return view('admin.service',compact('service'));
    }
    public function store(Request $request)
    {
    	// $service = new Service;
    	$service = Service::first();
        $service->title = $request->title;
       if($request->hasfile('img')) 
        { 
          $file = $request->file('img');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('public/assets/admin/images', $filename);
          $service->img = $filename;
        }

        $service->save();
        return redirect()->back()->with('success', 'Your Service has been added successfully');
    }
}
