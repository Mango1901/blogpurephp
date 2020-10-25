<?php
spl_autoload_register('Loader1');
function Loader1($className){
    $path = "class/";
    $extension = ".php";
    $full_path = $path.$className.$extension;
    include_once $full_path;
}