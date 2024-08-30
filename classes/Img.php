<?php
class Img{
    private $imgName,$img_tmp_name;
    public $newName;
    public function __construct($img)
    {
        $this->imgName=$img['name'];
        $this->img_tmp_name=$img['tmp_name'];
        $ext=pathinfo($this->imgName,PATHINFO_EXTENSION);
        $this->newName=uniqid().".".$ext;        
    }    
    public function uploadFile(){
        move_uploaded_file($this->img_tmp_name,"../images/$this->newName");
    }
    public function unlinkFile($imgName){
        unlink("../images/".$imgName);
    }
}

