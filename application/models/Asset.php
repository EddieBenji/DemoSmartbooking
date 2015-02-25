<?php

/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 24/02/2015
 * Time: 09:13 AM
 */
class Application_Model_Asset extends Application_Model_Abstract
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var Application_Model_AssetType
     */
    private $objAssetType;

    /**
     * @var array
     */
    private $arrayAnswers;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param Application_Model_AssetType $objAssetType
     */
    public function setObjAssetType($objAssetType)
    {
        $this->objAssetType = $objAssetType;
    }


    /**
     * @param array $arrayAnswers
     */
    public function setArrayAnswers($arrayAnswers)
    {
        $this->arrayAnswers = $arrayAnswers;
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Application_Model_AssetType
     */
    public function getObjAssetType()
    {
        return $this->objAssetType;
    }


    /**
     * @return array
     */
    public function getArrayAnswers()
    {
        return $this->arrayAnswers;
    }


}