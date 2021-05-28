<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generalsetting;

class GeneralsettingController extends Controller
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
    public function create()
    {
        $generalsetting = Generalsetting::orderBy('id','DESC')->first();
        return view('admin.generalSetting',compact('generalsetting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $input = $request->all();
        // return $data = $request->all();
        $obj = Generalsetting::first();
        // $obj = new Generalsetting;

        $obj->name=$request->name;
        $obj->mobile=$request->mobile;
        $obj->email=$request->email;
        $obj->address=$request->address;
        $obj->facebook=$request->facebook;
        $obj->googlePlus=$request->googlePlus;
        $obj->tweeter=$request->tweeter;
        $obj->instagram=$request->instagram;
        $obj->youtube=$request->youtube;
        $obj->youtubeVideoLink=$request->youtubeVideoLink;
        $obj->buyTicketLinkBkash=$request->buyTicketLinkBkash;
        $obj->buyTicketLinkBus=$request->buyTicketLinkBus;
        $obj->memberOfLink=$request->memberOfLink;
        $obj->footerBottomText=$request->footerBottomText;
        $obj->emergenctHelpService=$request->emergenctHelpService;
        $obj->forAcBusRent=$request->forAcBusRent;
        $obj->information=$request->information;
        $obj->headerBackgrounColor=$request->headerBackgrounColor;
        $obj->menuBackgrounColor=$request->menuBackgrounColor;
        $obj->footerBackgroundColor=$request->footerBackgroundColor;
        $obj->dashboardHeaderColor=$request->dashboardHeaderColor;
        $obj->dashboardHeaderLogoColor=$request->dashboardHeaderLogoColor;
        $obj->dashboardSidebarColor=$request->dashboardSidebarColor;
       
        // logo
        if ($request->hasFile('logo')) {
            $files=$request->file('logo');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/logo/';
            $files->move($destination_path, $picture); 
            $obj->logo=$picture;
        }
        
        // favicon
        if ($request->hasFile('favicon')) {
            $files=$request->file('favicon');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/logo/';
            $files->move($destination_path, $picture); 
            $obj->favicon=$picture;    
        } 

        // phoneCallLogo
        if ($request->hasFile('phoneCallLogo')) {
            $files=$request->file('phoneCallLogo');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/logo/';
            $files->move($destination_path, $picture); 
            $obj->phoneCallLogo=$picture;    
        }

        // buyTicketBkashLogo
        if ($request->hasFile('buyTicketBkashLogo')) {
            $files=$request->file('buyTicketBkashLogo');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/logo/';
            $files->move($destination_path, $picture); 
            $obj->buyTicketBkashLogo=$picture;    
        }

        // buyTicketBkashLogo
        if ($request->hasFile('buyTicketBusLogo')) {
            $files=$request->file('buyTicketBusLogo');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/logo/';
            $files->move($destination_path, $picture); 
            $obj->buyTicketBusLogo=$picture;    
        }

        // buyTicketBkashLogo
        if ($request->hasFile('memberOfLogo')) {
            $files=$request->file('memberOfLogo');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/logo/';
            $files->move($destination_path, $picture); 
            $obj->memberOfLogo=$picture;    
        }


        $obj->save();
        return redirect()->back()->with('success', ' General setting has been updated successfully');
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
    public function destroy($id)
    {
        //
    }
}
