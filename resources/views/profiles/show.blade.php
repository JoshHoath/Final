@extends('layouts.main')

    @section('content')
        <div class="col-md-10 offset-1">
            <h1 class="">
                {{ $user->first_name }} {{ $user->last_name}}
                @if(Auth::id() != $user->id)
                @include('widgets._follow_user_button')
                @endif

            </h1>
            <div class="col-md-8 text-panel">
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
    @endsection
