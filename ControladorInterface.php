<?php

interface ControladorInterface {
    function ligar();
    function desligar();
    static function getStatus();
    static function setStatus($status);
}

?>