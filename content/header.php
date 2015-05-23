<?php
namespace content;
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 25.04.2015
 * Time: 12:01
 */

use classes\basicDOMClases\A;
use classes\basicDOMClases\H;
use classes\basicDOMClases\Img;
use classes\basicDOMClases\Nav;
use classes\basicDOMClases\Ul;
use classes\yubanClasses\Header;


$link1 = new A('index.php/?site=home', 'Home');
$link2 = new A('index.php/?site=profile', 'Profil');
$link3 = new A('index.php/?site=sonstiges', 'Sonstiges');
$ul= new Ul(null, [$link1, $link2, $link3]);
$nav = new Nav('mainnav', 'clearfix', $ul);
$img = new Img('img/1.png', 'headerimage wp-post-image', 'header',350, 1000);
$hinGoettingen=new H(2, 'in G&ouml;ttingen','site-description');
$aYouban = new A('#','in G&ouml;ttingen');
$hYouban = new H(1, '', null, null, [$aYouban]);


$header = new Header('branding', null, $nav,$img, $hinGoettingen, $hYouban);