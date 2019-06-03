<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'location', 'website', 'birthday', 'avatar'];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function avatar() {
        return $this->hasOne('App\Avatar');
    }

}
