<?php
namespace logwriter;

/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 19.04.2015
 * Time: 11:43
 */


use DateTime;
use Exception;

class LogWriter
{

    /**
     * @param Exception $exception
     * @param string $messageToUser
     */
    public static function logException($exception, $messageToUser)
    {
        self::addMsgToException($messageToUser);
        $date = new DateTime('now');
        $tab = "\n";
        $line = str_repeat('_', 100);
        $myfile = fopen('logwriter/errorlog.txt', "a");
        fwrite($myfile, $tab . $line);
        fwrite($myfile, $tab . $messageToUser);
        fwrite($myfile, $tab . str_pad("Date",10).'=' . $date->format('d.m.Y h:m:s'));
        fwrite($myfile, $tab . str_pad("Message",10).'=' . $exception->getMessage());
        fwrite($myfile, $tab . str_pad("Code",10) .'=' . $exception->getCode());
        fwrite($myfile, $tab . str_pad("File",10).'=' . $exception->getFile());
        fwrite($myfile, $tab . str_pad("Line",10).'=' . $exception->getLine());
        if (method_exists($exception,'getTraceAsString')) {
        fwrite($myfile, $tab ."Trace");
        fwrite($myfile, $tab . $exception->getTraceAsString());
        }
        fclose($myfile);
        }

    private static function addMsgToException($messageToUser)
    {
        if (isset($_SESSION["exception"])) {
        $msg = json_decode($_SESSION["exception"]);
        $msg[] = $messageToUser;
        $_SESSION["exception"] = json_encode($msg);
            }
else {
        $_SESSION["exception"] = json_encode(array($messageToUser));
}
}

}
