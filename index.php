<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

//database connection
include_once"includes/connect.php";

//title of the page
//css link 
$title = "Coursework 2";
$css = "css/style.css";

//runs the table class
include_once "models/Table.class.php";

include_once "templates/header.php";

//include_once "templates/admin/admin-navigation.php";
//runs the blog.php from controllers
include_once "controllers/blog.php";

//include_once "createlogin.php";

//include_once "controllers/upload.php";

include_once "templates/footer.php";

?>

