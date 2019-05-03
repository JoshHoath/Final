<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \App\User::find($id


        return view('profiles.show' , ['user' => $user, 'tweets' => $user->tweets]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::find($id);
        return view('profiles.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation
        $request->validate([
            'location'      => 'required|max:20',
            'birthday'      => 'required|date',
            'bio'           => 'max:200'
        ]);

        $user = \App\User::find($id);
        $profile = $user->profile;

        $profile->location = $request->location;
        $profile->website  = $request->website;
        $profile->bio      = $request->bio;
        $profile->birthday = $request->birthday;

        if($profile->save()) {
            return redirect('/profiles/' . $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function following($id)
    {
        $user = \App\User::find($id);
        $following = $user->following()->paginate(20);
        return view('profiles.following', ['users' => $following]);
    }

    public function followers($id)
    {
        $user = \App\User::find($id);
        $followers = $user->followers()->paginate(20);
        return view('profiles.followers', ['users' => $followers]);
    }

    public function follow($id)
    {
        $user = \App\User::find(Auth::id());
        $user->following()->attach($id);

        return back();
    }

    public function unfollow($id)
    {
        $user = \App\User::find(Auth::id());
        $user->following()->detach($id);

        return back();
    }

    public function suggest()
    {
        // get an array of ID's of people user already follows
        $following = Auth::user()->following->pluck('id')->toArray();

        // add current user to following list so they aren't suggested
        // to follow themselves
        array_push($following, Auth::id());

        $suggested = \App\User::whereNotIn('id', $following)->inRandomOrder()->limit(10)->get();
        return view('profiles.suggested', ['users' => $suggested]);    }
}
