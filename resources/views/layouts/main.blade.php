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
						<li><a href="#"><b>Home</b></a></li>
						<li><a href="#">About</a></li>
				        <li><a href="#">Contact us</a></li>
				        <li><a href="#">Upadevas</a></li>
				        <li><a href="#">Organisational setup</a></li>
				        <li><a href="#">Activities</a></li>
				        <li><a href="#">Festivals</a></li>
				        <li><a href="#">Facilities</a></li>
					</ul>	
			    </div>
			</nav>
		

			<div id="n-m-body" style="margin-top: 15px;">
				<div class="col-md-3 ad-bd">
					<div class="n-m-b-heading">
						<b>Dashboard</b>
					</div>
					<div class="ad-pd">
						<ul class="templatemo-submenu">
			                <li><a href="#">
			                  <i class='fa fa-eye' style='color:#F14700'></i> Gallery </a></li>
			                <li> <a href="#">
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
					<div class="n-m-b-heading">
						
					</div>
					<div class="ad-pd">
						
					</div>
				</div>
			</div>
		</div>
	</body>
</html>