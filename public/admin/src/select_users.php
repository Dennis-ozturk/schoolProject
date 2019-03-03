<?php 
class User extends Dbh{
    private $sql;
    public function getAllUsers(){
        $this->sql = "SELECT * FROM classicmodels.admin";
        $stmt = $this->connect()->prepare($this->sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo $row['id'] . '<br>';
                echo $row['username'] . '<br>';
                echo $row['date'] . '<br>';
            }
        }
    }
}
