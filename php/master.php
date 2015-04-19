<?php
namespace php;

/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 19.04.2015
 * Time: 11:02
 */

use classes\Status;
use Exception;
use logwriter\LogWriter;

session_start();

function getAuth()
{
    try {
        if ($_SESSION['auth'] == 'true') {
            return Status::ok('true');
        } else {
            return Status::ok('false');
        }
    } catch (Exception $e) {
        return Status::exception('Exception while geting status');
        LogWriter::logException($e, 'Fehler beim authentifizierungs Abruf');
    }


}


switch ($_POST['get']) {
    case 'auth':
        print json_encode(getAuth());
        break;
        break;
}