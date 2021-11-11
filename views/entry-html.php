<?php
//this is the html to get the date of the posts
echo "<article>
    <h1>$entryData->title</h1>
    <div class='date'>$entryData->date_created</div>
    $entryData->entry_text
</article>";

?>