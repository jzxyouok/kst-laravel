<!DOCTYPE html>
<html>
	<head>
		<title>Thank You</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('favicon.ico')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/side.css')}}">
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
		<nav class="navbar navbar-default">
          <div class="box-shadow">
            <div class="navbar navbar-inverse n-m-nav ad-mg-btm-0">
              <h1><a href="/">KESAVAPURAM SREEKRISHNASWAMY TEMPLE</a></h1>
            </div>
          </div>
        </nav>

		<div class="col-md-8 col-md-offset-2">
			<div class="alert alert-info text-center">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<b>Your Email was sent successfully.</b><br>
				<strong>Thankyou for your valuable FeedBack.</strong>
			</div>
			<div class="text-center"> 
				<a href="/contact_us">Go Back</a>
			</div>
		</div>

		<script src="/js/app.js"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
	    @include('layouts.footer')
	    @include('layouts.audio')
	</body>
</html>