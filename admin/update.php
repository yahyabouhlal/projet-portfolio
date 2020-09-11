<?php
session_start();
if (!isset($_SESSION["Email"])){
  header("location: login.php");
}
include 'include/datebase.php';
$message=$id=null;
if ( !empty($_GET['id'])) {
 $id = $_REQUEST['id'];
}

if(isset($_POST["Submit"])){
$Name = $_POST["Name"];
$Description = $_POST["Description"];
$Image = $_POST["Image"];
$Github = $_POST["Github"];
$View = $_POST["View"];
$Category = $_POST["Category"];
$sql = "UPDATE project SET Name = ?,Description = ?,Image = ?,Github = ?,View = ?,Category=? WHERE id = ?";
$stmt = $db_connect->prepare($sql);

if ($stmt->execute(array($Name,$Description,$Image,$Github,$View,$Category,$id))){
    $message ="Modified successfully"; 
}
}
$var1 = "SELECT * FROM  project WHERE  Id = $id";
$resultat = $db_connect->query($var1);
$data = $resultat->fetchAll(PDO::FETCH_ASSOC);
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
<form action='update.php?id=<?php echo $id?>' method="POST" >
<?php
 foreach($data as $projet) {

    $port_projet = <<<prod
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="Name" value="{$projet['Name']}">
    </div>
    <div class="form-group">
      <label>Description:</label>
      <textarea name="Description" class="form-control" placeholder="Enter your Description">{$projet['Description']}</textarea>
    </div>
    <div class="form-group">
      <label>Image:</label>
      <input type="file" class="form-control-file" placeholder="Image link" name="Image" value="{$projet['Image']}">
    </div>
    <div class="form-group">
      <label>Github link:</label>
      <input type="text" placeholder="Enter Github link" name="Github" value="{$projet['Github']}">
    </div>
    <div class="form-group">
      <label>View link:</label>
      <input type="text" placeholder="Enter View link" name="View" value="{$projet['View']}">
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

prod;
echo  $port_projet;
 }
 
 if (!empty($message)){
 echo <<<HTML
<div class="alert">
<div class="alert alert-success" role="alert">
Modified successfully
</div>
HTML;
 }
  
 ?>
  </form>
</div>
  </section>
  </main>
</body>
</html>