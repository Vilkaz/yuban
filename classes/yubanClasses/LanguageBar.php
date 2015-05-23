<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 09.05.2015
 * Time: 12:13
 */

namespace classes\yubanClasses;


use classes\basicDOMClases\AWithImg;
use classes\basicDOMClases\DOMElement;

class LanguageBar extends DOMElement{
  /** @var  array(AWithImg) */
    private $arrayOfFlags;

    function __construct($id=null, $class=null,$arrayOfFlags=[]){
        $this->setId($id);
        $this->setClass($class);
        $this->setArrayOfFlags($arrayOfFlags);
    }

    function toHTML(){
        $listOfA='';
        foreach ($this->getArrayOfFlags() as $aWithImg) {
            /** @var AWithImg $aWithImg */
            $listOfA.=$aWithImg->toHTML();
        }
        return '<div '.$this->getIDAndClass().'>'
        .$listOfA
        .'</div>';
    }


    function render(){
        echo($this->toHTML());
    }

//region getter and setter
    /**
     * @return array
     */
    public function getArrayOfFlags()
    {
        return $this->arrayOfFlags;
    }

    /**
     * @param array $arrayOfFlags
     */
    public function setArrayOfFlags($arrayOfFlags)
    {
        $this->arrayOfFlags = $arrayOfFlags;
    }

//endregion getter and setter
}