<!DOCTYPE html>
    <html>
    <head>
   
    </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Festivals</title>
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
    <div class="text-center"><h1 style="color:#fff;">UPADEVAS</h1></div>
        <div class="container">
        <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" style="color:red;" href="#f1"><b>GANAPATHY</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f2"><b>DEVI</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f3"><b>NAGAR</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f4"><b>BRAHMA REKSHASU</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f5"><b>REKSHASU</b></a></li>
      </ul>
    </div>
    <div class="tab-content text-center">
    <div id="f1" class="tab-pane active text-center">
    <h2 style="color:red;">GANAPATHY</h2>
    <img src="{{asset('images/ganesh.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f2" class="tab-pane fade">
     <h2 style="color:red;">DEVI</h2>'
    <img src="{{asset('images/devi.jpg')}}" alt="" class="img-flex">   
    </div>
    <div id="f3" class="tab-pane fade">
    <h2 style="color:red;">NAGAR</h2>
    <img src="{{asset('images/nagar.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f4" class="tab-pane fade">
    <h2 style="color:red;">BRAHMA REKSHASU</h2>
    <img src="{{asset('images/swa1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f5" class="tab-pane fade">
    <h2 style="color:red;">REKSHASU</h2>
    <img src="{{asset('images/nav1.jpg')}}" alt="" class="img-flex">
    </div>
    </div>
    </div>
        @include('layouts.footer')
        @include('layouts.audio')
        <script src="/js/app.js"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    </body>
    </html>