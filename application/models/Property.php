<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 08:31 AM
 */
class Application_Model_Property extends Application_Model_Abstract
{

    private $id;
    private $name;
    private $type;
    private $required;
    private $data;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @param String $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function isRequired()
    {
        return $this->required;
    }

    /**
     * @return String
     */
    public function getData()
    {
        return $this->data;
    }



}