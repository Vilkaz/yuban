<?php

use logwriter\LogWriter;

/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 19.04.2015
 * Time: 11:28
 */

function autoloader($class_name){
    $file  = str_replace('\\', '/', $class_name).'.php';
    if (file_exists($file)){
        require_once($file);
    } else{
        echo("folgende datei nicht im namespace gefunden: ".$file);
        LogWriter::logException(new Exception('class Not found'), ' Could not load this class :'.$file);
    }
}

spl_autoload_register('autoloader');