<?php
$db_name = 'portfolio';
$db_user = 'root';
$db_mdp = '';
$db_cnx = 'mysql:host=localhost;dbname=portfolio';
try{
$db_connect= new PDO($db_cnx,$db_user,$db_mdp);
$db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
die('Error '.$e->getMessage());
}
?>