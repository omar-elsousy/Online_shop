<?php
require_once("Mysql.php");
class User extends Mysql{
    private $password;
    public function getPassword($password){
        $this->password=$password;
    }
    public function getUser($email){
        $query="select * from Users where email = '$email' ";
        $runQuery=$this->conn->query($query);
        $user=[];
        if(!empty($runQuery)){
            $user=$runQuery->fetch(pdo::FETCH_ASSOC);
        }
        return $user;
    }
    public function insertUser($name,$email,$password,$phone,$address){
        $query="insert into users (`name`,`email`,`password`,`phone`,`address`) values('$name','$email','$password','$phone','$address')";
        $runQuery=$this->conn->query($query);
        if($runQuery){
            return true;
        }else{
            return false;
        }
    }
}