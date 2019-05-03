@extends('layouts.main')

@section('content')
    <div class="profile">
        @include('profiles._show')
    </div>
    <div class="content-container">
        <div class="container">
            @include('tweets._create')
        </div>
        <div class="tweet-container">
            @foreach ($tweets as $tweet)
                @include('tweets._tweet')
            @endforeach
        <div class="container">
            <section class="paginate">
                {{ $tweets->links() }}
            <section>
        </div>
        </div>
    </div>
@endsection
