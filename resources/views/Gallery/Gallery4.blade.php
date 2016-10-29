@extends('main')
@section('title', 'Ashttami Rohini')
@section('head')
	<style type="text/css">
		.row > .column {
	padding: 0 8px;
}
.row:after {
	content: "";
	display: table;
	clear: both;
}
.column {
	float: left;
	width: 25%;
}
.modal {
	display: none;
	position: fixed;
	z-index: 1000;
	padding-top: 100px;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: black;
}
.modal-content {
	position: relative;
	background-color: #fefefe;
	margin: auto;
	padding: 0;
	width: 90%;
	max-width: 1200px;
}
.close {
	color: white;
	position: absolute;
	top: 10px;
	right: 25px;
	font-size: 35px;
	font-weight: bold;
}
.close:hover,
.close:focus {
	color: #999;
	text-decoration: none;
	cursor: pointer;
}
.mySlides {
	display: none;
}
.prev,
.next {
	cursor: pointer;
	position: absolute;
	top: 50%;
	width: auto;
	padding: 16px;
	margin-top: -50px;
	color: white;
	font-weight: bold;
	font-size: 20px;
	transition: 0.6s ease;
	border-radius: 0 3px 3px 0;
	user-select: none;
	-webkit-user-select: none;
}
.next {
	right: 0;
	border-radius: 3px 0 0 3px;
}
.prev:hover,
.next:hover {
	background-color: rgba(0, 0, 0, 0.8);
}
.numbertext {
	color: #f2f2f2;
	font-size: 12px;
	padding: 8px 12px;
	position: absolute;
	top: 0;
}
.caption-container {
	text-align: center;
	background-color: black;
	padding: 2px 16px;
	color: white;
}
img.demo {
	opacity: 0.6;
}
.active,
.demo:hover {
	opacity: 1;
}
img.hover-shadow {
	transition: 0.3s
}
.hover-shadow:hover {
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
</style>
<script>
function openModal() {
document.getElementById('myModal').style.display = "block";
}

function closeModal() {
document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("demo");
var captionText = document.getElementById("caption");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
@endsection
@section('content')
 <div class="row">
  <div class="column col-md-3">
    <img src="{{asset('images/dummyimage.png')}}" onclick="openModal();currentSlide(1)" style="width: 100%; max-height: 500px; height: 300px;" class="hover-shadow img-flex">
  </div>
  <div class="column col-md-3">
    <img src="{{asset('images/devi.jpg')}}" onclick="openModal();currentSlide(2)" style="width: 100%; max-height: 500px; height: 300px;" class="hover-shadow img-flex">
  </div>
  <div class="column col-md-3">
    <img src="{{asset('images/ganesh.jpg')}}" onclick="openModal();currentSlide(3)" style="width: 100%; max-height: 500px; height: 300px;" class="hover-shadow img-flex">
  </div>
  <div class="column col-md-3" style="padding-right: 25px;">
    <img src="{{asset('images/nagar.jpg')}}" onclick="openModal();currentSlide(4)" style="width: 100%; max-height: 500px; height: 300px;" class="hover-shadow img-flex">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
        <img src="{{asset('images/dummyimage.png')}}" class="img-flex" style="width: 100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
        <img src="{{asset('images/devi.jpg')}}" class="img-flex" style="width: 100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
        <img src="{{asset('images/ganesh.jpg')}}" class="img-flex" style="width: 100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
        <img src="{{asset('images/nagar.jpg')}}" class="img-flex" style="width: 100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo" src="{{asset('images/dummyimage.png')}}" onclick="currentSlide(1)" alt="pic1" style="width: 100%; max-height: 500px; height: 300px;">
    </div>

    <div class="column">
      <img class="demo" src="{{asset('images/devi.jpg')}}" onclick="currentSlide(2)" alt="pic2" style="width: 100%; max-height: 500px; height: 300px;">
    </div>

    <div class="column">
      <img class="demo" src="{{asset('images/ganesh.jpg')}}" onclick="currentSlide(3)" alt="pic3" style="width: 100%; max-height: 500px; height: 300px;">
    </div>

    <div class="column">
      <img class="demo" src="{{asset('images/nagar.jpg')}}" onclick="currentSlide(4)" alt="pic4" style="width: 100%; max-height: 500px; height: 300px;">
    </div>
  </div>
</div>
@endsection
