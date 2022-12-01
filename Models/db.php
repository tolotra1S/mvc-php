<?php
class DB{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "Origine_projet";
    public $ds;
    public function __construct(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname.';charset=utf8';
        $options = array (
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
        );
        try {
            $this->ds = new PDO($dsn,$this->user,$this->pass,$options);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}

?>