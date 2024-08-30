<?php
class Str{
    public function limit($str){
        if(strlen($str)>20){
            return substr($str,0,20).".....";
        }else{
            return $str;
        }
    }
}