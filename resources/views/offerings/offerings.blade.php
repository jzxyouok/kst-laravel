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
				        <li><a href="{{url('/upadevas')}}">Upadevas</a></li>
				        <li><a href="{{url('/activities')}}">Activities</a></li>
				        <li><a href="{{url('/festivals')}}">Festivals</a></li>
				        <li><a href="{{url('/facilities')}}">Facilities</a></li>
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
			                <li><a href="{{url('/dailyrituals')}}">
			                    <i class='fa fa-eye' style='color:#F14700'></i> Daily Rituals </a></li>
			                <li><a href="{{url('/Offerings')}}">
			                    <i class='fa fa-eye' style='color:#F14700'></i> Offerings </a></li>
			                <li><a href="{{url('/poojadetails')}}">
			                    <i class='fa fa-eye' style='color:#F14700'></i> Pooja Details </a></li>
			                <li><a href="#">
			                  	<i class='fa fa-eye' style='color:#F14700'></i> Gallery </a></li>    
			                <li><a href="{{url('/online_vazhipad')}}">
			                    <i class='fa fa-eye' style='color:#F14700'></i> Online Vazhipad </a></li>
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
							<h1><span style="color:#a5011f"><b><u>Offerings</u><b></span></h1>
						<h4><b>
May the blessings of God SREEKRISHNA SWAMI be bestowed upon you,
<br> reduce agony and save lives through the limitless showering of His mercy.
<br>
Contributions are welcome from individuals and organisations.
<br>
<br>
<div class="alert alert-info" role="alert">	
Cheques and drafts drawn in favour of <br>
"Secretary, KESAVAPURAM SREEKRISHNA SWAMI TEMPLE TRUST " 
<br> sent to the following address.
<br>
<br>
Secretary<br>
KESAVAPURAM SREEKRISHNA SWAMI TEMPLE TRUST<br>
MARUTHAMKUZHY<br>
THIRUVANANTHAPURAM<br>
PIN CODE -695 030<br>
PH -0471 2362600<br></b>
</div>


				              
				            </h4>
						</div>
	        		</div>
	        	</div>
		      
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
		<audio hidden id="audio">
	        <source src="{{asset('sounds/click.mp3')}}">
	    </audio>
	    <script src="/js/app.js"></script>
	    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
	</body>
</html>	