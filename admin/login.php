<?php
session_start();
include 'include/datebase.php';
$message="";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $Email = $_POST["Email"];
  $Password = $_POST["Password"];
  $var1 = "SELECT * FROM `admin` WHERE `Email` = '$Email'";
  $resultat = $db_connect->query($var1);
  $data = $resultat->fetch(PDO::FETCH_ASSOC);
  if(password_verify($Password, $data['Password'])){
    $_SESSION["Email"] = $data["Email"];
    header("Location:dashboard.php");
  }
  else{
    $message="Username or password is incorrect.";
  }
}

?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      html { height: 100% }
::-moz-selection { background: #fe57a1; color: #fff; text-shadow: none; }
::selection { background: #fe57a1; color: #fff; text-shadow: none; }
body { background-image: radial-gradient( cover, rgba(92,100,111,1) 0%,rgba(31,35,40,1) 100%), url('http://i.minus.com/io97fW9I0NqJq.png') }
.login {
  background: #eceeee;
  border: 1px solid #42464b;
  border-radius: 6px;
  height: 327px;
  margin: 20px auto 0;
  width: 328px;
}
.login h1 {
  background-image: linear-gradient(top, #f1f3f3, #d4dae0);
  border-bottom: 1px solid #a6abaf;
  border-radius: 6px 6px 0 0;
  box-sizing: border-box;
  color: #727678;
  display: block;
  height: 43px;
  font: 600 14px/1 'Open Sans', sans-serif;
  padding-top: 14px;
  margin: 0;
  text-align: center;
  text-shadow: 0 -1px 0 rgba(0,0,0,0.2), 0 1px 0 #fff;
}
input[type="password"], input[type="text"] {
  background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(top, #d6d7d7, #dee0e0);
  border: 1px solid #a1a3a3;
  border-radius: 4px;
  box-shadow: 0 1px #fff;
  box-sizing: border-box;
  color: #696969;
  height: 39px;
  margin: 20px 0 0 38px;
  padding-left: 37px;
  transition: box-shadow 0.3s;
  width: 240px;
}
input[type="password"]:focus, input[type="text"]:focus {
  box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
  outline: 0;
}
.show-password {
  display: block;
  height: 16px;
  margin: 26px 0 0 28px;
  width: 87px;
}
input[type="checkbox"] {
  cursor: pointer;
  height: 16px;
  opacity: 0;
  position: relative;
  width: 64px;
}
input[type="checkbox"]:checked {
  left: 29px;
  width: 58px;
}
.toggle {
  background: url(http://i.minus.com/ibitS19pe8PVX6.png) no-repeat;
  display: block;
  height: 16px;
  margin-top: -20px;
  width: 87px;
  z-index: -1;
}
input[type="checkbox"]:checked + .toggle { background-position: 0 -16px }
.forgot {
  color: #7f7f7f;
  display: block;
  font: 12px/1 sans-serif;
  position: relative;
  text-decoration: none;
  transition: color .4s;
  line-height:30px;
  text-align:center;
  margin-top:10px;
  margin-left:0;padding:0;
  width:100%;
}
.forgot:hover { color: #3b3b3b }
input[type="submit"] {
  background-color: #37a69b;
  background-image: linear-gradient(top,#3db0a6,#319d91);
  border: 1px solid #256f67;
  border-radius: 4px;
  box-shadow: inset 0 1px rgba(255,255,255,0.3);
  box-sizing: border-box;
  color: #f8f8f8;
  font-weight: 700;
  height: 39px;
  margin: 12px 0 0 38px;
  text-shadow: 0 -1px 0 #177c6a;
  width: 240px;
}
input[type="submit"]:hover, input[type="submit"]:focus { background-image: linear-gradient(top,#4ec7c0,#31aba3) }
input[type="submit"]:active {
  background-image: linear-gradient(bottom,#3db0a6,#319d91);
	padding: 0;
}
.shadow {
  background: #000;
  border-radius: 12px 12px 4px 4px;
  box-shadow: 0 0 20px 10px #000;
  height: 6px;
  margin: 0px auto;
  opacity: 0.2;
  width: 270px;
}

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <div class="login">
  <h1>Login</h1> 
  <form action=""  method="POST">
  <input type="text" placeholder="username" id="username" name="Email"> 
  <input type="password" placeholder="password" id="password" name="Password">  
  <a href="#" class="forgot">forgot password?</a>
  <input type="submit" value="Log In">
  </form>
  <?php
  if (!empty($message)){
  echo <<<HTML
<div class="alert">
    <span class="closebtn">&times;</span>  
     Username or password is incorrect.
  </div>
HTML;
  }
  ?>

</div>

<div class="shadow"></div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://yourjavascript.com/8810122175/showpassword.js'></script>

  

    <script  src="js/index.js"></script>

    <script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>


</body>

</html>
