@extends('layouts.frontendLayout.frontLayout')
@section('title','Saintmartin Service')
@section('content')
	<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-box awards">
                    <h2>Our<span>Awards</span></h2>
                    <h4>All Prestigious Awards</h4>
                    @foreach($awards as $award)
                    <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <div class="gal_details_box">
                            <a class="thumbnail fancybox" rel="ligthbox" href="{{ asset('public/assets/admin/images/') }}/{{ $award->img }}">
                                <img class="img-responsive" alt="" src="{{ asset('public/assets/admin/images/') }}/{{ $award->img }}">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection