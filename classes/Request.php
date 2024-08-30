<?php
class Request{
    public function get($key){
        if(isset($_GET[$key])){
            return $_GET[$key];
        }else{
            return false;
        }
    }
    public function post($key){
        if(isset($_POST[$key])){
            return $_POST[$key];
        }else{
            return false;
        }
    }
    public function hasRequest($request){
        if(isset($request)){
            return true;
        }else{
            return false;
        }
    }

    public function files($key){
        if(isset($_FILES[$key])){
            return $_FILES[$key];
        }else{
            return false;
        }
    }
    public function redirect($path){
        header("location:".$path);
    }
}