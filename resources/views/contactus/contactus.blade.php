<!--div><img src="{{asset('images/background.jpg')}}"></div-->
<!DOCTYPE html>
    <html>
    <head>
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
    <body class="text-center body">
        <nav class="navbar navbar-default">
          <div class="box-shadow">
            <div class="navbar navbar-inverse n-m-nav ad-mg-btm-0">
              <h1><a href="/">KESAVAPURAM SREEKRISHNASWAMY TEMPLE</a></h1>
            </div>
          </div>
        </nav>
        <div class="col-md-12">
          <div class="col-md-6" style="color: #fff;">
            <h2><b>KESAVAPURAM SREEKRISHNASWAMY TEMPLE</b>,</h2> 
            <h4><strong>MAZHUTHANKUZHY, KESAVAPURAM ROAD</strong></h4>
            <h4><strong>PIN CODE 695 030, PHONE-0471 2362600</strong></h4>
          </div>
          <div class="col-md-6" style="padding-right: 30px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15783.379663305952!2d76.98001404760743!3d8.514434365177046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xddcb74252996ab11!2sKeshavapuram+Srikrishna+Swamy+Temple!5e0!3m2!1sen!2sin!4v1474152170481" width="600" height="450" frameborder="0" style="border:0;width: 100%; " allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2" style="margin-bottom: 5%; padding-top: 5%; ">
          <div class="panel panel-default" style="background: #e67300; color: #fff; border: 0; box-shadow: 0 0 30px 3px #eee;">
          <div class="panel panel-heading">FeedBack</div>
            <div class="panel panel-body"  style="background: #e67300; color: #fff;">
              <form class="ad-form col-md-12" method="post" action="#"> 
                  <input class="form-control"  placeholder="Name...*" type="text" name="name">
                  <br>
                  <input class="form-control" placeholder="Email...*" type="email" name="email">
                  <br>
                  <textarea class="form-control ad-textarea" placeholder="Your valuable feedback...*" name="comment" rows="5" cols="40"></textarea><br>
                  <input type="submit" class="btn btn-success" name="submit" value="Send">
              </form>
            </div>
          </div>
        </div> 

        <div class="ad-icon text-left">
            <li><a href="https://www.facebook.com/KesavapuramSreekrishnaSwamyTemple/"><i class="fa-1 fa fa-facebook fa-ad"></i></a></li>
            <li><a href="#"><i class="fa-1 fa fa-linkedin fa-ad"></i></a></li>
            <li><a href="#"><i class="fa-1 fa fa-google-plus fa-ad"></i></a></li>
        </div>
        <audio hidden id="audio">
            <source src="{{asset('sounds/click.mp3')}}">
        </audio>
        <script src="/js/app.js"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    </body>
    @include('layouts.footer')
    @include('layouts.audio')
</html>