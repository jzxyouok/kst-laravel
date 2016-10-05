<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class galleryController extends Controller
{
    public function gallery1() {
    	return view('gallery.gallery1');
    }
    public function gallery2() {
    	return view('gallery.gallery2');
    }
    public function gallery3() {
    	return view('gallery.gallery3');
    }
    public function gallery4() {
    	return view('gallery.gallery4');
    }
}
