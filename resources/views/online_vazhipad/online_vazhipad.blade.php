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
	    <link rel="stylesheet" type="text/css" href="{{asset('css/side.css')}}">

	    <!-- Styles -->
	    <link href="/css/app.css" rel="stylesheet">

	    <!-- Scripts -->
	    <script>
	        window.Laravel = <?php echo json_encode([
	            'csrfToken' => csrf_token()
	        ]);  ?>
	    </script>
	    

	  @if (Auth::guest())
	  <nav class="navbar navbar-default">
          <div class="box-shadow">
            <div class="navbar navbar-inverse n-m-nav ad-mg-btm-0">
              <h1><a href="/">KESAVAPURAM SREEKRISHNASWAMY TEMPLE</a></h1>
            </div>
          </div>
        </nav>
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
		        <nav class="navbar navbar-default navbar-static-top"  style="background-color:#3b5998;"">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" style="color:#fff" href="{{ url('/') }}">
                    KESAVAPURAM SREEKRISHNASWAMY TEMPLE
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li>
                    	<a href="{{url('online_vazhipad/addtocart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
                    </li>
                        <li>
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" style="color:#fff" aria-hidden="true"></i>Logout</a>
							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
		        	<div class="col-md-12 text-center ad-a-w">
		        		<span style="color:#fff" class="">Welcome: <b>{{Auth::user()->name}}</b></span><br>
		        	</div><br><br><br>
		        	<div class="container" style="color: #444!IMportant;">
		        	<form>
		        	 <table style="width:100%">
		        	 <tr>
		        	 	<th style="width: 10%;" class="text-centert">Prathishtta: </th>
		        	 	<th style="width: 90%;"> 
		        	 		<select class="form-control">
		        	 			<option>Add options here.....</option>
		        	 		</select><br>
		        	 	</th>
		        	 </tr>
		        	 <tr>
		        	 	<th style="width: 10%;" class="text-centert">Vazhipad type: </th>
		        	 	<th style="width: 90%;"> 
		        	 		<select class="form-control">
		        	 			<option>Add options here.....</option>
		        	 		</select><br>
		        	 	</th>
		        	 </tr>
		        	 <tr>
		        	 	<th style="width: 10%;" class="text-centert">Vazhipad name: </th>
		        	 	<th style="width: 90%;"> 
		        	 		<select class="form-control">
		        	 			<option>Add options here.....</option>
		        	 		</select><br>
		        	 	</th>
		        	 </tr>
		        	 <tr>
		        	 	<th style="width: 10%;" class="text-centert">Your name: </th>
		        	 	<th style="width: 90%;"> 
		        	 		<input type="text" placeholder="name..." class="form-control"><br>
		        	 	</th>
		        	 </tr>
		        	 <tr>
		        	 	<th style="width: 10%;" class="text-centert">Your star: </th>
		        	 	<th style="width: 90%;"> 
		        	 		<select class="form-control">
		        	 			<option>Add options here.....</option>
		        	 		</select><br>
		        	 	</th>
		        	 </tr>
		        	 <tr>
		        	 	<th style="width: 10%;" class="text-centert">Price: </th>
		        	 	<th style="width: 90%;"> 
		        	 		<label>Price here.....</label><br>
		        	 	</th>
		        	 </tr>
		        	 <tr>
		        	 	<th style="width: 10%;" class="text-centert">Date: </th>
		        	 	<th style="width: 90%;"> 
		        	 		From: <input type="date"> To: <input type="date"><br>
		        	 	</th>
		        	 </tr>
		        	 </table><br>
		        	 <div align="center"><button class="btn btn-primary">Add to Cart</button> <button class="btn btn-primary">Add text here....</button></div>
		        	 </form>
		        @endif
		  <footer class="site-footer ad-footer" style="background-color:#3b5998; width:100%; bottom:0; position: fixed; box-shadow: 0 0 25px 1px #fff; z-index: 100; left: 0;">
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
	