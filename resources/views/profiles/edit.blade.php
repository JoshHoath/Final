@extends('layouts.main')

@section('content')
    <div class="container text-center">
        <form action="/profiles/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="form-group">
                <label>Location</label>
                <input type="text"  name="location" value="{{ $user->profile->location}}"/>
            </div>
            <div class="form-group">
                <label>birthday</label>
                <input type="date"  name="birthday" value="{{ $user->profile->birthday}}"/>
            </div>
            <div class="form-group">
                <label>Bio</label>
                <textarea type="text"  name="bio">{{ $user->profile->bio }}</textarea>
            </div>
            <div class="form-group">
                <label>Webstie</label>
                <input type="text"  name="website" value="{{ $user->profile->website}}"/>
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
            @if($user->profile->avatar)
                <img src="{{ Storage::disk('s3')->url('/avatars/' . $user->profile->user_id . '/' . $user->profile->avatar) }}" />
            @endif
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</a>
            </div>
        </form>
    </div>
@endsection
