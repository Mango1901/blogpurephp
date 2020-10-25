<?php
spl_autoload_register('Loader');
function Loader($className){
    $path = "../class/";
    $extension = ".php";
    $full_path = $path.$className.$extension;
    include_once $full_path;
}