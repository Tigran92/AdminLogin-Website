<?

class Admin_Table extends Table {

    //this function creates and stores the email and password to the database 
    public function create ( $email, $password ) {
        //check if e-mail is available
        $this->checkEmail( $email );
        $sql = "INSERT INTO admin ( email, password )
                VALUES( ?, ? )";
	$password = SHA1($password);
        $data= array( $email, $password );
        $this->makeStatement( $sql, $data );  
    }
    //this function checks when creating user if the email entered exists it throws an exception error  
     private function checkEmail ($email) {
        $sql = "SELECT email FROM admin WHERE email = ?";
        $data = array( $email );
        $this->makeStatement( $sql, $data );
        $statement = $this->makeStatement( $sql, $data );
        if ( $statement->rowCount() === 1 ) {
            $e = new Exception("Error: '$email' already used!");
            throw $e;
        } 
    }
    //this function checks the credentials of the email and password
    //if the exist or not and if not it says login failed 
    public function checkCredentials ( $email, $password ){

        $sql = "SELECT email FROM admin WHERE email = ? AND password = ?";
	$password = SHA1($password);
        $data = array($email, $password);
        $statement = $this->makeStatement( $sql, $data );
        if ( $statement->rowCount() === 1 ) {
            $out = true;
        } else {
            $loginProblem = new Exception( "login failed!" );
            throw $loginProblem;
        }
        return $out;
    }


}
