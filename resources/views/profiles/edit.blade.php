@extends('layouts.main')

@section('content')
    <form action="/profiles/{{ $user->id }}" method="POST">
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
            <textarea type="text"  name="bio">{{ $user->profile->bio}}</textarea>
        </div>
        <div class="form-group">
            <label>Webstie</label>
            <input type="text"  name="website" value="{{ $user->profile->website}}"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</a>
        </div>
    </form>
@endsection
