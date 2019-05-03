<div class="col-md-12">
    <div class="card">
        <h3 class="name">
            {{ $user->first_name }} {{ $user->last_name}}
                @if(Auth::id() != $user->id)
                    @include('widgets._follow_user_button')
                @endif
        </h3>
        <div class="text-panel">
            <ul>
                <li>
                    <h4><a href="/profiles/{{ $user->id }}/followers">Followers ({{ $user->followers()->count() }})</a></h4>
                </li>
                <li>
                    <h4><a href="/profiles/{{ $user->id }}/following">Following ({{ $user->following()->count() }})</a></h4>
                </li>
            </ul>
            @if($user = Auth::user())
            <a class="btn btn-primary" href="/profiles/{{$user->id}}/edit">Edit Profile</a>
            @endif
        </div>
    </div>
</div>
