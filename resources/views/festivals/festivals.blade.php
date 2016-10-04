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
    <div class="text-center"><h1 style="color:#fff;">FESTIVALS</h1></div>
        <div class="container">
        <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" style="color:red;" href="#f1"><b>JANMASHTAMI MAHOTSAVAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f2"><b>PRETHISHTA DHINAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f3"><b>BHAGAVADA SAPTHAHAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f4"><b>SWARGAVATHIL EKADESHI</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f5"><b>NAVARATHIRI MAHOTSAVAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f6"><b>MANDALA CHIRAPPU MAHOTSAVAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f7"><b>THRIKARTHIKA MAHOTSAVAM</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f8"><b>VISHU KANNI</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f9"><b>VINAYAKA CHATHURTHI</b></a></li>
        <li><a data-toggle="tab" style="color:red;" href="#f10"><b>THIRUVATHIRA MAHOTSAVAM</b></a></li>
      </ul>
    </div>
    <div class="tab-content text-center">
    <div id="f1" class="tab-pane active text-center">
    <h2 style="color:red;">JANMASHTAMI MAHOTSAVAM (6 DAYS)</h2>
    <img src="{{asset('images/festival1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f2" class="tab-pane fade">
     <h2 style="color:red;">PRETHISHTA DHINAM (1 DAY)</h2>'
    <img src="{{asset('images/p1.jpg')}}" alt="" class="img-flex">   
    </div>
    <div id="f3" class="tab-pane fade">
    <h2 style="color:red;">BHAGAVADA SAPTHAHAM</h2>
    <img src="{{asset('images/sap1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f4" class="tab-pane fade">
    <h2 style="color:red;">SWARGAVATHIL EKADESHI</h2>
    <img src="{{asset('images/swa1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f5" class="tab-pane fade">
    <h2 style="color:red;">NAVARATHIRI MAHOTSAVAM</h2>
    <img src="{{asset('images/nav1.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f6" class="tab-pane fade">
     <h2 style="color:red;">MANDALA CHIRAPPU MAHOTSAVAM</h2>
    <img src="{{asset('images/ayappan.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f7" class="tab-pane fade">
    <h2 style="color:red;">THRIKARTHIKA MAHOTSAVAM</h2>
    <img src="{{asset('images/tk1.jpg')}}" alt="" class="img-flex">   
    </div>
    <div id="f8" class="tab-pane fade">
    <h2 style="color:red;">VISHU KANNI</h2>
    <img src="{{asset('images/vishu.jpeg')}}" alt="" class="img-flex">
    </div>
    <div id="f9" class="tab-pane fade">
    <h2 style="color:red;">VINAYAKA CHATHURTHI</h2>
    <img src="{{asset('images/gc.jpg')}}" alt="" class="img-flex">
    </div>
    <div id="f10" class="tab-pane fade">
     <h2 style="color:red;">THIRUVATHIRA MAHOTSAVAM</h2>
    <img src="{{asset('images/thiru.jpg')}}" alt="" class="img-flex">
    </div>   
    </div>
    </div>
        @include('layouts.footer')
        @include('layouts.audio')
        <script src="/js/app.js"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    </body>
    </html>