<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 09:21 AM
 */
class Application_Model_AssetType extends Application_Model_Abstract
{

    private $id;
    private $name;
    private $objDivision;
    private $arrayProperties;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param String $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param Application_Model_Division $objDivision
     */
    public function setObjDivision($objDivision)
    {
        $this->objDivision = $objDivision;
    }


    /**
     * @param array $arrayProperties
     */
    public function setArrayProperties($arrayProperties)
    {
        $this->arrayProperties = $arrayProperties;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Application_Model_Division
     */
    public function getObjDivision()
    {
        return $this->objDivision;
    }


    /**
     * @return array
     */
    public function getArrayProperties()
    {
        return $this->arrayProperties;
    }

}