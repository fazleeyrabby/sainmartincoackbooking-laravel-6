@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-sliders"></i>  &nbsp;  Create Slider</h1>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          {!! Form::open(['route' => 'slider.store','files'=>true,'class'=>'form-horizontal']) !!}
       
        <div class="form-group">
          {!! Form::label('img','File Upload',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class=" col-md-4 col-sm-4 col-xs-12">
            {!! Form::file('img', ['class' => 'form-control','required']) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('publication_status','Publication status',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-4 col-sm-4 col-xs-12">
            <select name="publication_status" class="form-control" required>
              <option value="">Please select publication status</option>
              <option value="1">Published</option>
              <option value="2">Unpublished</option>
            </select>
          </div>       
       </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="Submit" class="btn btn-primary">Save Slider</button>
          </div>
        </div>
        {!! Form::close() !!}
        </div>
      </div>
    </div>
</main>
@endsection