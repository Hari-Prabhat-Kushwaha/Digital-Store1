<?php
ob_start();
     $con=mysqli_connect("localhost","root","","digital store") or die(mysqli_error($con));
    if(!isset($_SESSION)){
       session_start();
     }
?> 