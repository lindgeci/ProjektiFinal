<?php
 include_once ('database.php');

 class CRUDAT_PER_USER{
    private $connection;

    public function __construct()
    {
        $conn = new DATABASE;
        $this->connection = $conn->startConnection();
    }
    
    public function insertUser($User){
        $conn = $this->connection;

        $name = $User->getName();
        $surname = $User->getSurname();
        $email = $User->getEmail();
        $password = $User->getPassword();
        
        $sql = "INSERT INTO users(Name, Surname, Email, Password) values(?, ?, ?, ?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$name, $surname, $email, $password]);
        echo '<script><div>alert(U Shtua me sukses)</div></script>';
    }

    public function getallUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM users";
        $statement = $conn->query($sql);

        $Users = $statement->fetchAll();
        return $Users;
    }

    public function editStudent($id, $name, $surname, $email, $password){
        $conn = $this->connection;
        $sql = "UPDATE users SET Name=?,Surname=?,Email=?,Password=? WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$name, $surname, $email, $password, $id]);
        
        echo "<script><div>alert('U ndryshua me sukses')</div></script>";

    }
    
    function deleteUser($id){
        $conn = $this->connection;
        $sql = "DELETE from users where id=?";


        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }

    function getUserbyId($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $User = $statement->fetch();
        return $User;
    }
 }
?>