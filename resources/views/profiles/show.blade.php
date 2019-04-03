@extends('layouts.main')

    @section('content')
        <div class="col-md-10 offset-1">
            <h1 class="panel-body text-left">
                {{ $user->first_name }} {{ $user->last_name}}
                @include('widgets._follow_user_button')
            </h1>
            <div class="col-md-8 text-panel">
                <ul>
                    <li>Location: {{$user->profile->location}}</li>
                    <li>Bio: {{$user->profile->bio}}</li>
                    <li>Birthday: {{$user->profile->birthday}}</li>
                    <li>Website: {{$user->profile->website}}</li>
                </ul>
                @if($user = Auth::user())
                <a class="btn btn-primary" href="/profiles/{{$user->id}}/edit">Edit Profile</a>
                @endif
            </div>
            @if($user = Auth::user())
                @include('tweets.index')
            @endif
        </div>
    @endsection
