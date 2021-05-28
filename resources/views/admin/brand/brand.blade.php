@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')

<main class="app-content">
     <div class="app-title">
      <div>
         <h1><i class="fa fa-magic"></i>  &nbsp; Service Details</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <?php  
                $service = App\Service::orderBy('id','DESC')->first();

            ?>
            <h3><i class="fa fa-magic"></i>  &nbsp; Create Service</h3>
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

    <!--Start Add Service Category modal -->
    <div class="modal fade" id="add-brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title text-info" id="exampleModalCenterTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => 'serviceCategory.store','class'=>'form-horizontal ','id'=>'brandAddForm','name'=>'brandAddForm']) !!}
                <div class="modal-body">
                    <div class="title">
                        <b> Fields marked with <strong style="color:red">*</strong> are mandatory </b>
                    </div>
                    <div class="brand-item-border">
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="control-label col-md-3"> Category Name<strong style="color:red">*</strong></label>
                        <div class="col-md-8">
                            <input type="text" name="name" id="name" class="form-control " required="">
                            <div class="form-control-feedback" id="nameMessage"></div>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg ">Add</button>
                </div>
                {!! Form::close() !!}
                <!-- </form> -->
            </div>
        </div>
    </div>
    <!-- End Add Brand modal -->

    <!-- record of data -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3><i class="fa fa-list-alt"></i>  &nbsp;Service Category Details</h3>
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bbranded" id="sampleTable">
                            <thead align="center">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                <?php
                                    $count = 1; 
                                 ?>
                                    @foreach($brands as $brand)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $brand->name }}</td>
                                        <td>
                                            <div class="btn-group">

                                                <a class="edit" title="Edit" data-brandname="{{ $brand->name }}" data-toggle="modal" data-target="#editbrand{{$brand->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>&nbsp;&nbsp;&nbsp;
                                                
                                                <a href="{{ url('admin/service-category/destroy',$brand->id) }}" onclick="return check_brand_delete_info();"><i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Start Edit Category modal -->
                                    <div class="modal fade" id="editbrand{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content ">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-info" id="exampleModalCenterTitle">Edit Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <!--  -->                                                
                                                {!! Form::open(['route' => 'admin.update.brand','class'=>'form-horizontal brandEditValidation','id'=>'brandEditForm','name'=>'brandEditForm']) !!}
                                                <input type="hidden" name="ebrandid" value="{{$brand->id}}">
                                                
                                                
                                                <!--  -->
                                                <div class="modal-body">
                                                    <div class="title">
                                                        <b> Fields marked with <strong style="color:red">*</strong> are mandatory </b>
                                                    </div>
                                                    <div class="brand-item-border">
                                                    </div>
                                                    <div class="line"></div>
                                                    <br>
                                                    <div class="form-group row">
                                                        <label class="control-label col-md-3"> Category Name<strong style="color:red">*</strong></label>
                                                        <div class="form-control-feedback" id="nameMessage"></div>
                                                        <div class="col-md-8">
                                                            <input class="form-control" id="name" type="text" name="name" value="{{$brand->name}}" required="">
                                                            <div class="form-control-feedback" id="nameMessage"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary btn-lg ">Update</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Edit Brand modal -->
                                    @endforeach
                            </tbody>
                        </table>
                        <div class="button">
                            <button title="Add Brand" data-toggle="modal" data-target="#add-brand" class="button btn-lg shadow mb-5 btn btn-primary rounded" style="">Add Category </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection