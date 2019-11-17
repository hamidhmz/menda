<?php
	$db=new MySQLi();
	$db -> connect('localhost','root','','menda');
	$db -> query("set names 'utf8'");
?>