<?php

session_start();

spl_autoload_register(function($calass){
    include "classes/$calass.php";
})

?>