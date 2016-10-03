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
				<img src="{{asset('images/hkkk.JPG')}}" width="100%" height="400">
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
			                <li><a href="{{url('/poojadetals')}}">
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
				                <br>
				                <br>
				                <br>
				            </h4>
						</div>
	        		</div>
	        	</div>
		      
	        </div>
	    </div>
		@include('layouts.footer')
		@include('layouts.audio')
		
	    <script src="/js/app.js"></script>
	    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

	     <a href="{{url('/index')}}">
			                    <i class='fa fa-eye' style='color:#F14700'></i> Daily Rituals </a>
	</body>
</html>	