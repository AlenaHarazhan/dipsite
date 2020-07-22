@extends('layouts.base')
@push('styles')
<link rel="stylesheet" href="{{asset('styles/pages/about.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('styles/contacts.css')}}" type="text/css" media="all" />
@endpush
@push('scripts')
<script src="{{asset('https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js')}}"></script>
<script src="{{asset('https://yastatic.net/share2/share.js')}}"></script>
@endpush
@section('content')
<div id='hello'class="class-for-24px">
            <h1>{{$page->name}}</h1>

            <p>{{$page->smallbody}}</p>

            <figure class="fig">
                <img src="{{asset('images/'.$page->picture)}}" alt="logo">
            </figure>
        </div>
    {!!$page->body!!}

@endsection
