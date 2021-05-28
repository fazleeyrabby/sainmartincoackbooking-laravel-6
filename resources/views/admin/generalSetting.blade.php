@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-cog fa-lg"></i>&nbsp; Create General Settings</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">

         <div class="col-lg-12">
            <form action="{{ route('generalSetting.store') }}" method="post" enctype="multipart/form-data">
            	@csrf
            <div class="form-group">
               <label for="exampleInputEmail1" class="col-md-3 control-label"><strong>Web App Name</strong> </label>
               <input class="form-control" name="name" id="" value="{{ $generalsetting->name }}" type="text"  placeholder="Enter Package Name">
            </div>
            <div class="form-group">
             <label class="col-md-3 control-label"><strong>Web App Logo</strong></label>
                 <img style="height: 50px; width: 50px;" src="{{ asset('public/assets/admin/logo') }}/{{ $generalsetting->logo }}" alt="logo" >
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Change Logo</strong></label><br>
               <input type="file" value="" name="logo" class="form-control">
               <b style="color:red; margin-top:10px; font-weight: bold; float: right;margin-right: 10px">Image Must be PNG &amp; Resize: 225x60</b>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><strong>Web App Favicon</strong></label>
                   <img style="height: 50px; width: 50px;" src="{{ asset('public/assets/admin/logo') }}/{{ $generalsetting->favicon }}" alt="" >
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Change Favicon</strong></label><br>
               <input type="file" value="" name="favicon" class="form-control">
               <b style="color:red; margin-top:10px; font-weight: bold; float: right;margin-right: 10px">Image Must be PNG &amp; Resize: 60x60</b>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><strong>For Phone call Logo</strong></label>
                   <img style="height: 50px; width: 50px;" src="{{ asset('public/assets/admin/logo') }}/{{ $generalsetting->phoneCallLogo }}" alt="" >
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Change Phone call Logo</strong></label><br>
               <input type="file" value="" name="phoneCallLogo" class="form-control">
               <b style="color:red; margin-top:10px; font-weight: bold; float: right;margin-right: 10px">Image Must be PNG &amp; Resize: 60x60</b>
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Mobile</strong></label><br>
               <input type="contact" name="mobile" value="{{ $generalsetting->mobile }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Email</strong></label><br>
               <input type="email" name="email" value="{{ $generalsetting->email }}" class="form-control">
            </div>
             <div class="form-group">
               <label class="col-md-3 control-label"><strong>Address</strong></label><br>
               <input type="text" name="address" value="{{ $generalsetting->address }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Facebook</strong></label>
                 <input class="form-control input-lg" name="facebook" value="{{ $generalsetting->facebook }}"  type="text">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Google Plus</strong></label>
                 <input class="form-control input-lg" name="googlePlus" value="{{ $generalsetting->googlePlus }}" type="text">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Tweeter</strong></label>
                 <input class="form-control input-lg" name="tweeter" value="{{ $generalsetting->tweeter }}" type="text">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>instagram</strong></label>
                 <input class="form-control input-lg" name="instagram" value="{{ $generalsetting->instagram }}" type="text">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Youtube</strong></label>
                 <input class="form-control input-lg" name="youtube" value="{{ $generalsetting->youtube }}" type="text">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Youtube video tour link</strong></label>
                 <input class="form-control input-lg" name="youtubeVideoLink" value="{{ $generalsetting->youtubeVideoLink }}" type="text">
            </div>
            <!-- bkash -->
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Buy ticket link for bKash</strong></label>
                 <input class="form-control input-lg" name="buyTicketLinkBkash" value="{{ $generalsetting->buyTicketLinkBkash }}" type="text">
            </div> 
            <div class="form-group">
                <label class="col-md-3 control-label"><strong>Buy ticket bKash logo</strong></label>
                <img style="height: 50px; width: 50px;" src="{{ asset('public/assets/admin/logo') }}/{{ $generalsetting->buyTicketBkashLogo }}" alt="" >
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Change Buy ticket bKash logo</strong></label>
                 <input class="form-control input-lg" name="buyTicketBkashLogo" value="" type="file">
            </div>
            <!-- bus -->
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Buy ticket link for bus</strong></label>
                 <input class="form-control input-lg" name="buyTicketLinkBus" value="{{ $generalsetting->buyTicketLinkBus }}" type="text">
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><strong>Buy ticket Bus logo</strong></label>
                <img style="height: 50px; width: 50px;" src="{{ asset('public/assets/admin/logo') }}/{{ $generalsetting->buyTicketBusLogo }}" alt="" >
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Change Buy ticket Bus logo</strong></label>
                 <input class="form-control input-lg" name="buyTicketBusLogo" value="" type="file">
            </div> 
            <!-- member -->
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Member of link </strong></label>
                 <input class="form-control input-lg" name="memberOfLink" value="{{ $generalsetting->memberOfLink }}" type="text">
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><strong>Member of logo</strong></label>
                <img style="height: 50px; width: 50px;" src="{{ asset('public/assets/admin/logo') }}/{{ $generalsetting->memberOfLogo }}" alt="" >
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Change Member of logo</strong></label>
                 <input class="form-control input-lg" name="memberOfLogo" value="" type="file">
            </div>
             <div class="form-group">
               <label class="col-md-3 control-label"><strong>Footer Bootom Text</strong></label>
               <textarea id="summernote_footer_bottom" name="footerBottomText" value="{{ $generalsetting->footerBottomText }}" placeholder="Cliping Path © All copyright Reserved.">{{ $generalsetting->footerBottomText }}</textarea>
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Emergency help service</strong></label>
               <textarea id="emergenctHelpService" name="emergenctHelpService" value="{{ $generalsetting->emergenctHelpService }}" placeholder="Cliping Path © All copyright Reserved.">{{ $generalsetting->emergenctHelpService }}</textarea>
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>For AC Bus Rent</strong></label>
               <textarea id="forAcBusRent" name="forAcBusRent" value="{{ $generalsetting->forAcBusRent }}" placeholder="Cliping Path © All copyright Reserved.">{{ $generalsetting->forAcBusRent }}</textarea>
            </div> 
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Information</strong></label>
               <textarea id="information" name="information" value="{{ $generalsetting->information }}" placeholder="Cliping Path © All copyright Reserved.">{{ $generalsetting->information }}</textarea>
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>App header background color</strong></label><br>
               <input type="color" name="headerBackgrounColor" value="{{ $generalsetting->headerBackgrounColor }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>App Menubar background color</strong></label><br>
               <input type="color" name="menuBackgrounColor" value="{{ $generalsetting->menuBackgrounColor }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>App footer background color</strong></label><br>
               <input type="color" name="footerBackgroundColor" value="{{ $generalsetting->footerBackgroundColor }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>App Dasdboard header color</strong></label><br>
               <input type="color" name="dashboardHeaderColor" value="{{ $generalsetting->dashboardHeaderColor }}" class="form-control">
            </div> 
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>App Dasdboard header logo color</strong></label><br>
               <input type="color" name="dashboardHeaderLogoColor" value="{{ $generalsetting->dashboardHeaderLogoColor }}" class="form-control">
            </div> 
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>App Dasdboard sidebar color</strong></label><br>
               <input type="color" name="dashboardSidebarColor" value="{{ $generalsetting->dashboardSidebarColor }}" class="form-control">
            </div>
             <div class="form-group" style="padding-bottom: 63px;">
            <button class="btn btn-primary form-control" type="submit">Save Change</button>
            </div>
        </form>
         </div>
     </div>
   </div>
   </div>
</main>

@endsection