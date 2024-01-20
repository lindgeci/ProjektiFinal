<?php
class DATABASE {
    
    private $host = "localhost";
    private $dbusername = "root";
    private $dbpassword = ""; 
    private $db = "lg";

    function startConnection() {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->dbusername, $this->dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
            echo "Connection successful!"; 
            return $conn;
            
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}
?>
