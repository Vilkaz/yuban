<?php
namespace yuban;

/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 19.04.2015
 * Time: 11:02
 */

use classes\Status;
use Exception;
use logwriter\LogWriter;

require_once 'autoloader/autoloader.php';

session_start();


function getAuth()
{
    try {
        if (getSessionParameter('auth') == 'true') {
            return Status::ok('auth', 'true');
        } else {
            return Status::ok('auth','false');
        }
    } catch (Exception $e) {
        LogWriter::logException($e, 'Fehler beim authentifizierungs Abruf');
        return Status::exception('auth','Exception while geting status');
    }
}

function getSessionParameter($param){
    if (!isset($_SESSION[$param])){
        return '';
    }
    return $_SESSION[$param];
}


switch ($_POST['get']) {
    case 'auth':
        print json_encode(getAuth());
        break;
        break;
}