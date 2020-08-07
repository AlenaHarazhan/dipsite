@extends('layouts.base')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('content')

<div id="namegallery">{{__('menu.gallerys.Gallery')}}</div>
<section class="main">
    <ul class="ch1-grid">
        @foreach($objs as $one)
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
