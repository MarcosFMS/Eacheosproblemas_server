<?php
class DB_Connect {

    // constructor
    function __construct() {
        
    }

    // destructor
    function __destruct() {
        // $this->close();
    }

    // Connecting to database
    public function connect() {
        require_once 'include/config.php';
        // connecting to mysql
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
		mysqli_select_db($con,"eachosproblemas_bd");
		mysqli_set_charset($con,'utf8');
        // selecting database
        

        // return database handler
        return $con;
    }

    // Closing database connection
    public function close() {
        mysqli_close();
    }

}

?>
