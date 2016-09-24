<!DOCTYPE html>
    <html>
    <head>
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
    <h1 style="color:#fff; text-align: center;">FESTIVALS</h1>
    <ol style="color:#e60000">
    <li>JANMASHTAMI MAHOTSAVAM 6 DAYS</li>
    <img src="{{asset('images/festival1.jpg')}}" alt="" class="img-thumbnail">
    <li>PRETHISHTA DHINAM 1 DAY</li>
    <img src="{{asset('images/p1.jpg')}}" alt="" class="img-thumbnail">
    <li>BHAGAVADA SAPTHAHAM</li>
    <img src="{{asset('images/sap1.jpg')}}" alt="" class="img-thumbnail">
    <li>SWARGAVATHIL EKADESHI</li>
    <img src="{{asset('images/swa1.jpg')}}" alt="" class="img-thumbnail">
    <li>NAVARATHIRI MAHOTSAVAM</li>
    <img src="{{asset('images/nav1.jpg')}}" alt="" class="img-thumbnail">
    <li>MANDALA CHIRAPPU MAHOTSAVAM</li>
    <img src="{{asset('images/ayappan.jpg')}}" alt="" class="img-thumbnail">
    <li>THRIKARTHIKA MAHOTSAVAM</li>
    <img src="{{asset('images/tk1.jpg')}}" alt="" class="img-thumbnail">
    <li>VISHU KANNI</li>
    <img src="{{asset('images/vishu.jpeg')}}" alt="" class="img-thumbnail">
    <li>VINAYAKA CHATHURTHI</li>
    <img src="{{asset('images/gc.jpg')}}" alt="" class="img-thumbnail">
    <li>THIRUVATHIRA MAHOTSAVAM</li>
    <img src="{{asset('images/thiru.jpg')}}" alt="" class="img-thumbnail">
    </ol>
    </body>
    </html>