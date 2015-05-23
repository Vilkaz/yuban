<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 25.04.2015
 * Time: 13:47
 */

namespace classes\basicDOMClases;


class AWithImg extends A
{

    /** @var  Img */
    private $img;

    /**
     * @param int $id
     * @param int $class
     * @param string $href
     * @param string $text
     * @param Img $img
     */
    function __construct($id = null, $class = null, $href = '#', $text = '', $img)
    {
        $this->setId($id);
        $this->setClass($class);
        $this->setHref($href);
        $this->setText($text);
        $this->setImg($img);
    }


    function toHTML()
    {
        return '<a ' .
        $this->getIDAndClass() .
        $this->HTMLValue('href') . '>'.
        $this->getImg()->toHTML().
        $this->getText() . '</a>';
    }

    function render()
    {
        echo($this->toHTML());
    }




    //region getter and SEtter

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


    //endregion
} 