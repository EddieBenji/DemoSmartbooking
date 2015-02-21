<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 09:21 AM
 */
class Application_Model_Asset extends Application_Model_Abstract
{

    private $id;
    private $name;
    private $x, $y, $z;
    private $objDivision;
    private $objPlace;
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
     * @param double $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param double $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @param double $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    /**
     * @param Application_Model_Division $objDivision
     */
    public function setObjDivision($objDivision)
    {
        $this->objDivision = $objDivision;
    }

    /**
     * @param Application_Model_Place $objPlace
     */
    public function setObjPlace($objPlace)
    {
        $this->objPlace = $objPlace;
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
     * @return double
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return double
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @return double
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @return Application_Model_Division
     */
    public function getObjDivision()
    {
        return $this->objDivision;
    }

    /**
     * @return Application_Model_Place
     */
    public function getObjPlace()
    {
        return $this->objPlace;
    }

    /**
     * @return array
     */
    public function getArrayProperties()
    {
        return $this->arrayProperties;
    }

}