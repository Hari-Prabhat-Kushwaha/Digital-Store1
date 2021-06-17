<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
  <head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="style.css" rel="stylesheet" type="text/css"/> 
  </head>
  <body style="margin-top:60px; margin-bottom:100px;">
  	<?php include("includes/header.php"); ?>
  	<div class="container">
  		<div class="row">
  		  <div class="col-xs-8">
  			<h1 class="title">LIVE SUPPORT</h1>
  			<h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
  		     <p align="left"> Rather than just filling out a form, Digital Store also offers help to the user with links directing them to find additional information or take popular actions. </p>
        </div>
  		   
  		     <img src="images/contact32.jpeg" class="img-responsive" alt="contact-us">
  	       

  	   </div>
  	   <div class="row">
  	   	<div class="col-sm-9">
  	   		<div class="contact-form">
  	   			<h2>Get In Touch</h2>
  	   			<div class="status alert alert-success" style="display:none"></div><form id="main-contact-form" class="contact-form row" name="contact-form" method="POST" action="sendemail.php">
  	   				<div class="form-group col-sm-9">
  	   					<input type="text" name="name" class="form-control" required="required" placeholder="Name">
  	   				</div>
  	   				<div class="form-group col-sm-9">
  	   					<input type="email" name="email" class="form-control" required="required" placeholder="email">
  	   				</div>
  	   				<div class="form-group col-sm-9">
  	   					<textarea type="message" id="message" class="form-control" name="message" required="required" placeholder="Message"></textarea>
  	   				</div>
  	   				<div class="form-group col-sm-9">
  	   					<input type="submit"  class="btn btn-primary" name="submit" value="submit">
  	   				</div>
  	   			</form>
  	   		</div>
  	   	</div>
  	   	<div class="col-sm-3">
  	   		<div class="contact-info">
  	   			<h2 class="title">Contact Info</h2>
  	   			<address>
  	   				<p>500 Digital Store Dolar Sit,</p>
				    <p>22-56-3-5 Sit Amet, Lorem,</p>
				    <p>USA</p>
				    <p>Phone:(00) 222 555 3333</p>
				    <p>Fax:(000) 222 55 33 6</p>
				    <p>Email: info@digitalstore.com</p>
				</address>
				<div><h2 class="title">FOLLOW US On&#58;</h2>
					<a href="http://www.facebook.com/digitalstore" target="_blank"><img src="images/fb.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>
					<a href="http://www.twitter.com/digitalstore" target="_blank"><img src="images/twitter.png" alt="twitter logo" style="width:30px; height:30px; border:0 padding-left:10px;"></a>
               </div>
            </div>
        </div>
  	  </div>
  	</div>
  	<?php include("includes/footer.php"); ?>
  </body>
  </html>
