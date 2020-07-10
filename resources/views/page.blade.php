@extends('layouts.base')
@push('styles')
<link rel="stylesheet" href="{{asset('styles/pages/about.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('styles/contacts.css')}}" type="text/css" media="all" />
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
