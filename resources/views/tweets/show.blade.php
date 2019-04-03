@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        @include('tweets._tweet')
    </div>
    <div class="row col-md-6 offset-3">
        @foreach($tweet->comments as $comment)
            @include('comments._comment')
        @endforeach
    </div>
    <div class="row">
        @include('comments._create')
    </div>
</div>
@endsection
