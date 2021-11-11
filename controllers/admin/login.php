<?
include_once "models/Admin_Table.class.php";

$loginFormSubmitted = isset( $_POST['log-in'] );
if( $loginFormSubmitted ) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $adminTable = new Admin_Table( $db );
    try {
        $adminTable->checkCredentials( $email, $password );
        $admin->login();
    } catch ( Exception $e ) {
        echo $e->getMessage();
    }

}

$loggingOut = isset ( $_POST['logout'] );
if ( $loggingOut ){
	$admin->logout();
}

if (!$admin->isLoggedIn() ) {
    include_once "views/admin/login-form-html.php";
}
