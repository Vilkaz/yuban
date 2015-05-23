<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 26.04.2015
 * Time: 09:50
 */

namespace classes\basicDOMClases;


abstract class DOMElement {
    /** @var  string */
    private $id;
    /** @var  string */
    private $class;
    /** @var  array */
    private $customParameters;


    /* @ param string  $id  */
    /* @ param string  $class  */
    function __construct($id,$class, $customParameters){
        $this->setId($id);
        $this->setClass($class);
        $this->setCustomParameters($customParameters);
    }


    function getIDAndClass(){
        $string="";
        if ($this->getId()!==null){
            $string.='id="'.$this->getId().'"';
        }
        if ($this->getClass()!==null){
            $string.=' class="'.$this->getClass().'"';
        }
        return $string;
    }

    function toHTML(){

    }

    function render(){
        echo($this->toHTML());
    }

    //region getter and setter
    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
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
    //endregion
}