@extends('layouts.adminApp')
@section('title', 'Saintmartin Service')
@section('content')
<!-- summernote for text editor -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">

<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-tasks"></i>  &nbsp; Create About us</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ route('about.store') }}" method="post">
            	@csrf
                <div class="form-group col-md-12">
	                <label class="col-md-4 control-label"><strong>  Title </strong></label><br>
	               	<input type="text" name="title" value="{{ $about->title }}" class="form-control" required>
                </div> 
                <div class="form-group col-md-12">
	                <label class="col-md-12 control-label"><strong>Description</strong></label><br>
	               	<textarea cols="60" rows="1" name="description" id="desthree" class="form-control" required>{{ $about->description }}</textarea>
                </div>

                <!-- btn -->
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" type="submit"></i>Save Change</button>
                </div>
              </form>
            </div>
          </div>
        </div>
   </div>
</main>
@endsection

