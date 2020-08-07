@extends('layouts.base')
@push('styles')
<link rel="stylesheet" href="{{asset('styles/pages/characters.css?time='.time())}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('styles/main.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('styles/pages/index.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/modal.css')}}" type="text/css" media="all" />
@endpush
@push('scripts')
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
<script src="{{asset('script/modal.js')}}"></script>
@endpush
@section('content')
<div id="namegallery">{{__('menu.gallerys.'.$obj->name)}}</div>
@include('includes.gallery_breadcrumbs')
<div id="container">
    @foreach($works as $work)
    <div class = "window" style="background-image: url({{asset('images/pages/'.$obj->name.'/s_'.$work->picture)}})">
        <div class="overlay">
            <a href="#" class="open" data-id="{{$work->id}}">{{__('menu.gallerys.Zoom')}}</a>
            <div class="text">
                <h2 class="class-for-28px">"{{__('menu.gallerys.'.$work->name)}}"</h2>
                <p class="class-for-22px"><span>{{__('menu.gallerys.Style')}}:</span> {{__('menu.gallerys.'.$work->style)}}</p>
                <p class="class-for-22px"><span>{{__('menu.gallerys.Technique')}}:</span> {{__('menu.gallerys.'.$work->technique)}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<nav>
    {!!$works->links()!!}
</nav>

@endsection
