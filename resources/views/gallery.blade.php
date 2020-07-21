@extends('layouts.base')
@push('styles')
<link rel="stylesheet" href="{{asset('styles/pages/characters.css?time='.time())}}" type="text/css" media="all" />
@endpush
@section('content')
<div id="namegallery">{{$obj->name}}</div>
@include('includes.gallery_breadcrumbs')
<div id="container">
    @foreach($works as $work)
    <div class = "window" style="background-image: url({{asset('images/pages/'.$obj->name.'/'.$work->picture)}})">
        <div class="overlay">
            <div class="text">
                <h2 class="class-for-28px">{{$work->name}}</h2>
                <p class="class-for-22px">Style: {{$work->style}}</p>
                <p class="class-for-22px">Technique: {{$work->technique}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

    <div class= "nav">
        {!!$works->links()!!}
    </div>

<div id="up">
    <a href="#" onclick="return up()">
        <img src="../images/up.png">
    </a>
</div>
@endsection
