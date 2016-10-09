<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class contactusController extends Controller
{
    public function index() {
    	return view('contactus/contactus');
    }
    public function send() {
    	return view('contactus.send');
    }
}
