@extends('layouts.adminApp')
@section('title', 'Saintmartin Service')
@section('content')
<!-- summernote for text editor -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">

<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-magic"></i>  &nbsp; Create Service</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
            	@csrf
                <div class="form-group col-md-12">
	                <label class="col-md-4 control-label"><strong>  Title </strong></label><br>
	               	<input type="text" name="title" value="{{ $service->title }}" class="form-control" required>
                </div> 
                <div class="form-group">
                 <label class="col-md-3 control-label"><strong>Image</strong></label>
                     <img src="{{ asset('public/assets/admin/images') }}/{{ $service->img }}" alt="" height="100px" width="100px">
                </div>
                <div class="form-group col-md-12">
	                <label class="col-md-12 control-label"><strong>Attach Image</strong></label><br>
	               	<input type="file" name="img" class="form-control" required>
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

