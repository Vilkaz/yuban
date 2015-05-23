<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkaz
 * Date: 28.04.2015
 * Time: 21:48
 */

namespace classes\view;


class User
{
    /** int */
    private $id;
    /** @var  string */
    private $name;

    function __construct($id = null, $name = null)
    {
        $this->setId($id);
        $this->setName($name);
    }


//region getter and setter


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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    //endregion getter and setter


} 