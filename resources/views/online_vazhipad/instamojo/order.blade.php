<?php

if(isset($_GET['id']) && $_GET['id'] == 100){

    $prd_name = "Jeans Mens #100";
	$price = 100;

	// Price calculation with tax and fee
	$fee = 3 +($price*.02);
	$tax = $fee * .15;
	$prd_price = $fee + $tax + $price;


 }
 	else if(isset($_GET['id']) && $_GET['id'] == 101){
    $prd_name = "T Shirt Mens #101";
   	$price = 200;

	// Price calculation with tax and fee
	$fee = 3 +($price*.02);
	$tax = $fee * .15;
	$prd_price = $fee+ $tax + $price;
 }
 	else if(isset($_GET['id']) && $_GET['id'] == 102){
    $prd_name = "Sunglass Mens #102";
    $price = 1000;

	// Price calculation with tax and fee
	$fee = 3 +($price*.02);
	$tax = $fee * .15;
	$prd_price = $fee+ $tax + $price;
 } else {

 	echo "No such a prodcut to purchase :(";
 	exit();
 }

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Payment Mojo</title>
    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title">
    <script type="text/javascript" src="/js/app.js">

    </script>
  </head>

  <body>
    <div class="container">

      <div class="page-header">
        <h1><a href="index.php">Instamojo Payment</a></h1>
        <p class="lead">A test payment integration for instamojo payment gateway. Written in PHP</p>
      </div>

		<p>
		<b>Product name :</b> <?php echo $prd_name; ?>
		</p>
		<p>
		<b>Price : </b> <?php echo $price; ?>
		</p>
		<p><b>Bank Fee : </b> <?php echo $tax + $fee ; ?> <small> (Rs:3+ 2% of fee+ 15% Service Tax)</small></p>

		<p><b>Total : </b> <?php echo $prd_price; ?></p>

		<h3>Your Payment Details </h3>
		<hr>
		<form action="pay" method="POST" accept-charset="utf-8">

      {{csrf_field()}}

		<input type="hidden" name="product_name" value="<?php echo $prd_name; ?>">
		<input type="hidden" name="product_price" value="<?php echo $prd_price; ?>">

		<div class="form-group">
    	<label>Your Name</label>
   		<input type="text" class="form-control" name="name" placeholder="Enter your name">	 <br/>
		</div>

		<div class="form-group">
    	<label>Your Phone</label>
   		<input type="text" class="form-control" name="phone" placeholder="Enter your phone number"> <br/>
		</div>


		<div class="form-group">
    	<label>Your Email</label>
   		<input type="email" class="form-control" name="email" placeholder="Enter you email"> <br/>
		</div>


		<input type="submit" class="btn btn-success btn-lg" value="Click here to Pay Rs:<?php echo $prd_price; ?> ">

		 </form>
 <br/>
  <br/>
    </div> <!-- /container -->


  </body>
</html>
