<div id="overlay"></div>

@extends('layouts.app')
@section('content')

    @guest
        {{--For people who aren't logged in--}}
        @include('artist.formTemplate.basic')
        {{--For people that are logged in --}}
    @elseif(Auth::user()->name != 'admin')
        @include('artist.formTemplate.basic')
        {{--For the admin--}}
    @elseif(Auth::user()->name == 'admin' )
        @include('artist.formTemplate.admin')
    @endguest



@endsection
