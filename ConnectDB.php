<?php
class ConnectDb {

  private static $instance = null;
  private $conn;
  
  private $servername = "localhost";
  private $username = "id10310525_root";
  private $password = "anisanis";
  private $dbname = "id10310525_restaurant";

   

  private function __construct()
  {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  }
  
  public static function getInstance()
  {
    if(!self::$instance)
    {
      self::$instance = new ConnectDb();
    }
   
    return self::$instance;
  }
  
  public function getConnection()
  {
    return $this->conn;
  }
}
?>