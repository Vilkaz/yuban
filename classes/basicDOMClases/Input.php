<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 24.05.2015
 * Time: 11:45
 */

namespace classes\basicDOMClases;


class Input extends DOMElement{

        /** @var  string */
        private $value;
        /** @var  string */
        private $type;

    function __construct($id=null, $class=null, $type='text', $value='', $customParameters=null){
        $this->setId($id);
        $this->setClass($class);
        $this->setType($type);
        $this->setValue($value);
        $this->setCustomParameters($customParameters);
    }

    function toHTML(){
        return ' <input '.$this->getIDAndClass().
        'type="'.$this->getType().'"'.
        'value="'.$this->getValue().'"'.
        $this->getCustomParametersString().
        '>';
    }

    function render(){
        echo $this->toHTML();
    }


    //region getter and setter

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    //endregion getter and setter

} 