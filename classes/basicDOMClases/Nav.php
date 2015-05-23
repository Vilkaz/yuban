<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 26.04.2015
 * Time: 09:51
 */

namespace classes\basicDOMClases;


class Nav extends DOMElement
{
    /** @var  Ul */
    private $ul;

    /** @var  array */
    private $customParameters;


    /**
     * @param string $id
     * @param string $class
     * @param Ul $ul
     * @param array $customParameters
     */
    function __construct($id=null, $class=null, $ul=null, $customParameters=null)
    {
        $this->setId($id);
        $this->setClass($class);
        $this->setUl($ul);
        $this->setCustomParameters($customParameters);
    }

    function toHTML(){
        return '<nav '.$this->getIDAndClass().$this->getParam().'>'.
        $this->getUl()->toHTML().'</nav>' ;
    }




    function getParam(){
        $string=' ';
        if ($this->getCustomParameters()!==null)
        foreach ($this->getCustomParameters() as $key => $value) {
            $string.=$key.'="'.$value.'"';
        }
        return $string;
    }


    //region getter and setter
    /**
     * @return array
     */
    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    /**
     * @param array $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    /**
     * @return Ul
     */
    public function getUl()
    {
        return $this->ul;
    }

    /**
     * @param Ul $ul
     */
    public function setUl($ul)
    {
        $this->ul = $ul;
    }

    //endregion getter and setter


} 