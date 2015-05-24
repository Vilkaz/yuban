<?php
namespace DB;

use classes\basicDOMClases\A;
use classes\basicDOMClases\AWithImg;
use classes\basicDOMClases\DOMElement;
use classes\basicDOMClases\H;
use classes\basicDOMClases\HWithA;
use classes\basicDOMClases\Img;
use classes\basicDOMClases\Nav;
use classes\basicDOMClases\Ul;
use classes\view\User;
use classes\yubanClasses\Article;
use classes\yubanClasses\Header;
use classes\yubanClasses\LanguageBar;
use DateTime;

/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 28.04.2015
 * Time: 22:06
 */
class Get extends DOMElement
{
    public static function Header()
    {
        $link1 = new A(null, null, 'index.php?site=home', 'Home');
        $link2 = new A(null, null, 'index.php?site=profile', 'Profil');
        $link3 = new A(null, null, 'index.php?site=sonstiges', 'Sonstiges');
        $ul = new Ul(['something' => 'beter'], [$link1, $link2, $link3]);
        $nav = new Nav('mainnav', 'clearfix', $ul);
        $img = new Img('img/1.png', 'headerimage wp-post-image', 'header', 350, 1102);
        $hinGoettingen = new H(2, 'in G&ouml;ttingen', 'site-description');
        $aYouban = new A(null, null, '#', 'YUBAN');
        $hYouban = new HWithA(1, '', $aYouban);
        $ger = new AWithImg('gerFlag', 'langFlags', '#', '',
            new Img('img/de.jpg', null, null, 10, 15));
        $eng = new AWithImg('engFlag', 'langFlags', '#', '',
            new Img('img/gb.png', null, null, 10, 15));
        $languageBar = New LanguageBar('languageBar', null, [$ger, $eng]);
        $header = new Header('branding', null, $nav, $img, $hinGoettingen, $hYouban, $languageBar);
        return $header;
    }


    public static function content()
    {
        $autor = new User('1', 'john wilkinson');
        $article = New Article('firstArticle',
            'first Article Class',
            'Mockup Up Article ',
            'Un somit beginnt es, die Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non enim ornare lorem finibus convallis non eget dui. Suspendisse potenti. Sed egestas euismod tortor, nec molestie mauris tincidunt sed. Quisque sollicitudin augue faucibus diam elementum faucibus. In neque urna, efficitur vitae ultrices egestas, scelerisque quis magna. Nullam non est felis. Morbi elementum purus vitae justo pharetra, ac commodo turpis iaculis. Etiam gravida egestas erat eu fringilla. Nullam turpis risus, tristique at purus mattis, finibus molestie eros. Aenean pulvinar lorem nisi, ac egestas risus auctor eu. Aliquam erat volutpat. Pellentesque at leo id sem ornare scelerisque lacinia porttitor nisi.

    Etiam vitae magna dolor. Duis in lectus sed nibh imperdiet venenatis. Cras ullamcorper porttitor lectus, id pellentesque magna bibendum eget. Aenean ultricies tincidunt metus, ac cursus eros mollis eu. Vestibulum sollicitudin efficitur aliquam. Donec quis tellus suscipit, rhoncus leo placerat, tempor elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec mollis enim eu malesuada gravida. Aliquam aliquet sit amet massa ut viverra. Sed at tristique magna, sed lacinia elit. Nulla non cursus arcu, quis tincidunt justo. Donec ultrices odio sed viverra vehicula. Nam quis malesuada ex. Proin in congue diam.

    Vivamus eu dapibus leo. Fusce volutpat est velit, non ornare enim tristique a. Nunc consectetur sagittis erat. Sed risus orci, ultrices quis dolor sed, fringilla varius tortor. Quisque sit amet ante odio. Ut ultricies, erat a blandit auctor, tellus elit sollicitudin tellus, dapibus tristique nibh nulla id quam. Ut mattis massa ac magna hendrerit, ut aliquet erat tincidunt. Aliquam consequat hendrerit pharetra. Suspendisse venenatis, sapien ut ornare volutpat, lectus enim consectetur nibh, commodo pretium augue nunc quis ipsum. Mauris facilisis libero eu elit consequat, vel dictum neque porttitor. Aliquam a risus urna. Nunc luctus mi mauris, et pellentesque orci vestibulum semper. Mauris sed sapien vel metus convallis aliquam vitae sed neque.

    Integer vel tristique justo, vitae molestie elit. Quisque venenatis enim eu volutpat tempus. Nam eget felis sed sem auctor pulvinar. Duis eget consectetur ante. Morbi sodales nulla eros, ut vestibulum nunc ultricies mollis. Donec consequat eget libero ut semper. In lacinia felis dictum velit tempus, et elementum nibh vestibulum.

    Aliquam pretium congue dui. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ut ligula bibendum libero vehicula convallis. Donec quis cursus elit, eu maximus justo. Nunc eu maximus urna. Curabitur ac rutrum felis, hendrerit mollis nulla.',
            $autor,
            new DateTime('now'));
        return $article;
    }
} 