<?php
class Mysql{
    private $dbType="mysql",$host="localhost",$dbName="online_shop",$userName="root",$password="";
    protected $conn;
    public function __construct()
    {
        $this->conn=new \PDO("$this->dbType:host=$this->host;dbname=$this->dbName","$this->userName","$this->password");
    }
}
