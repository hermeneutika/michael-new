<?php
	$dsn = 'mysql:dbname=demo;host=localhost';
	$dbUser = 'michael';
	$password = 'A7ndromeda!1';
 
	$db = new PDO($dsn,$dbUser,$password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connected with pdo";
?>
 