<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([ 'index' ,' show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //timeline
        $following = DB::table('followers')
                        ->where('follower_id', Auth::id())
                        ->pluck('followed_id')
                        ->toArray();


        $tweets = \App\Tweet::with(['user'])
                            ->whereIn('id', $following)
                            ->get();

        $user = Auth::user();



        return view('tweets.index' , compact('tweets' , 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //new tweet/create tweet
        $tweet = new \App\Tweet;
        return view('tweets.create' , compact('tweet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'body'      =>  'min:2|max:280'
        ]);
        $data['user_id']    =   Auth::id();
        $tweet = \App\Tweet::create($data);

        if($tweet){
            return redirect('/tweets/' . $tweet->id);
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $tweet = \App\Tweet::find($id);

        return view('tweets.show', compact('tweet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tweet = \App\Tweet::find($id);
        return view('tweets.edit' , compact('tweet'));
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
        $tweet = \App\Tweet::find($id);

        $tweet->user_id = Auth::id();
        $tweet->body = $request->body;


        $request->validate([
            'body'  =>  'min:2|max:280'
        ]);


        if($tweet->save()){
            return redirect('/tweets/' . $tweet->id);
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
        $tweet = \App\Tweet::destroy($id);

        if($tweet){
            return redirect('/tweets/');
        } else {
            return back();
        }

        $tweet = \App\Tweet\Comment::destroy($id);

        if($tweet){
            return redirect('/tweets/');
        } else {
            return back();
        }
    }
}
