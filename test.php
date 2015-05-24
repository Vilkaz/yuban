<?php
namespace yuban;

use classes\basicDOMClases\A;
use classes\basicDOMClases\H;
use classes\basicDOMClases\HWithA;
use classes\basicDOMClases\Input;
use classes\basicDOMClases\Nav;
use classes\basicDOMClases\Ul;
use classes\basicDOMClases\Img;
use classes\yubanClasses\Header;
use DB\Get;

require_once 'autoloader\autoloader.php';
require_once 'initSession.php';


echo"test";


$test= new Input('myid','myclass', 'text', 'myInputTest', ['data-test'=>'asdasd', 'data-second'=>'234']);
var_dump($test);

$test->toHTML();

$test->render();

