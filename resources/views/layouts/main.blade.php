<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>KESAVAPURAM SREEKRISHNASWAMY TEMPLE</title>
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
	</head>
	<body>
		<div id="nav-main">
			<div id="n-m-img">
				<img src="{{asset('images/hkk.jpg')}}" width="100%" height="400">
			</div>
			<nav class="navbar navbar-inverse n-m-nav">
				<div class="container-fluid">
			    	<div class="navbar-header">
			    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
			      		</button>
			      		<a class="navbar-brand" href="#">KESAVAPURAM SREEKRISHNASWAMY TEMPLE</a>
			    	</div>
			    	<div class="collapse navbar-collapse" id="myNavbar">
			      		<ul class="nav navbar-nav">
			        		<li class="active"><a href="#">Home</a></li>
			        		<li><a href="#">Page 1</a></li>
			        		<li><a href="#">Page 2</a></li>
			        		<li><a href="#">Page 3</a></li>
			      		</ul>
			      		<ul class="nav navbar-nav navbar-right">
			      			@if (Auth::guest())
						        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						    @else 
						    	<li class="dropdown">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		                                {{ Auth::user()->name }} <span class="caret"></span>
		                            </a>

		                            <ul class="dropdown-menu" role="menu">
		                                <li><a href="{{url('/home')}}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
		                                <div class="divider"></div>
		                                <li>
		                                    <a href="{{ url('/logout') }}"
		                                        onclick="event.preventDefault();
		                                                 document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" aria-hidden="true"></i>  Logout
		                                    </a>

		                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		                                        {{ csrf_field() }}
		                                    </form>
		                                </li>
		                            </ul>
		                        </li>
						    @endif
			      		</ul>
			    	</div>
			  	</div>
			</nav>
		</div>
	</body>
</html>