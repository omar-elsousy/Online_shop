<?php
include_once("../app.php");
$id=$request->get("id");
$product->deleteProduct($id);
$request->redirect("../index.php");
