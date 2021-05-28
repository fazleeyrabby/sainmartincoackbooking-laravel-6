@extends('layouts.frontendLayout.frontLayout')
@section('title','Saintmartin Service')
@section('content')
	<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-box">
                    <h2>Our<span> Services</span></h2>
                    <h4>{{ $service->title }}</h4>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        @foreach($categories as $category)
                        <p>
                            <i class="fa fa-hand-o-right"></i> {{ $category->name }}<br>
                        </p>
                        @endforeach
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="{{ asset('public/assets/admin/images') }}/{{ $service->img }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection