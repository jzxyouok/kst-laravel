@extends('main')
@section('title', 'Festivals')
@section('content')
    <div class="text-center"><h1 style="color:#fff;">UPADEVAS</h1></div>
        <div class="container">
        <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" style="color:red;" href="#f1"><b>GANAPATHY</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f2"><b>DEVI</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f3"><b>NAGAR</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f4"><b>BRAHMA REKSHASU</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f5"><b>REKSHASU</b></a></li>
      </ul>
    </div>
    <div class="tab-content text-center">
    <div id="f1" class="tab-pane active text-center">
    <h2 style="color:red;">GANAPATHY</h2>
    <img src="{{asset('images/ganesh.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f2" class="tab-pane fade">
     <h2 style="color:red;">DEVI</h2>'
    <img src="{{asset('images/devi.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f3" class="tab-pane fade">
    <h2 style="color:red;">NAGAR</h2>
    <img src="{{asset('images/nagar.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f4" class="tab-pane fade">
    <h2 style="color:red;">BRAHMA REKSHASU</h2>
    <img src="{{asset('images/swa1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f5" class="tab-pane fade">
    <h2 style="color:red;">REKSHASU</h2>
    <img src="{{asset('images/nav1.jpg')}}" alt="" class="img-flex">
    </div>
    </div>
    </div>
@endsection
