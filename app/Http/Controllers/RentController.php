<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rent;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->forget(['menu']);
        $request->session()->put(['menu'=>'rentCoachManage']);

        $rents = Rent::orderBy('id','DESC')->get();
        return view('admin.rent.manage',compact('rents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->forget(['menu']);
        $request->session()->put(['menu'=>'rentCoachCreate']);

        return view('admin.rent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasfile('img')) 
        { 
          $file = $request->file('img');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('public/assets/admin/sliderImage', $filename);
        }

        $rent=Rent::create([
            'title'=>$request->title,
            'img'=>$filename,
            'publication_status'=>$request->publication_status
        ]);
        return redirect('admin/rent')->with('success', ' Your Rent has been added successfully');
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
        $rent = Rent::findOrFail($id);
        return view('admin.rent.edit',compact('rent'));
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
        // return $input = $request->all();
        $rent = Rent::where('id',$request->id)->first();
        $rent->title = $request->title;
        $rent->publication_status = $request->publication_status;
         if($request->hasfile('img')) 
        { 
          $file = $request->file('img');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('public/assets/admin/sliderImage', $filename);
          $rent->img = $filename;
        }
        $rent->save();
        return redirect('admin/rent')->with('success', ' Rent has been Updaetd successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Rent::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success', ' Rent will be deleted successfully');  
    }
}
