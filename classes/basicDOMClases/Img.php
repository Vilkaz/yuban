<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 25.04.2015
 * Time: 13:01
 */

namespace classes\basicDOMClases;


class Img
{
    private $url;
    private $width;
    private $height;
    private $id;
    private $alt;


    /**
     * @param string $url
     * @param string $id
     * @param string $alt
     * @param int $height
     * @param int $width
     */
    function __construct($url, $id = null, $alt = null, $height = null, $width = null)
    {
        $this->setUrl($url);
        $this->setId($id);
        $this->setAlt($alt);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    function toHTML()
    {
        $id = $this->HTMLValue('id');
        $url = $this->getUrl();
        $height = $this->HTMLValue('height');
        $width = $this->HTMLValue('width');
        $alt = $this->HTMLValue('alt');
        return '<img ' . $id . ' src=' . $url . ' ' . $alt . $width . $height . '>';
    }


    function render(){
        echo($this->toHTML());
    }


    function HTMLValue($param)
    {
        switch ($param) {
            case('id'):
                if ($this->getId() !== null) {
                    return 'id="' . $this->getId() . '"';
                }
                return '';
            case ('alt'):
                if ($this->getAlt() !== null) {
                    return 'alt="' . $this->getAlt() . '" ';
                }
                return '';
            case ('height'):
                if ($this->getHeight() !== null) {
                    return 'height="' . $this->getHeight() . '" ';
                }
                return '';
            case ('width'):
                if ($this->getWidth() !== null) {
                    return 'width="' . $this->getWidth() . '" ';
                }
                return '';


        }
    }


    function getStyle()
    {

        if (strlen($height . $width) == 0) {
            return '';
        }
        return 'style="' . $height . $width . '" ';
    }

    //region geter And setters


    /**
     * @return mixed
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * @param mixed $alt
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $heigth
     */
    public function setHeight($heigth)
    {
        $this->height = $heigth;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
    //endregion
} 