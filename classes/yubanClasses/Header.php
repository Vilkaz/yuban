<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 25.04.2015
 * Time: 12:47
 */

namespace classes\yubanClasses;

use classes\basicDOMClases\A;
use classes\basicDOMClases\DOMElement;
use classes\basicDOMClases\H;
use classes\basicDOMClases\HWithA;
use classes\basicDOMClases\Img;
use classes\basicDOMClases\Nav;

class Header extends DOMElement{

    /** @var  Nav */
    private $nav;
    /** @var  Img */
    private $img;
    /** @var  H */
    private $hInGoettingen;
    /** @var  HWithA */
    private $hYouban;
    /** @var  LanguageBar */
    private $languageBar;


    /**
     * @param int $id
     * @param string $class
     * @param Nav $nav
     * @param Img $img
     * @param H $hInGoettingen
     * @param HWithA $hYouban
     * @internal param $
     * @param LanguageBar $languageBar
     */
    function __construct($id, $class, $nav, $img, $hInGoettingen, $hYouban, $languageBar){
        $this->setId($id);
        $this->setClass($class);
        $this->setNav($nav);
        $this->setImg($img);
        $this->setHInGoettingen($hInGoettingen);
        $this->setHYouban($hYouban);
        $this->setLanguageBar($languageBar);
   }


    function toHTML(){
        return '<header '.$this->getIDAndClass().'>'.
        $this->getNav()->toHTML().
        '<div id="site-title">'.$this->getHYouban()->toHTML().'</div>'.
        $this->getHInGoettingen()->toHTML().
        $this->getImg()->toHTML().
        $this->getLanguageBar()->toHTML().
        '</header>';
    }






//region getter and setter


    /**
     * @return LanguageBar
     */
    public function getLanguageBar()
    {
        return $this->languageBar;
    }

    /**
     * @param LanguageBar $languageBar
     */
    public function setLanguageBar($languageBar)
    {
        $this->languageBar = $languageBar;
    }



    /**
     * @return H
     */
    public function getHYouban()
    {
        return $this->hYouban;
    }

    /**
     * @param H $hYouban
     */
    public function setHYouban($hYouban)
    {
        $this->hYouban = $hYouban;
    }

    /**
     * @return H
     */
    public function getHInGoettingen()
    {
        return $this->hInGoettingen;
    }

    /**
     * @param H $hInGoetingen
     */
    public function setHInGoettingen($hInGoetingen)
    {
        $this->hInGoettingen = $hInGoetingen;
    }

    /**
     * @return Img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param Img $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return Nav
     */
    public function getNav()
    {
        return $this->nav;
    }

    /**
     * @param Nav $nav
     */
    public function setNav($nav)
    {
        $this->nav = $nav;
    }
    //endregion getter and setter

} 