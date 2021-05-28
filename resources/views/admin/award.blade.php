@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-trophy"></i>  &nbsp; Award Details</h1>
      </div>
   </div>
   <!--Start Add Destination modal -->
   <div class="modal fade" id="add-brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
         <div class="modal-content ">
            <div class="modal-header">
               <h5 class="modal-title text-info" id="exampleModalCenterTitle">Add Award</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            {!! Form::open(['route' => 'award.store','files'=>true,'class'=>'form-horizontal ','id'=>'brandAddForm','name'=>'brandAddForm']) !!}
            <div class="modal-body">
               <div class="title">
                  <b> Fields marked with <strong style="color:red">*</strong> are mandatory </b>
               </div>
               <div class="brand-item-border">
               </div>
               <br>
               <div class="form-group row">
                  <label class="control-label col-md-3"> Attach Image<strong style="color:red">*</strong></label>
                  <div class="col-md-8">
                     <input type="file" name="img" id="name" class="form-control " required="">
                     <div class="form-control-feedback" id="nameMessage"></div>
                  </div>
               </div>
            </div>
            <div class="text-center">
               <button type="submit" class="btn btn-primary btn-lg ">Add</button>
            </div>
            </form>
         </div>
      </div>
   </div>
   <!-- End Add Coach modal -->
   <!-- record of data -->
   <div class="row">
      <div class="col-md-12">
         <div class="tile">
            <div class="tile-body">
               <div class="table-responsive">
                  <table class="table table-hover table-bbranded" id="sampleTable">
                     <thead align="center">
                        <tr>
                           <th>SL</th>
                           <th>Image</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        <?php
                           $count = 1; 
                           ?>
                        @foreach($awards as $award)
                        <tr>
                           <td>{{ $count++ }}</td>
                           <td>
                              <img src="{{ asset('public/assets/admin/images/') }}/{{ $award->img }}" class="img-responsive" height="40px" width="80px">
                           </td>
                           <td>
                              <div class="btn-group">
                                 <a class="edit" title="Edit" data-brandname="{{ $award->name }}" data-toggle="modal" data-target="#editAward{{$award->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                 </a>&nbsp;&nbsp;&nbsp;
                                 <a href="{{ url('admin/award/destroy',$award->id) }}" onclick="return check_delete_info();"><i class="fa fa-trash-o"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <!-- Start Edit award modal -->
                        <div class="modal fade" id="editAward{{$award->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content ">
                                 <div class="modal-header">
                                    <h5 class="modal-title text-info" id="exampleModalCenterTitle">Edit Award</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 {!! Form::open(['route' => 'admin.update.award','files'=>true,'class'=>'form-horizontal brandEditValidation','id'=>'brandEditForm','name'=>'brandEditForm']) !!}
                                 <input type="hidden" name="editAwardid" value="{{$award->id}}">
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
                                       <label class="control-label col-md-3"> Image<strong style="color:red">*</strong></label>
                                       <div class="col-md-8">
                                          <img src="{{ asset('public/assets/admin/images/') }}/{{ $award->img }}" alt="" height="100px" width="100px">
                                          <div class="form-control-feedback" id="nameMessage"></div>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="control-label col-md-3"> Attach Image<strong style="color:red">*</strong></label>
                                       <div class="col-md-8">
                                          <input type="file" name="img" id="name" class="form-control ">
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
                     <button title="Add Brand" data-toggle="modal" data-target="#add-brand" class="button btn-lg shadow mb-5 rounded btn btn-primary" style="">Add Award </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection