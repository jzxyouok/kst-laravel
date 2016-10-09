<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class galleryController extends Controller
{
    public function gallery1() {
    	return view('Gallery.Gallery1');
    }
    public function gallery2() {
    	return view('Gallery.Gallery2');
    }
    public function gallery3() {
    	return view('Gallery.Gallery3');
    }
    public function gallery4() {
    	return view('Gallery.Gallery4');
    }
}
