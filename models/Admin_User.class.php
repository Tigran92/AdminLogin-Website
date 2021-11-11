<?php
// tjos c;ass is for the login information 
//it uses session to login 
class Admin_User {
    public function __construct(){
        session_start();
    }
	 
 	public function isLoggedIn(){
        $sessionIsSet = isset( $_SESSION['logged_in'] );
        if ( $sessionIsSet ) {
            $out = $_SESSION['logged_in'];
        } else {
            $out = false;
        }
        return $out;
	}
	//this is for login §
	public function login () {
        $_SESSION['logged_in'] = true;
	}
 //this function is for logout 
	public function logout () {
        $_SESSION['logged_in'] = false;
	}
 
}
