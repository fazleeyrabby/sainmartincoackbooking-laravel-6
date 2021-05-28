@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')
	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-automobile"></i>  &nbsp;  Manage Rent Coach</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($rents as $key => $rent)
                    <tr>
                      <td>{{ $key++ }}</td>
                      <td>{{ $rent->title }}</td>
                      
                      <td>
                      	<img src="{{ asset('/public/assets/admin/sliderImage/') }}/{{ $rent->img }}" class="img-responsive" height="40px" width="80px">
                      </td>
                      <td>
                        @if($rent->publication_status == 1)
                          <p class="text-success">{{ 'published' }}</p>
                        @else
                          <del class="text-danger">{{ 'unpublished' }}</del>
                        @endif
                      </td>
                       <td>
                            <div class="btn-group">
                                <a  href="{{ route('rent.edit',$rent->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            	</a>&nbsp;&nbsp;&nbsp;
                            	<a href="{{ url('admin/rent/destroy',$rent->id) }}" onclick="return check_delete_info();"><i class="fa fa-trash-o"></i>
                            </div>
                        </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection