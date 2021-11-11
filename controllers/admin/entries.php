<?

include_once "models/Blog_Table.class.php";

$entryTable = new Blog_Table( $db );
$allEntries = $entryTable->getAllEntries(); 

include_once "views/admin/entries-html.php";


?>
