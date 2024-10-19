<?php

require_once 'config/config.php';

/*
require_once 'librerias/Base.php';
require_once 'librerias/Controlador.php';
require_once 'librerias/Core.php';
*/
//auto load

spl_autoload_register(function($nombreClase){
    require_once 'librerias/' . $nombreClase. '.php';
});







 
?>