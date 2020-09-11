
<?php
session_start();

if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}


if(isset($_SESSION['lang'])){
 include "pages/lang_".$_SESSION['lang'].".php";
}else{
 include "pages/lang_en.php";
}
?>



<!doctype html>
<html lang="en">

<!--  head start -->
<?php include 'pages/head.php';?>
<!--  head end -->
<body>

<!-- Navigation  start -->
<?php include 'pages/navbar.php';?>
<!-- skills start -->
<?php include 'pages/About.php';?>
<!-- skills End -->

<!-- Services section -->
<?php include 'pages/Services.php';?>
<!-- /Services End -->

<!-- Portfolio start -->
<?php include 'pages/Portfolio.php';?>
<!-- Portfolio End --> 

<!-- Contact start -->
<?php include 'pages/Contact.php';?>
<!-- contact End -->

<!-- footer Start -->
<?php include 'pages/Footer.php';?>
<!-- footer End -->

<!-- Links JavaScript and jQuery -->
<?php include 'pages/LinksJS.php';?>



</body>
</html>