<?php
require_once("../app.php");
if($request->hasRequest($request->post('register'))){
    $name=$request->post('name');
    $email=$request->post('email');
    $password=$request->post('password');
    $phone=$request->post('phone');
    $address=$request->post('address');
    $validation->name($name);
    $validation->email($email);
    $validation->password($password);
    $validation->phone($phone);
    $validation->address($address);
    if(empty($validation->errors)){
        $passwordhash=password_hash($password,PASSWORD_BCRYPT);
        $user->insertUser($name,$email,$passwordhash,$phone,$address);
        $request->redirect("../login.php");
        exit();
    }else{
        $session->setSession("errors",$validation->errors);
        $request->redirect("../register.php");
        exit();
    }
}else{
    $request->redirect("../register.php");
    exit();
}