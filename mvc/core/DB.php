<?php
class DB extends mysqli{

    public $conn;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "mysql";
    protected $dbname = "database";

    function __construct()
    {
        $this->conn = mysqli_connect( $this->servername, $this->username, $this->password, $this->dbname);
        mysqli_query($this->conn, "SET NAMES 'utf8' ");
    }
    
    public function Disconn()
    {
        $this->conn->close();
    }
}



?>