<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class ClientController extends Controller
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
        $request->session()->put(['menu'=>'client']);

        $clients = Client::join('clientcategory','client.client_cat_id','=','clientcategory.id')
                            ->select('client.*', 'clientcategory.name as clientCategoryName')
                            ->orderBy('id','DESC')->get();
        return view('admin.client',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->client_cat_id = $request->client_cat_id;
        $client->name = $request->name;
        $client->save();
        return redirect()->back()->with('success', ' Client has been added successfully');  
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
        $client = Client::where('id',$request->editClientId)->first();
        $client->client_cat_id = $request->client_cat_id;
        $client->name = $request->name;
        $client->save();
        return redirect()->back()->with('success', ' Client has been Updaetd successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Client::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success', ' Client will be deleted successfully'); 
    }
}
