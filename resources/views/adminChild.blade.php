@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <?php 
             $clientCount = App\Client::count();    
            ?>
            <div class="info">
              <h4>Clients</h4>
              <p><b>{{ $clientCount }}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-trophy fa-3x"></i>
            <?php 
              $awardCount = App\Award::count();    
            ?>
            <div class="info">
              <h4>Awards</h4>
              <p><b>{{ $awardCount }}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-magic fa-3x"></i>
             <?php 
              $servicecategoryCount = App\Brand::count();    
            ?>
            <div class="info">
              <h4>service</h4>
              <p><b>{{ $servicecategoryCount }}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-bus fa-3x"></i>
            <?php 
              $coachCount = App\Coach::count();    
            ?>
            <div class="info">
              <h4>coach</h4>
              <p><b>{{ $coachCount }}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-list-alt fa-3x"></i>
            <?php 
              $clientcategoryCount = App\Clientcategory::count();    
            ?>
            <div class="info">
              <h4>client category</h4>
              <p><b>{{ $clientcategoryCount }}</b></p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Monthly Sales</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Support Requests</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div> -->
      </div>
    </main>
@endsection