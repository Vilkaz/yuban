<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 09.05.2015
 * Time: 20:29
 */

namespace classes\yubanClasses;


use classes\basicDOMClases\DOMElement;

class Page extends DOMElement
{
    /** @var  Header */
    private $header;
    /** @var  Article */
    private $content;
    /** @var  Sidebar */
    private $sidebar;

    function __construct($haeder, $article, $sidebar){
        $this->setHeader($haeder);
        $this->setContent($article);
        $this->setSidebar($sidebar);
    }

    function toArray(){
        return [
            'header'=>$this->getHeader()->toHTML(),
            'content'=>$this->getContent()->toHTML(),
            'sidebar'=>$this->getSidebar()->toHTML()
        ];
    }

    //region Getter and setter

    /**
     * @return Article
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param Article $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param Header $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return Sidebar
     */
    public function getSidebar()
    {
        return $this->sidebar;
    }

    /**
     * @param Sidebar $sidebar
     */
    public function setSidebar($sidebar)
    {
        $this->sidebar = $sidebar;
    }

    //endregion getter and setter

} 