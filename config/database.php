<?php
// config/database.php
<<<<<<< HEAD
class Database {
=======
class Database
{
>>>>>>> 396fb3a87c1b5c21c14999bcbdcd8ea59545a66f
    private $host = '160.19.166.42';
    private $db_name = '2D_klp4';
    private $username = '2D_klp4';
    private $password = 'rp4jGe]*c@b*lQRt';
    private $conn;

    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }
}
