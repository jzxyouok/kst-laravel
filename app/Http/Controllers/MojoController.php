<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MojoController extends Controller
{
    public function index() {
      return view('online_vazhipad.instamojo.index');
    }
    public function order() {
      return view('online_vazhipad.instamojo.order');
    }
    public function pay() {
      return view('online_vazhipad.instamojo.pay');
    }
    public function thankyou() {
      return view('online_vazhipad.instamojo.thankyou');
    }
    public function webhook() {
      return view('online_vazhipad.instamojo.webhook');
    }
}
