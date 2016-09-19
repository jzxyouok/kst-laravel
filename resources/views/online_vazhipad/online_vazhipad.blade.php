<!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>Online Vazhipad</title>
	    <link rel="icon" href="{{asset('favicon.ico')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

	    <!-- Styles -->
	    <link href="/css/app.css" rel="stylesheet">

	    <!-- Scripts -->
	    <script>
	        window.Laravel = <?php echo json_encode([
	            'csrfToken' => csrf_token(),
	        ]); ?>
	    </script>
	    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar navbar-inverse n-m-nav ad-mg-btm-0">
      <h1>KESAVAPURAM SREEKRISHNASWAMY TEMPLE</h1>
    </div>
  </div>
</nav>

	  @if (Auth::guest())
		        	<div class="col-md-12 " style="text-align: center;">
		        		<div class="panel panel-primary">
		        		<h2>Welcome to Kesavapuram Sreekrishnaswamy Temple Online Vazhipad booking please Login to continue</h2>
		        		<h3><a href="{{url('/login')}}">Log in</a></h3><br>
		        		<h2>If your are not a member yet please register by clicking the link below
		        		<h3><a href="{{url('/register')}}">Register</a></h3>
		        		<br>
		        	</div>
		        	<br>
		        	<br>
		        	</div>
		        	<br>
		        	<br>
		        	<br>
		        	<br>
		        @else
		        	<div class="col-md-12 ">
		        		<span style="color:#800000" class="">Welcome  :<b>{{Auth::user()->name}}</b></span><br>
		        		<a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" style="color:#800000" aria-hidden="true"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;"> 
                            {{ csrf_field() }}
                        </form>
		        	</div>
		        	<h3  class=" col-md-offset-1 " style="color:#fff; font-size:38px" align="center">
		        	<b> Prathishtta
		        	</b></h3> <br>
    <div class="col-md-offset-2 ">
    <div class="list-group">
  <a href="#" style="color:#fff" class="list-group-item active"><h3>ശ്രീകൃഷ്ണസ്വാമി</h3></a>
  <a href="#" class="list-group-item"><h3>ഗണപതി </h3></a>
  <a href="#" class="list-group-item"><h3>ദേവി </h3></a>
  <a href="#" class="list-group-item"><h3> നാഗർ </h3></a>
</div>
        </div>
		        @endif
		  <footer class="site-footer ad-footer" style="background-color:#3b5998; width:100%; bottom:0; position: fixed; box-shadow: 0 0 25px 1px #fff; z-index: 100;">
		    <div class="container" style="text-align: center;">
		        <p>
			        Copyright © 2016 | All rights reserved | Design by <a href="http://www.hkwebdevelopers.weebly.com">
			        Kesavapuram Brothers</a>
		        </p>
		    </div>
		</footer>
		<audio hidden id="audio">
	        <source src="{{asset('sounds/click.mp3')}}">
	    </audio>
	    <script src="/js/app.js"></script>
	    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>      
	</head>	        
	</html>