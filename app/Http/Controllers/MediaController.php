<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    //
    public function show_music(){
		return view('default.music');
	}
}
