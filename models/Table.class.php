<?php
class Table {
	private $db;
    
//this is the constructor 		
	public function __construct ( $db ) {
		$this->db = $db;
	}
     
        public function makeStatement ( $sql, $data = NULL) {
	// TASK: prepare the statement here	
        	$statement = $this->db->prepare($sql);
		try{
	// TASK: execute the statement here	
			$statement->execute($data);

		} catch (Exception $e){
		    $msg = "<p>You tried to run this sql: $entrySQL<p>
			    <p>Exception: $e</p>";
		    trigger_error($msg);
		}
		return $statement;
    }

}

