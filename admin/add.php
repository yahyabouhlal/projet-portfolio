<?php
session_start();
if (!isset($_SESSION["Email"])){
  header("location: login.php");
}
include 'include/datebase.php';
$message=null;
if(isset($_POST["Submit"])){
  
$Name = $_POST["Name"];
$Description = $_POST["Description"];
$Image = $_POST["Image"];
$Github = $_POST["Github"];
$View = $_POST["View"];
$Category = $_POST["Category"];
$sql = "INSERT INTO project VALUES (null,?,?,?,?,?,?)";
$stmt = $db_connect->prepare($sql);

if ($stmt->execute(array($Name,$Description,$Image,$Github,$View,$Category))){
  $message ="add successfully"; 
}

/* if (isset($_POST['Submit'])){
$file_name=$_FILES['Image']['name'];
$file_type=$_FILES['Image']['type'];
$file_size=$_FILES['Image']['size'];
$file_tem_loc=$_FILES['Image']['tmp_name'];
$file_store = "upload/".$file_name;
move_uploaded_file($file_tem_loc, $file_store);
} */
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

  
</head>

<body>

<?php include 'include/header-nav.php';?>
<main role="main">
<section class="panel important">
<div class="container">
<form action='' method="POST" >
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="Name">
    </div>
    <div class="form-group">
      <label>Description:</label>
      <textarea name="Description" class="form-control" placeholder="Enter your Description"></textarea>
    </div>
    <div class="form-group">
      <label>Image:</label>
      <input type="file" class="form-control-file" placeholder="Image link" name="Image">
    </div>
    <div class="form-group">
      <label>Github link:</label>
      <input type="text" placeholder="Enter Github link" name="Github">
    </div>
    <div class="form-group">
      <label>View link:</label>
      <input type="text" placeholder="Enter View link" name="View">
    </div>
	  <div class="form-group">
      <label>Category:</label>
      <select class="form-control" name="Category">
        <option value="app">HTML/Css</option>
        <option value="icon">JavaScript</option>
        <option value="logo">PHP</option>
        <option value="web">Autre</option>
    </div>
    </select>
    </div>
    <button type="submit" class="btn btn-labeled btn-success" name="Submit">Submit</button>
  </form>
</div>
<?php 
 if (!empty($message)){
?>
 <div class="alert">
 <div class="alert alert-success" role="alert">
 $message
 </div>
<?php
  }
?>
  </section>
  </main>
</body>
</html>