@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')
	<main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="tab-content">
              <div class="tile user-settings">
                <h4 class="line-head">Update Profile</h4>
                <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <label class="col-md-3 control-label"><strong>Profile Photo</strong></label>
                      <img style="height: 50px; width: 50px;" src="{{ asset('public/assets/admin/logo/') }}/{{ $admin->photo }}" alt="logo" >
                    </div>
                    <div class="col-md-8 mb-4">
                      <label>Photo</label>
                      <input class="form-control" name="profileImg" value="" type="file">
                    </div>
                    <div class="col-md-8 mb-4">
                      <label>Name</label>
                      <input class="form-control" type="text" name="name" value="{{ $admin->name }}" required="">
                    </div>
                    <div class="col-md-8 mb-4">
                      <label>Email</label>
                      <input class="form-control" type="email" name="email" value="{{ $admin->email }}" required="">
                    </div>
                    <div class="col-md-8 mb-4">
                      <label>New Password</label>
                      <input class="form-control" type="password" name="password" value="" >
                    </div>
                    <div class="col-md-8 mb-4">
                      <label>Confirm Password</label>
                      <input class="form-control" type="password" name="confirmPassword" value="" >
                    </div>

                    <div class="clearfix"></div>
                    
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save change</button>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
</main>
@endsection