<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Comment extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function likes() {
        return $this->morphMany('App\Like', 'Likeable');
    }
    public function tweet() {
        return $this->belongsTo('App\Tweet');
    }
    public function like() {
        return $this->morphToMany('App\User' , 'likeable')->whereDeletedAt(null);
    }
    public function getIsLikedAttribute() {
        $like = $this->likes()->whereUserId(Auth::id())->first();
        return (!is_null($like)) ? true : false;
    }
}
