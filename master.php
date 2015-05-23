<?php
namespace yuban;

/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 19.04.2015
 * Time: 11:02
 */

require_once 'initSession.php';

use classes\Status;
use classes\yubanClasses\Page;
use DB\Get;
use Exception;
use logwriter\LogWriter;

require_once 'autoloader/autoloader.php';

// region Authentification stuff
function getAuth()
{
    try {
        if (getSessionParameter('auth') == 'true') {
            return Status::ok('auth', 'true');
        } else {
            return Status::ok('auth', 'false');
        }
    } catch (Exception $e) {
        LogWriter::logException($e, 'Fehler beim authentifizierungs Abruf');
        return Status::exception('auth', 'Exception while geting status');
    }
}


//endregion Authentification stuff

//region Flags

function flagRequest()
{
    setLangIfNotEqual();
    return pageFactory()->toArray();

}

function pageFactory(){
    $header=Get::Header();
    $content=Get::content();
    return new Page($header, $content, null);
}

function setLangIfNotEqual(){
    if (getSession('lang')!==getPost('lang')){
        setSession('lang',getPost('lang'));
    }
}

//endregion Flags

//region general Tools

function getSession($parameter)
{
    if (isset($_SESSION[$parameter])) {
        return $_SESSION[$parameter];
    }
    return null;
}

function setSession($variable, $value)
{
    $_SESSION[$variable] = $value;
}

function getPost($parameter)
{
    if (isset($_POST[$parameter])) {
        return $_POST[$parameter];
    }
    return null;
}

//endregion general Tools

function getSessionParameter($param)
{
    if (!isset($_SESSION[$param])) {
        return '';
    }
    return $_SESSION[$param];
}


switch ($_POST['action']) {
    case 'auth':
        print json_encode(getAuth());
        break;
    case 'flag':
        print flagRequest();
        break;
}