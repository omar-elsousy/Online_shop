<?php
require_once("../app.php");
// require_once("../classes/Img.php");
if($request->hasRequest($request->post("submit"))){
   $id=$request->get("id");
   $name=$request->post("name");
   $desc=$request->post("desc"); 
   $price=$request->post("price"); 
   $existImg=$product->getOne($id);
   $oldImg=$existImg['img'];
   if($request->hasRequest($request->files("img")) && $request->files("img")['name']){
    $img=$request->files('img');
    $objImg=new Img($img);
   }else{
    $img=$request->files('img');
    $objImg=new Img($img);
    $objImg->newName=$oldImg;
   }
   $result=$product->UpdateProduct($id,$name,$desc,$price,$objImg->newName);
   if($result){
    $objImg->uploadFile();
    $request->redirect("../index.php");
    exit();
   }
}else{
    $request->redirect("../index.php");
}
