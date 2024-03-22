<?php

class Televisao implements ControladorInterface {
    private static $status = false;
    public function ligar(){
        self::$status = true;
        echo "Televisão ligada. \n";
    }
    public function desligar(){
        self::$status = false;
        echo "Televisão desligada. \n";
    }
    public static function getStatus(){
        return self::$status;
    }
    public static function setStatus($status){
        self::$status = $status;
    }
}



?>