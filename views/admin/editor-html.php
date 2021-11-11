<?php

$out = "
<form method='post' action='admin.php?page=editor' id='editor'>
    <input type='hidden' name='id' value='$entryData->entry_id' />
    <fieldset>
        <legend>New Posts Submission</legend>
        <label>Title</label>
        <input type='text' name='title' maxlength='150' value='$entryData->title' required />
        
        <label>Posts</label>
        <textarea name='entry'>$entryData->entry_text</textarea>    
        
        <fieldset id='editor-buttons'>
            <input type='submit' name='action' value='delete' />
            <input type='submit' name='action' value='save' />
        </fieldset>
    </fieldset>
</form>
";

echo $out;

?>
