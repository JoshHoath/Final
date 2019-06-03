<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function upload(Request $request) {
        if($request->hasFile){
            return 'true';
        } else {
            return 'false';
        }
    }
}
