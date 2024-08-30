<?php
require_once("../app.php");
if($request->hasRequest($request->post("login"))){
    $email=$request->post('email');
    $password=$request->post('password');
    if(!empty($email) && !empty($password)){
        $user=$user->getUser($email);
        if(!empty($user)){
            $oldPassword=$user['password'];
            $userId=$user['id'];
            $session->setSession("userId",$userId);
            $passwordVerify=password_verify($password,$oldPassword);
            if($passwordVerify){
                $request->redirect("../index.php");
                exit();
            }else{
                $session->setSession("error","Wrong password");
                $request->redirect("../login.php");
                exit();
            }
        }else{
            $session->setSession("error","Wrong email");
            $request->redirect("../login.php");
            exit();
        }   
    }else{
        $session->setSession("error","Email and Password are required");
        $request->redirect("../login.php");
        exit();
    }
    }else{
        $request->redirect("../login.php");
        exit();
    }
 