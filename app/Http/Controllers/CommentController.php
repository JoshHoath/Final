<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $commnet - new \App\Comment;
        $comment->body = $request->get('comment_body');
        $comment->user_id = Auth::id();
        $comment->tweet_id = $id;

        if($comment->save()){
            return redirect('/tweets/' . $id);
        } else (
            return back();
            )

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $comment = new \App\Comment;
        $comment->body = $request->get('body');
        $comment->user_id = Auth::id();
        $comment->tweet_id = $id;

        if($comment->save()){
            return redirect('/tweets/' . $id);
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


    ]

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tweet_id, $comment_id)
    {
        $comment = \App\Comment::find($comment_id);
        return view('comments.edit' , compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tweet_id, $comment_id)
    {
        $comment = Comment::find($comment_id);
        $comment->user_id = Auth::if();
        $comment->body = $request->body;

            if($comment->save()){
                return redirect('/tweets/' . $tweet_id . '/');
            } else {
                return back();
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tweet_id, $commnet_id)
    {
        $delete = \App\Comment::destroy ($comment_id);

            if ($delete){
                return redirect('/tweets/' . $tweet_id . '/');
            } else {
                return back();
            }
    }
}
