@extends('layouts.main')

@section('content')
    <div class="container">
        @include('tweets._create')
    </div>
    @foreach ($tweets as $tweet)
        @include('tweets._tweet')
    @endforeach
    <div class="profile">
        @include('profiles._show')
    </div>
@endsection
