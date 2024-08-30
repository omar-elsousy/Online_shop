<?php
require_once("Mysql.php");
class Product extends Mysql{
    // crud
    public function getAll(){
        $query="select * from products";
        $runQuery=$this->conn->query($query);
        $products=[];
        if(!empty($runQuery)){
        $products=$runQuery->fetchAll(pdo::FETCH_ASSOC);
        }
        return $products;
    }
    public function getOne($id){
        $query="select * from products where id = '$id' ";
        $runQuery=$this->conn->query($query);
        $product=[];
        if(!empty($runQuery)){
        $product=$runQuery->fetch(pdo::FETCH_ASSOC);
        }
        return $product;
    }
    public function addProduct($name,$desc,$price,$img){
        $query="insert into products (`name`,`desc`,`price`,`img`) values('$name','$desc','$price','$img')";
        $runQuery=$this->conn->query($query);
        if($runQuery){
            return true;
        }else{
            return false;
        }
    }
    public function UpdateProduct($id,$name,$desc,$price,$img){
        $query="update products set `name`='$name',`desc`='$desc',`price`='$price',`img`='$img' where `id`='$id' ";
        $runQuery=$this->conn->query($query);
        if($runQuery){
            return true;
        }else{
            return false;
        }
    }
    public function deleteProduct($id){
        $query="delete from products where id = '$id' ";
        $runQuery=$this->conn->query($query);
        if($runQuery){
            return true;
        }else{
            return false;
        }
    }
}