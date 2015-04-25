<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 25.04.2015
 * Time: 13:47
 */

namespace classes\basicDOMClases;


class A
{

    private $href;
    private $text;

    /**
     * @param string $href
     * @param string $text
     */
    function __construct($href='#', $text=''){
        $this->setHref($href);
        $this->setText($text);
    }


    function toHTML(){
        return '<a '.$this->HTMLValue('href').'>'.$this->getText().'</a>';
    }

    function render(){
        echo ($this->toHTML());
    }


    function HTMLValue($param){
        switch($param){
            case('href'):
              return 'href="'.$this->getHref().'" ';
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