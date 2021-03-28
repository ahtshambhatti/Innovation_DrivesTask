<?php

function connect()
{
$host = 'localhost';
$db   = 'innovation_drive';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	try {
	     $pdo = new PDO($dsn,$user,$pass);
	     // echo "Connected  successfully.";
	     return $pdo;
	} 
	catch (PDOException $e) 
	{
		die("Could not connect to the database  :" . $e->getMessage());
	     // throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
}
?>
