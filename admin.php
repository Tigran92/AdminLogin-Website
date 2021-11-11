<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

//database connection 
include_once "includes/connect.php"; 

//title of the page 
$title = "Coursework 2";

//link to the css file 
$css="css/style.css";

//this includes the header file 
include_once "templates/header.php";
//this includes the table class from the models 
include_once "models/Table.class.php";
//includes the class for admin user
include_once "models/Admin_User.class.php";
//this includes the navigation 
include_once "templates/admin/admin-navigation.php";
////tjos call tje ad,om iser
$admin = new Admin_User();
include_once "controllers/admin/login.php";

//if the user logs in successfully it opens the navigation page otherwise goes to entries
if( $admin->isLoggedIn() ) {
	include_once "views/admin/admin-navigation.php";

	$navigation = isset( $_GET['page'] );
	if ( $navigation ) {
		$contrl = $_GET['page']; //load corresponding controller
	} else {
		$contrl = "entries"; //or load default controller
	}
	include_once "controllers/admin/$contrl.php"; //load the controller
	include_once "views/admin/logout-form-html.php";
}
include_once "templates/footer.php";

?>


