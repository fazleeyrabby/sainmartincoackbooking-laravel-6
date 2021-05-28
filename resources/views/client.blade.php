@extends('layouts.frontendLayout.frontLayout')
@section('title','Saintmartin Service')
@section('content')
	<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-box">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>Our<span> Clients</span></h2>
                        <h4>Our client's List</h4>
                        <div class="col-md-6 col-xs-12">
                            <b>WITHOUT AGENT OUR CLIENT LIST (NOW):</b><br><br>
                            <?php
                                $serial  = 1;
                            ?>
                            @foreach($clientcategoriesLefts as  $clientcategoriesLeft)
                                <p><b>{{ $clientcategoriesLeft->name }}</b><br></p>
                                @foreach($clientcategoriesLeft->clients as $clients)
                                    <p>{{ $serial }}.  {{ $clients->name }}<br></p>
                                    <?php $serial++; ?>
                                @endforeach<br />
                                <?php $serial = 1; ?>
                            @endforeach
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <?php
                                $serial  = 1;
                            ?>
                            @foreach($clientcategoriesRights as  $clientcategoriesRight)
                                <p><b>{{ $clientcategoriesRight->name }}</b><br></p>
                                @foreach($clientcategoriesRight->clients as $clients)
                                    <p>{{ $serial }}.  {{ $clients->name }}<br></p>
                                    <?php $serial++; ?>
                                @endforeach<br />
                                <?php $serial = 1; ?>
                            @endforeach
                            <br><p>In addition, in the last 15 years, we have more than 1600 clients. Those who hire an AC bus from us for their own needs besides official.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection