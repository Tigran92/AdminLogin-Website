<?php

$dbHost ='localhost';
$dbUser ='tgrig001';
$dbPassword ='Tikomysql';
$dbInfo = 'mysql:host=localhost;dbname=tgrig001_coursework2';
try {
$db = new PDO( $dbInfo, $dbUser, $dbPassword );
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	//echo "Connection to database done !!!";
} catch (PDOexception $e) {
	echo "<h1>Connection failed!</h1><p>$e</p>";
}


?>