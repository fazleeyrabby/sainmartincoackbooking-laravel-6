@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-envelope"></i>  &nbsp; Create Welcome Message</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">
      <div class="row">
         <div class="col-lg-6">
            {!! Form::open(['route' => 'welcomemessage.store','files'=>true,'class'=>'form-horizontal']) !!}
            <div class="form-group">
               <label for="exampleInputEmail1">Title</label>
               <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="{{ $welcomeMessage->title }}" name="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
               <label for="exampleTextarea">Description</label>
               <textarea class="form-control" name="description" id="exampleTextarea" rows="3">{{ $welcomeMessage->description }}</textarea>
            </div>
             <div class="form-group">
             <label class="col-md-3 control-label"><strong>Profile</strong></label>
                 <img src="{{ asset('/public/assets/admin/images/') }}/{{ $welcomeMessage->img }}" alt="" height="100px" width="100px">
            </div>
            <div class="form-group">
               <label for="exampleInputFile">Attach Profile</label>
               <input class="form-control-file" name="img" id="exampleInputFile" type="file" aria-describedby="fileHelp">
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="{{ $welcomeMessage->name }}" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Designation</label>
               <input class="form-control" value="{{ $welcomeMessage->designation }}" name="designation" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter designation">
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Contact</label>
               <input class="form-control" value="{{ $welcomeMessage->contact }}" id="exampleInputEmail1" type="number" aria-describedby="emailHelp" name="contact" placeholder="Enter contact">
            </div>
            <div class="tile-footer">
               <button class="btn btn-primary" type="submit">Save Change</button>
            </div>
            {!! Form::close() !!}
         </div>
      </div>
   </div>
</main>
@endsection