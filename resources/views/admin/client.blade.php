@extends('layouts.adminApp') 
@section('title', 'Saintmartin Service') 
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa fa-user"></i> &nbsp; Client Details</h1>
      </div>
   </div>
   <div id="error"></div>
   <!--Start Add Model in modal -->
   <div class="modal fade" id="add-brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
         <div class="modal-content ">
            <div class="modal-header">
               <h5 class="modal-title text-info" id="exampleModalCenterTitle">Add Client</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            {!! Form::open(['route' => 'client.store','class'=>'form-horizontal','id'=>'modelAddForm','name'=>'modelAddForm']) !!}
            <div class="modal-body">
               <div class="title">
                  <b> Fields marked with <strong style="color:red">*</strong> are mandatory </b>
               </div>
               <div class="model-border">
               </div>
               <br>
               <?php
                  $clientcategories = App\Clientcategory::orderBy('id','DESC')->get();
                  ?>
               <div class="form-group row">
                  <label class="control-label col-md-3"> Client Category <strong style="color:red">*</strong></label>
                  <div class="col-md-8">
                     <select style="text-align: center" class="form-control" aria-invalid="false" id="brand_id" name="client_cat_id">
                        <option value="">----Select Client Category  ----</option>
                        @foreach($clientcategories as $clientcategory)
                        <option value="{{ $clientcategory->id }}">{{ $clientcategory->name }}</option>
                        @endforeach
                     </select>
                     <div class="form-control-feedback" id="brandMessage"></div>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="control-label col-md-3"> Client Name<strong style="color:red">*</strong>
                  </label>
                  <div class="col-md-8">
                     {!! Form::text('name','',array('class'=>'form-control','id'=>'name')) !!}
                     <div class="form-control-feedback" id="modelMessage"></div>
                  </div>
               </div>
            </div>
            <div class="text-center">
               <button type="submit" class="btn btn-primary btn-lg ">Add</button>
            </div>
            {!! Form::close() !!}
         </div>
      </div>
   </div>
   <!-- End Add Model modal -->
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
                           <th>Client Category</th>
                           <th>Client</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        <?php
                           $count = 1; 
                           ?>
                        @foreach($clients as $client)
                        <tr>
                           <td style="border-right: 1px solid black;">{{ $count++ }}</td>
                           <td>{{ $client->clientCategoryName }}</td>
                           <td>{{ $client->name }}</td>
                           <td>
                              <div class="btn-group">
                                 <a class="edit" title="Edit" data-brandname="" data-toggle="modal" data-target="#editClient{{ $client->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                 </a>&nbsp;&nbsp;&nbsp;
                                 <a href="{{ url('admin/client/destroy',$client->id) }}" onclick="return check_delete_info();"><i class="fa fa-trash-o"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <!-- Start Edit Model in modal-->
                        <div class="modal fade" id="editClient{{ $client->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title text-info" id="exampleModalCenterTitle">Edit Client</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <form action="{{ route('admin.update.client') }}" method="POST" id="modelEditForm" name="modelEditForm">
                                    @csrf
                                    <input type="hidden" name="editClientId" value="{{ $client->id }}">
                                    <!--  -->
                                    <div class="modal-body">
                                       <div class="title">
                                          <b> Fields marked with <strong style="color:red">*</strong> are mandatory </b>
                                       </div>
                                       <div class="model-border"></div>
                                       <br>
                                       <div class="form-group row">
                                          <label class="control-label col-md-3"> Client Category <strong style="color:red">*</strong></label>
                                          <div class="col-md-8">
                                             <select style="text-align: center" class="form-control" aria-invalid="false" name="client_cat_id" required="required">
                                             	@foreach($clientcategories as $clientcategory)
                                                <option value="{{ $clientcategory->id }}" {{$clientcategory->id == $client->client_cat_id ? 'selected' : ''}}>{{ $clientcategory->name }}</option>
                                                @endforeach
                                             </select>
                                             <div class="form-control-feedback" id="modelMessage"> </div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label class="control-label col-md-3"> Client<strong style="color:red">*</strong></label>
                                          <div class="col-md-8">
                                             <input class="form-control" type="text" name="name" id="name" value="{{ $client->name }}">
                                             <div class="form-control-feedback" id="modelMessage"> </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-center">
                                       <button type="submit" class="btn btn-primary btn-lg ">Update</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        @endforeach
                        <!-- End Edit model -->
                     </tbody>
                  </table>
                  <div class="button">
                     <button title="Add Brand" data-toggle="modal" data-target="#add-brand" class="button btn-lg shadow mb-5 rounded btn btn-primary" style="">Add Client </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End record of data -->
</main>
@endsection