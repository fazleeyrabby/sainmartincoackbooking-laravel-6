<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientCategory;

class ClientcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->forget(['menu']);
        $request->session()->put(['menu'=>'clientCategory']);

        $clientCategories = ClientCategory::orderBy('id','DESC')->get();
        return view('admin.clientCategory',compact('clientCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $clientCategory = new ClientCategory;
       $clientCategory->name = $request->name;
       $clientCategory->save();
       return redirect()->back()->with('success', 'Client Category has been added successfully');  
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
    public function update(Request $request)
    {
        $clientCategory = ClientCategory::where('id',$request->editClientCategoryId)->first();
        $clientCategory->name = $request->name; 
        $clientCategory->save();
        return redirect()->back()->with('success', ' Client Category has been Updaetd successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ClientCategory::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success', 'Client Category will be deleted successfully');
    }
}
