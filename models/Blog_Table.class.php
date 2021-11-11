<?php
class Blog_Table extends Table {
    
    //this function is so that it save the posts that are entered 
        public function saveEntry ( $title, $entry ) {
		$entrySQL = "INSERT INTO blog_entry ( title, entry_text )  VALUES ( ?, ?)";
		$formData = array( $title, $entry ); 
		$entryStatement = $this->makeStatement( $entrySQL, $formData );
		//return $this->db->lastInsertId();

	}
	//this function is so it gets all the posts that are saved 
	public function getAllEntries () {
		$entrySQL = "SELECT entry_id, title, SUBSTRING(entry_text, 1, 150) AS intro  FROM blog_entry";
		$statement = $this->makeStatement( $entrySQL );
		return $statement;
	}

	//this function gets the title name for edit page
	public function getEntry( $id ){
		$sql = "SELECT entry_id, title, entry_text, date_created FROM blog_entry WHERE entry_id = ?"; 
		$data = array($id);
		$statement = $this->makeStatement( $sql, $data );
		$model = $statement->fetchObject();
		return $model;
	}

	//this function is that to be able to edit the posts
	public function updateEntry ( $id, $title, $entry) {
		$sql = "UPDATE blog_entry 
                	SET title = ?, 
	                entry_text = ? 
        	        WHERE entry_id = ?";
		$data = array( $title, $entry, $id );
		$statement = $this->makeStatement( $sql, $data );
		return $statement;
	}

	//this function is to be able to delete posts 
	public function deleteEntry ( $id ) {
		$sql = "DELETE FROM blog_entry WHERE entry_id = ?";
		$data = array( $id );
		$statement = $this->makeStatement( $sql, $data );
	}



}

?>
