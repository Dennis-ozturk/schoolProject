<?php 
class Dbh {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "classicmodels";
        $this->charset = "utf8";

        try {
            $dsn = 'mysql:host='. $this->servername . ';dbname=' . $this->dbname . ';charset=' . $this->charset;
            $conn = new PDO($dsn, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\PDOException $e) {
            echo("Connection failed: ". $e->getMessage());
        }
    }
}

$object = new Dbh();
$object->connect();