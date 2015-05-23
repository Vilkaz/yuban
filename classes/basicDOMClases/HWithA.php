<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 26.04.2015
 * Time: 10:47
 */

namespace classes\basicDOMClases;


class HWithA extends H{
    /** string */
    private $number;
    /** @var  string */
    private $text;
    /** @var  A */
    private $a;


    function __construct($number, $text, $a,$id=null, $class=null, $customParameters=null){
        $this->setNumber($number);
        $this->setText($text);
        $this->setA($a);
        $this->setId($id);
        $this->setClass($class);
        $this->setCustomParameters($customParameters);
    }






    function toHTML(){
        return '<h'.$this->getNumber().$this->getIDAndClass().
        $this->getCustomParameters().'>'.$this->getA()->toHTML().$this->getText().'</h'.$this->getNumber().'>';
    }

    //region getter and setter
    /**
     * @return A
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param A $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
    //endregion getter and setter
} 