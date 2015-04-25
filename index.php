<?php
namespace yuban;

use classes\basicDOMClases\A;
use classes\basicDOMClases\Ul;
use classes\basicDOMClases\Img;
use classes\Header;

require_once 'autoloader\autoloader.php';
require_once 'initSession.php';

$ulist= new Ul(['id'=>'new id', 'class'=>'ulclass'], [
    new A('test', 'test2'),
    new A('test', 'test3')]);

$ulist->render();

?>




<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <title>Youban Göttingen</title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="stylesheet" type="text/css" media="screen"
          href="http://www.sinologie-goettingen.de/boas/wp-content/themes/yoko_oas/style.css"/>

    <link rel="stylesheet" type="text/css" media="screen"
          href="css/css/style.css"/>
    <link rel="pingback" href="http://www.sinologie-goettingen.de/boas/xmlrpc.php?lang=en"/>

    <script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
    <script type='text/javascript' src='js/yuban.js'></script>


    <!--[if lt IE 9]>
    <script src="http://www.sinologie-goettingen.de/boas/wp-content/themes/yoko/js/html5.js"
            type="text/javascript"></script>
    <![endif]-->



</head>

<body class="home page page-id-2 page-template page-template-boascat-php">




<div id="fb-root">

</div>
<div id="page" class="clearfix">
    <header id="branding">
        <nav id="mainnav" class="clearfix">
            <div class="menu">
                <ul>
                    <li class="current_page_item"><a href="#"
                                                     title="Home">Home</a></li>
                    <li class="current_page_item"><a href="#"
                                                     title="Home">Profil</a></li>
                    <li class="page_item page-item-7"><a
                            href="#">wenn ja, sag was du noch brauchst</a>
                        <ul class='children'>
                            <li class="page_item page-item-1172"><a
                                    href="#">natürlich</a></li>
                            <li class="page_item page-item-1090"><a
                                    href="#">kannst auch</a></li>
                            <li class="page_item page-item-98"><a
                                    href="#">sowas einbauen</a></li>
                            <li class="page_item page-item-26"><a
                                    href="#">wenn willst</a>
                            </li>
                            <li class="page_item page-item-1155"><a
                                    href="#">oder listen</a>
                                <ul class='children'>
                                    <li class="page_item page-item-1601"><a
                                            href="ä">die weitere listen haben</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end mainnav -->
        <?php
        Header::render();
        ?>

        <hgroup id="site-title">
            <h1><a href="#" title="YUBAN">YUBAN</a></h1>

            <h2 id="site-description"> in Göttingen </h2>
        </hgroup>
        <!-- end site-title -->
        <img width="1102" height="350"
             src="http://www.sinologie-goettingen.de/boas/wp-content/uploads/2012/03/header_kalligraphie.png"
             class="headerimage wp-post-image" alt="header_kalligraphie.png" title="header_kalligraphie.png"/>

        <div class="clear"></div>
        <nav id="subnav">
        </nav>
        <!-- end subnav -->
    </header>
    <div id="mainContainer">
        <div id="content">

        </div>
        <div id="sidebar">

        </div>

    </div>
    <!-- end header -->

    <!-- end wrap -->

    <footer id="colophon" class="clearfix">
        Eine Website die von dem <a href="http://www.uni-goettingen.de/de/120565.html">Ostasiatischen Seminar</a> der
        Universit&auml;t
        G&ouml;ttingen gestohlen wurde. Theme: <a href="http://www.elmastudio.de/wordpress-themes/yoko/"
                                                  target="_blank">Yoko</a>.<span
            class="sep"> | </span><a href="#">Impressum gibts daher nicht</a><span class="sep"> | </span>
        <ul class="qtrans_language_chooser" id="qtranslate-chooser">
            <li class="lang-de"><a href="http://www.sinologie-goettingen.de/boas/" hreflang="de" title="Deutsch"><span>Deutsch</span></a>
            </li>
            <li class="lang-en active"><a href="http://www.sinologie-goettingen.de/boas/?lang=en" hreflang="en"
                                          title="English"><span>English</span></a></li>
            <li class="lang-zh"><a href="http://www.sinologie-goettingen.de/boas/?lang=zh" hreflang="zh"
                                   title="中文(简体字)"><span>中文(简体字)</span></a></li>
            <li class="lang-hk"><a href="http://www.sinologie-goettingen.de/boas/?lang=hk" hreflang="hk"
                                   title="中文(繁體字)"><span>中文(繁體字)</span></a></li>
        </ul>
        <div class="qtrans_widget_end"></div>
    </footer>
    <!-- end colophon -->

</div>
<!-- end page -->


</body>

<script>
    sixColumnEncryption('Attack at noon or we are done for');
    window.onload = function(){
        init();
        //$('#content').load('php/de/home.php');
    }


</script>
</html>