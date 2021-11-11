<?php
include_once "models/Admin_Table.class.php";

$createNewAdmin = isset( $_POST['new-admin'] );

if( $createNewAdmin ) {

    $newEmail = $_POST['email'];
    $newPassword = $_POST['password'];    
    $adminTable = new Admin_Table($db);

    try {
        $adminTable->create( $newEmail, $newPassword );
        $adminFormMessage = "New user created";
    } catch ( Exception $e ) {
        $adminFormMessage = $e->getMessage();
    }
}

include_once "views/admin/new-admin-form-html.php";
