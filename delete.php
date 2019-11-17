<?php
	
	session_start();
	if(isset($_SESSION["id"]))
	 {
?>
<?php
require_once('db/db.php');
?>
<?php 

				$a=$_GET['id'];
								$queryy="DELETE FROM love WHERE id='$a'";
								echo $queryy;
								$queryrun =  $db->query($queryy);
								if($queryrun){
								header("Location:user.php");
								}}
								?>

