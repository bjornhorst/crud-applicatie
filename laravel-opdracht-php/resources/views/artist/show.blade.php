<div id="overlay"></div>

@extends('layouts.app')
@section('content')
    <h1>The selected Artist: {{$artist->artist}}
    </h1>
    <br>The songs of this artist are:<br>
    @guest
        {{--For people who aren't logged in--}}
        @include('song.formTemplate.basic')
        {{--For people that are logged in --}}
    @elseif(Auth::user()->name != 'admin')
        @include('song.formTemplate.basic')
        {{--For the admin--}}
    @elseif(Auth::user()->name == 'admin' )
        @include('song.formTemplate.admin')
    @endguest
@endsection
