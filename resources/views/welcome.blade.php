@extends('layouts.base')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('content')
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/img1.jpg" alt="img1" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/img2.jpg" alt="img2" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/img3.jpg" alt="img3" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/img4.jpg" alt="img4" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/img5.jpg" alt="img5" style="width:100%;">
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<hr class="hr-shelf2">
<div id="namegallery">{{__('menu.gallerys.Gallery')}}</div>
<section class="main">
    <ul class="ch1-grid">
        @foreach($gallerys as $one)
        <li>
            <div class="ch1-item" style = "background-image: url('/images/{{$one->picture}}')">
                <div class="ch1-info">
                    <h3>{{__('menu.gallerys.'.$one->name)}}</h3>
                    <p>
                        <a href="{{asset('gallery/'.$one->id)}}">{{__('menu.gallerys.Look at')}}</a>
                    </p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</section>
<div id="up">
    <a href="#" onclick="return up()">
    <img src="images/up.png"></a>
</div>
@endsection
