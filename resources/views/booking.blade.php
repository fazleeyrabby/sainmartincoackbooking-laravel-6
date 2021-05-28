@extends('layouts.frontendLayout.frontLayout')
@section('title','Saintmartin Service')
@section('content')
<section class="about-area">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="about-box">
               <div class="bootstrap-iso">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <form class="form-horizontal" method="post" action="{{ route('datewise.search') }}" a style="margin: 50px 0 0 0;">
                            @csrf
                              <header>
                                 <h4>Please Filter Datewise </h4>
                              </header>
                              <div class="form-group ">
                                 <label class="control-label col-sm-2 requiredField" for="date">
                                 From
                                 <span class="asteriskField">
                                 *
                                 </span>
                                 </label>
                                 <div class="col-sm-10">
                                    <div class="input-group">
                                       <div class="input-group-addon">
                                          <i class="fa fa-calendar">
                                          </i>
                                       </div>
                                       <input class="form-control" id="date" name="fromDate" placeholder="MM/DD/YYYY" min="{{ now()->toDateString('Y-m-d') }}" type="date"/ required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label class="control-label col-sm-2 requiredField" for="date">
                                 TO
                                 <span class="asteriskField">
                                 *
                                 </span>
                                 </label>
                                 <div class="col-sm-10">
                                    <div class="input-group">
                                       <div class="input-group-addon">
                                          <i class="fa fa-calendar">
                                          </i>
                                       </div>
                                       <input class="form-control" id="date" name="toDate" placeholder="MM/DD/YYYY" min="{{ now()->toDateString('Y-m-d') }}" type="date"/ required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-10 col-sm-offset-2">
                                    <button class="btn btn-primary " name="submit" type="submit">
                                    Search Now
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div><br><br>
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <h2>Our<span> Coach</span></h2>
                  <h4>Please Coach Booking</h4>
                  @foreach($coachs as $coach)
                  <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="coach-box">
                        <a href="{{ url('booking',$coach->id) }}">
                           <img src="{{ asset('public/assets/admin/images/') }}/{{ $coach->img }}">
                           <h3>{{ $coach->name }}</h3>
                        </a>
                          <strong><b>Status:</b> </strong>
                        <div class="card-body">
                           <h4 class="card-title">John Doe</h4>
                           <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                           <a href="{{ url('booking',$coach->id) }}" class="btn btn-primary">BOOK NOW</a>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @if(isset($searchcoachs))
                     @foreach($searchcoachs as $coach)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                           <div class="coach-box">
                              <a href="{{ url('booking',$coach->id) }}">
                                 <img src="{{ asset('public/assets/admin/images/') }}/{{ $coach->img }}">
                                 <h3>{{ $coach->name }}</h3>
                              </a>
                               <strong><b>Status:</b> </strong>
                              @if($coach->status == 1)
                                 <p style="color: red;margin: -26px 0 0 50px;">
                                    {!! $coach->status_bus !!}  
                                    <!-- {!! date('d-m-Y', strtotime($coach->toDate)) !!} -->
                                 </p>
                              @endif
                              <div class="card-body">
                                 <h4 class="card-title">John Doe</h4>
                                 <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                 <a href="{{ url('booking',$coach->id) }}" class="btn btn-primary">BOOK NOW</a>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
@endsection

