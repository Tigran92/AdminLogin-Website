<?php

include_once "models/Blog_Table.class.php";

$entryTable = new Blog_Table( $db );

//was editor form submitted?
$editorSubmitted = isset( $_POST['action'] );

if ( $editorSubmitted ) {  
     
	// checking which button was clicked because later we will introduce a delete button in addition to the save button
	$buttonClicked = $_POST['action'];
	$id = $_POST['id'];
	//was "save" button clicked
	$save = ($buttonClicked === 'save');
	$deleteEntry = ($buttonClicked === 'delete');
	$insertNewEntry = ( $save and $id === '0' );
	$updateEntry = ( $save and $insertNewEntry === false);
	     
	$title = $_POST['title'];
	$entry = $_POST['entry'];

	if ( $insertNewEntry ) {
		$savedEntryId = $entryTable->saveEntry( $title, $entry );
	} else if ( $updateEntry ){
		$entryTable->updateEntry( $id, $title, $entry );
		$savedEntryId = $id;
	} else if ( $deleteEntry ) {
		$entryTable->deleteEntry( $id );
	}	 
}

// if the form has been called by a link from an existing entry
// it will pass the $id of the existing entry
// so this content should be loaded in to the form
// for editing 
$entryRequested = isset( $_GET['id'] );
if ( $entryRequested ) {
	$id = $_GET['id'];
	$entryData = $entryTable->getEntry( $id );
	$entryData->entry_id = $id;
// if we have jjst saved or updated an entry, we want to load the new contents back in to the form 
// (so that the user can see & confirm the changes that they've just made)
} else if ( isset($savedEntryId) ) {
    $entryData = $entryTable->getEntry( $savedEntryId );
    $entryData->message = "Entry was saved";
} else {
// if we are creating a brand new entry there won't be an $entryData object
// but the form is now expecting values for the $entrydata object
// if it is not defined there will be an error
// so we create an $entryData object using StdClass
// and set the values to null values
	$entryData = new StdClass();
	$entryData->entry_id = 0;
	$entryData->title = "";
	$entryData->entry_text = "";
}


include_once "views/admin/editor-html.php";

?>
