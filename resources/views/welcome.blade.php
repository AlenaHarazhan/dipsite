@extends('layouts.base')

@section('content')
                <div id="slideshow">

                </div>

                <hr class="hr-shelf2">
                <!-- slide-show -->
                <div id="namegallery">Gallery</div>
                <section class="main">
                    <ul class="ch1-grid">
                        @foreach($gallerys as $one)
                        <li>
                            <div class="ch1-item" style = "background-image: url('/images/{{$one->picture}}')">
                                <div class="ch1-info">
                                    <h3>{{$one->name}}</h3>
                                    <p>
                                        <a href="{{asset('gallery/'.$one->id)}}">Look at</a>
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
