@extends('layouts.main')

@section('content')
<h1 class="title">Following</h1>
@foreach($users as $user)
@include('widgets._followee')
@endforeach
@endsection
