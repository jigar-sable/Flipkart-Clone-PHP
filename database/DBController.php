<?php

class DBController {
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'flipkart_clone';

    public $con = null;

    public function __construct() {
        $this-> con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        
        if($this->con->connect_error){
            echo "Fail to connect: ".$this->con->connect_error;
        }
        // echo "Connection Success";
    }

    public function __destruct() {
        $this->closeConnection();
    }

    function closeConnection() {
        if($this->con != null){
            $this-> con -> close();
            $this-> con = null;
        }
    }
}
// $config = new DBController();

?>