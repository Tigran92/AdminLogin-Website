<?php

$entriesAsHTML = "<ul>";

while ( $entry = $allEntries->fetchObject() ) {

    $href = "admin.php?page=editor&amp;id=$entry->entry_id";

    $entriesAsHTML .= "<li><a href='$href'>$entry->title</a></li>";

}

$entriesAsHTML .= "</ul>";

echo $entriesAsHTML;

?>
