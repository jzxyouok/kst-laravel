<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

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
        <form class="ad-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            <input class="form-control"  placeholder="Name...*" type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span><br>
            <input class="form-control" placeholder="Email...*" type="email" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span><br>
            <textarea class="form-control ad-textarea" placeholder="Your valuable feedback...*" name="comment" rows="5" cols="40"><?php echo $comment;?></textarea><br>
            <input type="submit" class="btn btn-success" name="submit" value="Send">
        </form>

        <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15783.379663305952!2d76.98001404760743!3d8.514434365177046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xddcb74252996ab11!2sKeshavapuram+Srikrishna+Swamy+Temple!5e0!3m2!1sen!2sin!4v1474152170481" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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