<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route:: middleware (['auth'])->group(function(){

    Route:: get('/login', function(){
        return redirect(route('login'));
    });

Route::get('/', function(){
    return redirect('/tweets');
});

Route::resource('tweets', 'TweetController');
Route::post('/tweets/{tweet}/comments/{comment}/edit', 'CommentController@edit');
Route::post('/tweets/{tweet}/comments', 'CommentController@store')->name('comment.add');
Route::delete('/tweets/{tweet_id}/comments/{comment_id}', 'CommentController@destroy');
Route::put('/tweets/{tweet}/comments/{comment}', 'CommentController@update');
Route::get('/likes/{like_id}/{like_type}','LikeController@handleLike');
});

Route::resource('/profiles', 'ProfileController');
Route::get('/profiles/{profile}/following', 'ProfileController@following');
Route::get('/profiles/{profile}/followers', 'ProfileController@followers');
Route::get('/profiles' , function() {
    return redirect('/profile/' . Auth::id());
});
Route::get('/follow/{user}', 'ProfileController@follow');
Route::get('/unfollow/{user}', 'ProfileController@unfollow');
Route::get('/who-to-follow', 'ProfileController@suggest');


Auth::routes();
Route::delete('/tweets/{tweet}' , 'TweetController@destory');
Route::get('/logout', function(){
    auth()->logout();
    return redirect('/login');
});
