@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        @include('tweets._tweet')
    </div>
    <div class="row">
        @foreach($tweet->comments as $comment)
            @include('comments._comment')
        @endforeach
    </div>
    <div class="row">
        @include('comments._create')
    </div>
</div>
@endsection
