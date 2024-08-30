<?php
class Validation{
    public $errors=[];
    public function name($name){
        if(empty($name)){
            $this->errors[]="Username is required";
        }
        elseif(!is_string($name)){
            $this->errors[]="Username must be string";
        }
        elseif(strlen($name)<3){
            $this->errors[]="Username must be more than 3 chars";
        }
    }
    public function email($email){
        if(empty($email)){
            $this->errors[]="Email is required";
        }
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $this->errors[]="Not valid email";
        }

        }
        public function password($password){
            if(empty($password)){
                $this->errors[]="Password is required";
            }
            elseif(strlen($password)<5){
                $this->errors[]="Password must be more than 5 chars";
            }
    }
    public function phone($phone){
        if(empty($phone)){
            $this->errors[]="Phone is required";
        }
        elseif(!is_numeric($phone)){
            $this->errors[]="Phone must be number";
        }
    }
    public function address($address){
        if(empty($address)){
            $this->errors[]="Address is required";
        }
    }
}
