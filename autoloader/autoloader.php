<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 19.04.2015
 * Time: 11:28
 */

function autoload($class_name){
    $file  = str_replace('\\', '/', $class_name).'php';
    if (file_exists($file)){
        require_once($file);
    } else{
        echo("folgende datei nicht im namespace gefunden: ".$file);
    }
}

spl_autoload_register('autoloader');