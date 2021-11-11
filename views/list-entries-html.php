<?php
//this checks if there is any posts entered 
$entriesFound = isset( $entries );
if ( $entriesFound === false ) {
    echo 'no posts found' ;
}

$entriesHTML = "<ul id='blog-entries'>";

while ( $entry = $entries->fetchObject() ) {
	// create a link which includes the id for when we view the whole post
	$href  = "index.php?page=blog&amp;id=$entry->entry_id";

	//create a list element <li> for each of the entries
	$entriesHTML .= 
	
	"<li>
        <h1>$entry->title</h1>
        <div><p>$entry->intro</p>
        <p><a href='$href'>Read more</a></p>
	</li>"; 
}

$entriesHTML .= "</ul>";

echo $entriesHTML;

?>
