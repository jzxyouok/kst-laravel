 <!DOCTYPE html>
 <html>
 <head>
 	<title>Facilities</title>
 	     <nav class="navbar navbar-default">
          <div class="box-shadow">
            <div class="navbar navbar-inverse n-m-nav ad-mg-btm-0">
              <h1><a href="/">KESAVAPURAM SREEKRISHNASWAMY TEMPLE</a></h1>
            </div>
          </div>
        </nav>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Contact Us</title>
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
 
 </body>
 	@include('layouts.footer')
 	@include('layouts.audio')
 </html>
