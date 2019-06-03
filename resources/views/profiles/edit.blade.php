@extends('layouts.main')

@section('content')
<div id="app">
    <div class="container text-center">
        <form action="/profiles/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="form-group">
                <label>Location</label>
                <input type="text"  name="location" value="{{ $user->location}}"/>
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input type="date"  name="birthday" value="{{ $user->birthday}}"/>
            </div>
            <div class="form-group">
                <label>Bio</label>
                <textarea type="text"  name="bio">{{ $user->bio }}</textarea>
            </div>
            <div class="form-group">
                <label>Webstie</label>
                <input type="text"  name="website" value="{{ $user->website}}"/>
            </div>
            <div class="form-group">
                <label>Avatar</label>
                <input type="file" name="avatar" />
            </div>
            @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            @if($user->avatar)
                <form action="">
                    <input type="file" name="_avatar_">
                    <input type="submit" value="upload">
                </form>
            @endif
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</a>
            </div>
        </form>
    </div>
</div>
@endsection
