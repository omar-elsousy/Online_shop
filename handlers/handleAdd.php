<?php
require_once("../app.php");
if($request->hasRequest($request->post("submit"))){
   $name=$request->post("name");
   $desc=$request->post("desc"); 
   $price=$request->post("price"); 
   $img=$request->files("img"); 
   $objImg=new Img($img);
   $result=$product->addProduct($name,$desc,$price,$objImg->newName);
   if($result){
    $objImg->uploadFile();
    $request->redirect("../index.php");
    exit();
   }
}else{
    $request->redirect("../index.php");
}
