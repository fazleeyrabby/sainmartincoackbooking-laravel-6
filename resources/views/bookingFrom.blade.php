@extends('layouts.frontendLayout.frontendBookingLayout')
@section('title','Saintmartin Service')
@section('content')
<section class="about-area">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="about-box">
               <div class="col-md-12">
                  <div class="booking-form-area">
                     <div class="row">
                        <form action="{{ route('booking.store',$id) }}" method="post" class="coachValidation" id="coachAddForm" >
                           @csrf
                           <div class="col-md-4">
                              <div class="form-group booking_form">
                                 <label for="name" class="">Name</label>
                                 <div class="">
                                    <input class="form-control form_field_booking" required="required" name="name" type="text" value="" id="name">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group booking_form">
                                 <label for="email" class="">Email</label>
                                 <div class="">
                                    <input class="form-control form_field_booking" required="required" name="email" type="email" value="" id="email">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 booking_form">
                              <div class="form-group">
                                 <label for="number" class="">Mobile Phone No</label>
                                 <div class="">
                                    <input class="form-control form_field_booking uniform-input number" required="required" name="number" type="number" value="" id="number">
                                 </div>
                              </div>
                           </div> 
                           <div class="col-md-4">
                              <div class="form-group booking_form">
                                 <label for="address" class="">From Date</label>
                                 <div class="">
                                    <input class="form-control form_field_booking" required="required" name="fromDate" onblur="" min="{{ now()->toDateString('Y-m-d') }}" type="date" value="" id="fromDate">
                                 </div>
                                  <div class="form-control-feedback" id="nameMessage"></div>
                              </div>

                           </div>
                           <div class="col-md-4 booking_form">
                              <div class="form-group">
                                 <label for="number" class="">To Date</label>
                                 <div class="">
                                    <input class="form-control form_field_booking uniform-input number" onblur="checkCoachBooking({{ $id }} )" min="{{ now()->toDateString('Y-m-d') }}" required="required" name="toDate" type="date" value="" id="toDate">
                                 </div>
                              </div>
                           </div> 
                           <div class="col-md-4  booking_form">
                              <div class="form-group">
                                 <label for="number" class="">Destination</label>
                                 <div class="">
                                    <input class="form-control form_field_booking uniform-input number" required="required" name="destination" type="text" value="" id="">
                                 </div>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group booking_form">
                                 <label for="address" class="">Address</label>
                                 <div class="">
                                    <input class="form-control form_field_booking" required="required" name="address" type="text" value="" id="address">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 booking_form">
                              <div class="form-group">
                                 <label for="message" class="">Message</label>
                                 <div class="">
                                    <textarea class="form-control summernote form_field_booking" required="required" name="message" cols="50" rows="10" id="message"></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <button type="Submit" class="btn btn-success">Submit</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

