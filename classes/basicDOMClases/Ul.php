<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 25.04.2015
 * Time: 17:09
 */

namespace classes\basicDOMClases;

use classes\basicDOMClases\A;
use classes\basicDOMClases\Img;


class Ul {
    /** @var  array */
    private  $ellements;
    /** @var  array */
    private  $parameters;

    function __construct($parameters=[], $elements=[]){
        $this->setEllements($elements);
        $this->setParameters($parameters);
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    function toHTML(){
        $string = '<ul'.$this->getParam().'>';
        foreach ($this->getEllements() as $element) {
            $string.='<li>'.$element->toHTML().'</li>';
        }
        return $string.='</ul>';
    }


    function render(){
        echo($this->toHTML());
    }

    function getParam(){
        $string=' ';
        foreach ($this->getParameters() as $key => $value) {
            $string.=$key.'="'.$value.'"';
        }
        return $string;
    }


    //region getter and Setter


    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     */

    /**
     * @return mixed
     */
    public function getEllements()
    {
        return $this->ellements;
    }

    /**
     * @param mixed $ellements
     */
    public function setEllements($ellements)
    {
        $this->ellements = $ellements;
    }

    //endregion
} 