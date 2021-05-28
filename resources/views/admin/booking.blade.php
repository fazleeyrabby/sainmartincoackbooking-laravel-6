@extends('layouts.adminApp')
@section('title', 'Saintmartin Service')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa fa-user"></i> &nbsp; Booking Information</h1>
      </div>
   </div>
   <div id="error"></div>
   <!--Start Add Model in modal -->
   <!-- <div class="modal fade" id="add-brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  $bookingcategories = App\Clientcategory::orderBy('id','DESC')->get();
                  ?>
               <div class="form-group row">
                  <label class="control-label col-md-3"> Client Category <strong style="color:red">*</strong></label>
                  <div class="col-md-8">
                     <select style="text-align: center" class="form-control" aria-invalid="false" id="brand_id" name="client_cat_id">
                        <option value="">----Select Client Category  ----</option>
                        @foreach($bookingcategories as $bookingcategory)
                        <option value="{{ $bookingcategory->id }}">{{ $bookingcategory->name }}</option>
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
   </div> -->
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
                           <th>Coach Name</th>
                           <th>Client Name</th>
                           <th>Contact</th>
                           <th>Booking Date Time</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        <?php
                           $count = 1; 
                           ?>
                        @foreach($bookings as $booking)
                        <tr>
                           <td style="border-right: 1px solid black;">{{ $count++ }}</td>
                           <td>{{ $booking->coachName }}</td>
                           <td>{{ $booking->name }}</td>
                           <td>{{ $booking->number }}</td>
                           <td>{{ $booking->created_at }}</td>
                           <td>
                              <div class="btn-group">
                                 <!-- published/unpublished -->
                                 @if( $booking->status == 2)
                                 <a href="{{ route('bookingcoach.unpublished',$booking->booking_id) }}" class="edit" title="unpublished" data-brandname="" style="color:green;">
                                 <i class=" fa fa-arrow-up" aria-hidden="true"></i>
                                 </a>&nbsp;&nbsp;&nbsp;
                                 @else
                                 <a href="{{ route('bookingcoach.published',$booking->booking_id) }}" class="edit" title="published" data-brandname="" style="color:red;">
                                 <i class=" fa fa-arrow-down" aria-hidden="true"></i>
                                 </a>&nbsp;&nbsp;&nbsp;
                                 @endif
                                 <!-- view -->
                                 <a href="" title="view"  data-brandname="{{ $booking->name }}" data-toggle="modal" data-target="#coachBookingView{{$booking->booking_id}}"><i class="fa fa-eye" aria-hidden="true"></i>
                                 </a>&nbsp;&nbsp;&nbsp;
                                 <!-- destroy -->
                                 <a href="{{ route('bookingcoach.destroy',$booking->booking_id) }}" title="delete" onclick="return check_delete_info();"><i class="fa fa-trash-o"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <!-- Start Edit Model in modal-->
                        <div class="modal fade" id="coachBookingView{{$booking->booking_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content ">
                                 <div class="modal-header">
                                    <h5 class="modal-title text-info" id="exampleModalCenterTitle">Booking Coach details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <input type="hidden" name="editDestinationid" value="{{$booking->booking_id}}">
                                 <div class="modal-body">
                                    <br>
                                    <div class="form-group row">
                                       <label class="control-label col-md-2"><b>Coach Name :</b></label>
                                       <div class="col-md-8">
                                          <p>{{ $booking->coachName }}</p>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="control-label col-md-2"><b>Client Name :</b></label>
                                       <div class="col-md-8">
                                          <p>{{ $booking->name }}</p>
                                       </div>
                                    </div> 
                                    <div class="form-group row">
                                       <label class="control-label col-md-2"><b>Email :</b></label>
                                       <div class="col-md-8">
                                             <p>{{ $booking->email }}</p>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="control-label col-md-2"><b>Destination :</b></label>
                                       <div class="col-md-8">
                                            <p>{{ $booking->destination }}</p>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="control-label col-md-2"><b>Address :</b></label>
                                       <div class="col-md-8">
                                        <p> {{ $booking->address }}</p>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="control-label col-md-2"><b>From Date :</b></label>
                                       <div class="col-md-8">
                                          <p>{{ $booking->fromDate }}</p>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="control-label col-md-2"><b>To Date :</b></label>
                                       <div class="col-md-8">
                                         <p>{{ $booking->toDate }}</p>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="control-label col-md-2"><b>Contact :</b></label>
                                       <div class="col-md-8">
                                         <p> {{ $booking->number }}</p>
                                       </div>
                                    </div>  
                                    <div class="form-group row">
                                       <label class="control-label col-md-2"><b>Message :</b></label>
                                       <div class="col-md-8">
                                        <p style="text-align: justify;"> {{ $booking->message }}</p>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="control-label col-md-2"><b>Coach Image :</b></label>
                                       <div class="col-md-8">
                                          <img src="{{ asset('public/assets/admin/images') }}/{{ $booking->coachImage }}" alt="" height="200px" width="300px">
                                          <div class="form-control-feedback" id="nameMessage"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                        <!-- End Edit model -->
                     </tbody>
                  </table>
                 <!--  <div class="button">
                     <button title="Add Brand" data-toggle="modal" data-target="#add-brand" class="button btn-lg shadow mb-5 rounded btn btn-primary" style="">Add Client </button>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End record of data -->
</main>
@endsection

