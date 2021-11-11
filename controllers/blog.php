<?

include_once "models/Blog_Table.class.php";

$entryTable = new Blog_Table( $db );

$entryClicked = isset( $_GET['id'] );
if ($entryClicked) {
    $entryId = $_GET['id'];
    $entryData = $entryTable->getEntry( $entryId ); 	
    include_once "views/entry-html.php";
} else {
    $entries = $entryTable->getallentries();
    include_once "views/list-entries-html.php";
}    

?>
