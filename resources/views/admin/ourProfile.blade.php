@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')
	<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-file-pdf-o"></i>  &nbsp;  Create Our Profile PDF</h1>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          {!! Form::open(['route' => 'profile.store','files'=>true,'class'=>'form-horizontal']) !!}
          <div class="fulltextpdf" style="padding: 10px;">
            <h3>PDF Download</h3>
            <a href="{{ asset('public/assets/admin/logo/') }}/{{ $ourProfile->profile }}"><i class="fa fa-download" aria-hidden="true"></i></a>
        </div>
        <div class="form-group">
          {!! Form::label('profile','Attach Profile PDF',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class=" col-md-4 col-sm-4 col-xs-12">
            {!! Form::file('profile', ['class' => 'form-control','required']) !!}
          </div>
        </div>
        
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="Submit" class="btn btn-primary">Save Change </button>
          </div>
        </div>
        {!! Form::close() !!}
        </div>
      </div>
    </div>
</main>
@endsection