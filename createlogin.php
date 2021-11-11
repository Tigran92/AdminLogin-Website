<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

//database connections
include_once "includes/connect.php"; 


$title = "coursework2";
$css="css/style.css";

include_once "models/Table.class.php"; // include the Table class here because the tables in all controllers inherit from it

include_once "templates/header.php";
include_once "templates/admin/admin-navigation.php";


$navigation = isset( $_GET['page'] );

if ( $navigation ) {
        $contrl = $_GET['page']; //load corresponding controller
} else {
	$contrl = "entries"; //or load default controller
}
include_once "controllers/admin/$contrl.php"; //load the controller

include_once "templates/footer.php";
?>

