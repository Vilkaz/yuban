<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 28.04.2015
 * Time: 21:39
 */

namespace classes\yubanClasses;


use classes\basicDOMClases\DOMElement;
use classes\view\User;
use DateTime;

class Article extends DOMElement{
    /** @var  string */
    private $id;
    /** @var  string */
    private $class;
    /** @var   */
    private $title;
    /** @var  string */
    private $text;
    /** @var  User */
    private $autor;
    /** @var  Datetime */
    private $date;

    function __construct($id=null,$class=null, $title=null,$text=null,$autor=null,$date=null){
    $this->setId($id);
    $this->setClass($class);
    $this->setTitle($title);
    $this->setText($text);
    $this->setAutor($autor);
    $this->setDate($date);
}

    function toHTML(){
        return '<div '.$this->getIDAndClass().'>'
            .'<h2 class="entry title">'.$this->getTitle().'</h2>'
            .'<div class="ArticleText">'.$this->getText().'</div>'
            .'<br><div class="autorLine">Erstell vom: '.$this->getAutor()->getName().' am '.$this->getDate()->format('d.m.Y').'</div>';
    }

    function render(){
        echo($this->toHTML());
    }

 //region getter and setter
    /**
     * @return User
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param User $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param string $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


//endregion getter and setter
} 