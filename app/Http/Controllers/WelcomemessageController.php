<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Welcomemessage;

class WelcomemessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $welcomemessages = Welcomemessage::all();
        return view('admin.welcomeMessage.manage',compact('welcomemessages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->forget(['menu']);
        $request->session()->put(['menu'=>'welcomeMessage']);

        $welcomeMessage = Welcomemessage::orderBy('id','DESC')->first();
        return view('admin.welcomeMessage.create',compact('welcomeMessage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $obj = Welcomemessage::first();
        
        // $this->validate($request, [
        //     'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $obj->name = $request->name;
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->designation = $request->designation;
        $obj->contact = $request->contact;
        // profile
       if($request->hasfile('img')) 
        { 
          $file = $request->file('img');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('public/assets/admin/images', $filename);
          $obj->img = $filename;
        }

        $obj->save();
        return redirect()->back()->with('success', 'Your Welcome Message has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destory($id)
    {
        $data = Welcomemessage::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success', ' Welcome Message will be deleted successfully');
    }
}
