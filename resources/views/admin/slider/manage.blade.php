@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')
	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-sliders"></i>  &nbsp;  Manage Slider</h1>
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
                      <th>Slider</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($sliders as $key => $slider)
                    <tr>
                      <td>{{ $key++ }}</td>
                      <td>
                      	<img src="{{ asset('/public/assets/admin/sliderImage') }}/{{ $slider->img }}" class="img-responsive" height="40px" width="80px">
                      </td>
                       <td>
                            <div class="btn-group">
                                <!-- <a  href="{{ route('slider.edit',$slider->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            	</a>&nbsp;&nbsp;&nbsp; -->
                            	<a href="{{ url('admin/slider/destroy',$slider->id) }}" onclick="return check_delete_info();"><i class="fa fa-trash-o"></i>
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