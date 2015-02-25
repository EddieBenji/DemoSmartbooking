<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 25/02/15
 * Time: 08:07 AM
 */
class Application_Model_Answer extends Application_Model_Abstract
{

    /**
     * @var String
     */
    private $data;
    /**
     * @var Application_Model_Property
     */
    private $objProperty;

    /**
     * @param String $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param Application_Model_Property $objProperty
     */
    public function setObjProperty($objProperty)
    {
        $this->objProperty = $objProperty;
    }

    /**
     * @return String
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return Application_Model_Property
     */
    public function getObjProperty()
    {
        return $this->objProperty;
    }



}