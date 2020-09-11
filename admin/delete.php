<?php 
session_start();
if (!isset($_SESSION["Email"])){
  header("location: login.php");
}
include 'include/datebase.php';
$id=null;
if ( !empty($_GET['id'])) {
 $id = $_REQUEST['id'];
}

if ( !empty($_POST)){

$var1 = 'DELETE FROM project WHERE id = ?'; 
$resultat = $db_connect->prepare($var1);	
$resultat->execute(array($id));
header("location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <script src="https://kit.fontawesome.com/5c60e1d155.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>

<?php include 'include/header-nav.php';?>

<main role="main">
<section class="panel important">
<div class="container">
<form method="post" action="delete.php?id=<?php echo $id?>">
<h3>Are you sure u want to delete ? </h3>
<input id="btn" class="btn btn-danger" type="submit" name="yes" value="yes">
<a class="btn btn-success" href="dashboard.php">Return to menu</a>
</form>
</div>
</section>
</main>
  
  

</body>

</html>
