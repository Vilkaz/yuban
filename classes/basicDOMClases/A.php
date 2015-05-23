<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 25.04.2015
 * Time: 13:47
 */

namespace classes\basicDOMClases;


class A extends DOMElement
{

    private $href;
    private $text;

    /**
     * @param string $id
     * @param string $class
     * @param string $href
     * @param string $text

     */
    function __construct($id, $class,$href = '#', $text = '')
    {
        $this->setId($id);
        $this->setClass($class);
        $this->setHref($href);
        $this->setText($text);
    }


    function toHTML()
    {
        return '<a '.
        $this->getIDAndClass().
        $this->HTMLValue('href') . '>' . $this->getText() . '</a>';
    }

    function render()
    {
        echo($this->toHTML());
    }


    function HTMLValue($param)
    {
        switch ($param) {
            case('href'):
                return 'href="' . $this->getHref() . '" ';
        }
    }



    //region getter and SEtter
    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param mixed $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    //endregion
} 