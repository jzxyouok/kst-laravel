<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
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
<body>
    <title>PRATHISHTAS</title>
</head>
<img src="{{asset('images/ganesh.jpg')}}" class="img-circle">
<img src="{{asset('images/ganesh.jpg')}}" class="img-thumbnail" alt="">
<br>
<img src="{{asset('images/devi.jpg')}}" class="img-circle" alt="">
<img src="{{asset('images/devi.jpg')}}" class="img-thumbnail" alt="">
<br>
<img src="{{asset('images/nagar.jpg')}}" alt="" class="img-circle">
<img src="{{asset('images/nagar.jpg')}}" class="img-thumbnail" alt="">
</body>
</html>