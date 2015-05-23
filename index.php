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

<body class="home page page-id-2 page-template page-template-boascat-php" onload="initFlags()">

<div id="TEST"></div>

<div id="page" class="clearfix" data-site="home">
    <div id="pageHead">
        <?php
        Get::Header()->render();
        ?>
    </div>

    <div id="mainContainer">
        <div id="content">
            <?php
            Get::content()->render();
            ?>
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
</script>
</html>