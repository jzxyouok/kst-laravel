<style style="text/css">
.scroll-up {
 height: 220px;	
 overflow: hidden;
 position: relative;
 background: yellow;
 color: #990000;
 border:NULL;
}
.scroll-up p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: left; 
 /* Starting position */
 -moz-transform:translateY(100%);
 -webkit-transform:translateY(100%);	
 transform:translateY(100%);
 /* Apply animation to this element */	
 -moz-animation: scroll-up 15s linear infinite;
 -webkit-animation: scroll-up 5s linear infinite;
 animation: scroll-up 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes scroll-up {
 0%   { -moz-transform: translateY(100%); }
 100% { -moz-transform: translateY(-100%); }
}
@-webkit-keyframes scroll-up {
 0%   { -webkit-transform: translateY(100%); }
 100% { -webkit-transform: translateY(-100%); }
}
@keyframes scroll-up {
 0%   { 
 -moz-transform: translateY(100%); /* Browser bug fix */
 -webkit-transform: translateY(100%); /* Browser bug fix */
 transform: translateY(100%); 		
 }
 100% { 
 -moz-transform: translateY(-100%); /* Browser bug fix */
 -webkit-transform: translateY(-100%); /* Browser bug fix */
 transform: translateY(-100%); 
 }
}
.col-md-* {
	max-width: 100%;
}
</style>

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



        <script>
        $(function() {
          $(".rslides").responsiveSlides();
        });
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

			<div class="col-md-12">
				<div class="row">
				    <div class="col-md-3 ad-bd">
				    		<div class="n-m-b-heading">
                                    <b>Dashboard</b>
                                </div>
                                <div class="ad-pd n-m-b-body">
                                    <ul class="templatemo-submenu">

                                        <li id="change1-c"><a href="#">
                                            <i class= "fa fa-sun-o" style='color:#F14700'></i> &nbsp; Daily Rituals </a></li>
                                        <li id="change2-c"><a href="#">
                                            <i class= "fa fa-paper-plane"  style='color:#F14700'></i>&nbsp; &nbsp;Offerings </a></li>
                                        <li id="change3-c"><a href="#">
                                            <i class= "fa fa-fire" style='color:#F14700'></i>&nbsp; &nbsp; Pooja Details </a></li>
                                        <li id="change4-c"><a href="#">
                                          <i class= "fa fa-picture-o" style='color:#F14700'></i>&nbsp; &nbsp;Gallery </a></li>          
                                        <li><a href="{{url('/online_vazhipad')}}">
                                            <i class= "fa fa-credit-card-alt" style='color:#F14700'></i>&nbsp; Online Vazhipad </a></li>
                                    </ul>
                                </div>
                            </div>
				    
				    <div class="col-md-9 ad-bd ad-pd-0">
				    		<div class="n-m-b-heading"></div>
                    <div class="ad-pd">
                        <div class="ad-pd col-md-3">
                            <img src="{{asset('images/kannan.jpg')}}" class="img-circle">
                        </div>
                        <div class="col-md-9" style="color: #4700b3;">
                            <div id="change1">
                            <h1 class="text-center"> ശ്രീകൃഷ്ണധ്യാനം</h1>
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
                                സാരം :  നെറ്റിയിൽ കസ്തൂരിതിലകം.
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
                            <div id="change2" style="display: none;">
                            <h1 class="text-center"><span style="color:#a5011f"><b>Daily Rituals</b></span></h1>
                    <h4>
                                <p> <span style="color:#a5011f;"> MORNING</span></p>                        
5.00 : 
PALLIYUNARTHU (WAKING OF THE GODDESS.)<br>
5.10 : 
NIRMALYADARSANAM<br>
5.35 : 
ABHISHEKAM (ABLUTIONS OF THE IDOL IN OIL, MILK ETC.)<br>
5.45 : 
GANAPATHY HOMAM (SPECIFIC OFFERING TO GOD VINAYAKA)<br>
6.00 : 
DEEPARADHANA (BURNING INCENSE AND LIGHTING LAMPS TO THE &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HONOUR AND GLORY OF THE ALMIGHTY)<br>
6.30 : 
USHA POOJA (MORNING RITE)<br>
6.40 : 
DEEPARADHANA<br>
8.30 : 
NIVEDHYAM<br>
9.00 : 
PRASANNA POOJA<br>
10.00 :  
NIVEDHYAM<br>
11.00 : 
UCHA POOJA<br>
11.30 : 
NADA ADAKUNNU<br>
<br>
<br>
<p> <span style="color:#a5011f;">EVENING</span></p> 
 5.00 : NADA THURAPPU (OPENING OF SREEKOVIL)<br>
6.45 : 
DEEPARADHANA<br>
7.30 : 
ATHAZHA POOJA (NIGHT RITE)<br>
8.00 : 
DEEPARADHANA (NIGHT RITE)<br>
8.05 : 
NADA ADAKUNNU<br>
<br>
<div class="alert alert-info" role="alert">
POOJA TIMINGS MAY BE ALTERED ON SPECIAL OCCASIONS<br>

Besides these "Kunjoonu" (Choroonu - first rice feeding ceremony for children) <br>Thulabharam, Vidyarambham, Archana etc.<br> can be done at this temple.<br>
</div>
<br>
<br>
 </b></h4>
                            </div>
                            <div id="change3" style="display: none;">
                                <h1 class="text-center"><span style="color:#a5011f"><b>Offerings</b></span></h1>
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
                            <div id="change4" style="display:none;">
                                <h1 class="text-center"><span style="color:#a5011f"><b>Pooja Details</b></span></h1>
                            </div>
                            <div id="change5" style="display: none;">
                                <h1 class="text-center"><span style="color:#a5011f"><b>Gallery</b></span></h1>
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <a href="{{url('/gallery1')}}"><img class="img-index" src="{{asset('images/dummyimage.png')}}" style="width: 100%;"></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{url('/gallery2')}}"><img class="img-index" src="{{asset('images/dummyimage.png')}}" style="width: 100%;"></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{url('/gallery3')}}"><img class="img-index" src="{{asset('images/dummyimage.png')}}" style="width: 100%;"></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{url('/gallery4')}}"><img class="img-index" src="{{asset('images/dummyimage.png')}}" style="width: 100%;"></a>
                                    </div>
                                </div>

                            </div>

				    </div>
<div class="col-md-12 ad-bd">
				    		<div class="n-m-b-heading"><b>News Update</b></div>
                                    <div class="ad-pd ">
                                    <ul class="templatemo-submenu" style="background-color:#990000;">
                                        <div class="scroll-up">


                                        <p><a href="#" style="color:#990000;">Navarathri</a></p>
                                            <br>
                                            <p><a href="#" style="color:#990000;">Pallikettu</a></p>
                                            <br>
                                            <p><a href="#" style="color:#990000;">Sapthaham</a></p>
                                            <br>
                                            <p><a href="#" style="color:#990000;">Vishukanai</a></p>
                                            <br>
                                            <p><a href="#" style="color:#990000;">Vishukanai</a></p>
                                            <br>
                                            <p><a href="#" style="color:#990000;">Ashttamirohini Maholsavam</a></p>
                                            <br>
                                            <br> 

                                        </ul>
                                    </div> 
				    </div>
				    </div></div>
				    </div>
				</div><!--row-->
			</div><!--col-md-12-->
		</div><!--Main div-->
		@include('layouts.footer')
		@include('layouts.audio')
		
	    <script src="/js/app.js"></script>
	    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

	     
	</body>
</html>	