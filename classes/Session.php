<?php
class Session{
    public function __construct()
    {
        session_start();
    }
    public function setSession($key,$value){
        $_SESSION[$key]=$value;
    }
    public function getSession($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else {
            return false;
        }
    }
    public function deleteSession($session){
            unset($session);
    }
    public function destroy(){
        session_destroy();
    }
}