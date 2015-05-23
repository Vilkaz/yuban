<?php
namespace yuban;

use classes\basicDOMClases\A;
use classes\basicDOMClases\H;
use classes\basicDOMClases\HWithA;
use classes\basicDOMClases\Nav;
use classes\basicDOMClases\Ul;
use classes\basicDOMClases\Img;
use classes\yubanClasses\Header;
use DB\Get;

require_once 'autoloader\autoloader.php';
require_once 'initSession.php';


echo"test";


var_dump(Get::Header()->getNav()->getUl());

