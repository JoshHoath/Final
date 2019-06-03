@extends('layouts.main')

    @section('content')
<div id="app">
    <div class="jumbotron">

    </div>s
    <div class="row">
        <ul>
            <li>Location: {{ $user->location }}</li>
            <li>Bio: {{ $user->bio }}</li>
            <li>Birthday: {{ $user->birthday }}</li>
            <li>Website: {{ $user->website }}</li>
            <li>
                <a href="/profiles/{{ $user->id }}/followers">Followers ({{ $user->followers()->count() }})</a>
            </li>
            <li>
                <a href="/profiles/{{ $user->id }}/following">Following ({{ $user->following()->count() }})</a>
            </li>
        </ul>
    </div>
        <div class="profile-title">
            <h1 class="follow">
                {{ $user->first_name }} {{ $user->last_name}}
                @if(Auth::id() != $user->id)
                @include('widgets._follow_user_button')
                @endif

            </h1>
            <div class="col-md-8 text-panel">

                @if($user = Auth::user())
                <a class="btn btn-primary" href="/profiles/{{$user->id}}/edit">Edit Profile</a>
                @endif
            </div>

            @if($user = Auth::user())
                @foreach($tweets as $tweet)
                @include('tweets._tweet')
                @endforeach
            @endif
        </div>
</div>
    @endsection
