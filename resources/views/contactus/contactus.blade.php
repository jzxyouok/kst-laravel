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
        <link rel="stylesheet" type="text/css" href="{{asset('css/side.css')}}">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body class="text-center body">
        <div class="headding  back-w"><b class="b">Kesavapuram Sreekrishnaswamy Temple<br><span class="red"> Kesavapuram road,Maruthamkuzhy</span></b></div>
        <form class="ad-form">
            <input class="form-control" placeholder="Name...*"><br>
            <input class="form-control" placeholder="Email...*" type="email"><br>
            <textarea class="form-control ad-textarea" placeholder="Your valuable feedback...*"></textarea><br>
            <input type="submit" class="btn btn-success" value="Send">
        </form>
        <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15783.379663305952!2d76.98001404760743!3d8.514434365177046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xddcb74252996ab11!2sKeshavapuram+Srikrishna+Swamy+Temple!5e0!3m2!1sen!2sin!4v1474152170481" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <audio hidden id="audio">
            <source src="{{asset('sounds/click.mp3')}}">
        </audio>
        <script src="/js/app.js"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    </body>
</html>