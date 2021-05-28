@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')
	<main class="app-content">
    <div class="app-title">
        <div>
            <h1></i>  Edit Rent for Coach</h1>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
        <form action="{{ route('admin.update.rent') }}" enctype="multipart/form-data" method="POST" >
          <input type="hidden" name="id" value="{{$rent->id}}">
        @csrf
        <div class="form-group">
          {!! Form::label('heading', 'Title',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('title',$rent->title,array('class' => 'form-control col-md-8 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('img','Attach Upload',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class=" col-md-4 col-sm-4 col-xs-12">
            {!! Form::file('img', ['class' => 'form-control']) !!}
          </div>
        </div>
       <div class="form-group col-md-4 col-sm-4 col-xs-12">
               <label for="exampleSelect1">Publication Status</label>
               <select class="form-control" id="" name="publication_status" required>
               	 <option>--Select Status--</option>
                  <option value="1" <?php if($rent->publication_status == 1) echo "selected";?>>Published</option>
                  <option value="2" <?php if($rent->publication_status == 2) echo "selected";?>>Unpublished</option>
               </select>
            </div>  
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="Submit" class="btn btn-success">Update Rent</button>
          </div>
        </div>
      </form>
        </div>
      </div>
    </div>
   

</main>
@endsection