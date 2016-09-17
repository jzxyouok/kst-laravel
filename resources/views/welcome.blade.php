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
			<div id="n-m-img ad-mg-btm-0">
				<img src="{{asset('images/hkk.jpg')}}" width="100%" height="400">
			</div>
		</div>
		<div class="nav-width">
			<nav class="navbar navbar-inverse n-m-nav ad-mg-btm-0">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li><a href="{{url('/')}}"><b>Home</b></a></li>
				        <li><a href="{{url('/contact_us')}}">Contact us</a></li>
				        <li><a href="#">Upadevas</a></li>
				        <li><a href="#">Organisational setup</a></li>
				        <li><a href="#">Activities</a></li>
				        <li><a href="#">Festivals</a></li>
				        <li><a href="#">Facilities</a></li>
					</ul>	
			    </div>
			</nav>
			<marquee style="color: #990000; font-size:22px;">
				<b>ഹരേ	രാമ		ഹരേ	രാമ	....രാമ	രാമ		ഹരേ	ഹരേ...........ഹരേ		കൃഷ്ണ	ഹരേ	കൃഷ്ണ.......കൃഷ്ണ കൃഷ്ണ	ഹരേ	ഹരേ...</b>
			</marquee>
			<div id="n-m-body" style="margin-top: 15px;">
				<div class="col-md-3 ad-bd-1">
					<div class="n-m-b-heading">
						<b>Dashboard</b>
					</div>
					<div class="ad-pd n-m-b-body">
						<ul class="templatemo-submenu">
			                <li><a href="#">
			                  <i class='fa fa-eye' style='color:#F14700'></i> Gallery </a></li>
			                <li><a href="#">
			                    <i class='fa fa-eye' style='color:#F14700'></i> Daily Rituals </a></li>
			                <li><a href="#">
			                    <i class='fa fa-eye' style='color:#F14700'></i> Offerings </a></li>
			                <li><a href="#">
			                    <i class='fa fa-eye' style='color:#F14700'></i> Online Vazhipad </a></li>
			                <li><a href="#">
			                    <i class='fa fa-eye' style='color:#F14700'></i> Pooja Details </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9 ad-bd at-media-1">
					<div class="n-m-b-heading"></div>
					<div class="ad-pd">
						<div class="ad-pd col-md-3">
							<img src="{{asset('images/kannan.jpg')}}" class="img-circle">
						</div>
						<div class="col-md-9 text-justify" style="color: #4700b3;">
							<h1> ശ്രീകൃഷ്ണധ്യാനം</h1>
							<h4>
								കസ്തൂരി തിലകം ലലാട ഫലകേ
				                <br>
				                വക്ഷസ്ഥലേ കൗസ്തുഭം
				                <br>
				                നാസാഗ്രേ നവ  മൗക്തികം കരതലേ
				                <br>
				                വേണും കരേ കങ്കണം
				                <br>
				                സർവ്വാംഗേ ഹരിചന്ദനം ചകലയൻ
				                <br>
				                കണ്ധെ ച മുക്താ വലീം
				                <br>
				                ഗോപസ്ത്രീ പരിവേഷ്ട്ടിതോ വിജയതേ
				                <br>
				                ഗോപലച്ചുധാമണി
				                <br>
				                <br>
				                സാരം :	നെറ്റിയിൽ കസ്തൂരിതിലകം.
				                <br>
				                മാറിൽ കൗസ്തുഭമണി, മൂക്കിൽ പവിഴം
				                <br>
				                പതിച്ച നാസാമണി, കരതളിരുകളിൽ
				                <br>
				                വേണു, കൈത്തണ്ടയിൽ  കങ്കണം
				                <br>
				                ദേഹമാസകലം ചന്ദനം, കഴുത്തിൽ
				                <br>
				                മുത്തുമാല, അങ്ങനെ ഗോപാലന്മാർക്കു
				                <br>
				                ശിരോലങ്കാരമായ കൃഷ്ണൻ
				                <br>
				                ഗോപാംഗനകളാൽ ചുറ്റപ്പെട്ട്  വിജയിച്ചരുളുന്നു.
				                <br>
				            </h4>
						</div>
	        		</div>
	        	</div>
		        @if (Auth::guest())
		        	<div class="ad-bd col-md-12 ad-pd text-center ad-mg-tp">
		        		<a class="h3" href="{{url('/login')}}">Log in</a><br>
		        		<a class="h3" href="{{url('/register')}}">Register</a>
		        	</div>
		        @else
		        	<div class="ad-bd col-md-12 ad-pd text-center ad-mg-tp">
		        		<span class="h3">You are logged in as :<b>{{Auth::user()->name}}</b></span><br>
		        	</div>
		        @endif
	        </div>
	    </div>
		<footer class="site-footer ad-footer" style="background-color:#3b5998; width:100%; bottom:0; position: fixed; box-shadow: 0 0 25px 1px #fff; z-index: 100;">
		    <div class="container" style="text-align: center;">
		        <p>
			        Copyright © 2016 | All rights reserved | Design by <a href="http://www.hkwebdevelopers.weebly.com">
			        Kesavapuram Brothers</a>
		        </p>
		    </div>
		</footer>
	</body>
</html>	