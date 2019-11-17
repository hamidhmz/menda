<?php
	
	session_start();
	if(isset($_SESSION["id"]))
	 {
?>    

<?php

if(isset($_GET['id'])){
require_once('db/db.php');
$idpost=$_GET['id'];

$query="update product set active=1 where id=$idpost " ;
echo $query;
$queryRun=$db->query($query);
}

if($queryRun){
								header("Location:user.php");
								}
							}
?>