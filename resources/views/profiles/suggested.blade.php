@extends('layouts.main')
@section('content')
<h1>Who to follow</h1>

@foreach($users as $user)
@include('widgets._followee')
@endforeach
@endsection
