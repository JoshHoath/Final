@extends('layouts.main')

@section('content')
<h1 class="title">Followers</h1>
@foreach($users as $user)
@include('widgets._followee')
@endforeach
{{ $users->links() }}
@endsection
