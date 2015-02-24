<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 10:29 AM
 */
class Application_Service_AssetType
{


    private $assetTypeMapper;

    public function __construct()
    {
        $this->assetTypeMapper = new Application_Model_Mapper_AssetType();
    }


    /**
     * Función que llama al mapper de Asset, para agregar a la DB.
     * Regresa el mismo objeto, con el ID con el que se insertó en la DB.
     *
     * @param Application_Model_AssetType $obj
     * @return Application_Model_AssetType $obj
     */
    public function addAsset($obj)
    {
        return $this->assetTypeMapper->insert($obj);
    }

    /**
     * @param Application_Model_AssetType $obj
     * @return Application_Model_AssetType
     */
    public function updateInformationOfAnAsset($obj)
    {
        return $this->assetTypeMapper->update($obj);
    }

    /**
     * @param Application_Model_AssetType $obj
     */
    public function removeAnAsset($obj){
        $this->assetTypeMapper->delete($obj);
    }


    /**
     * @param $id
     * @return Application_Model_AssetType
     */
    public function findAnAssetTypeById($id)
    {
        return $this->assetTypeMapper->findOneBy($id);
    }

    /**
     * @return array Application_Model_AssetType
     */
    public function findAllAssets()
    {
        return $this->assetTypeMapper->findAll();
    }

    /**
     * @param int $id
     * @return array Application_Model_AssetType
     */
    public function findAssetsByDivisionId($id){
        return $this->assetTypeMapper->findAssetsByDivisionId($id);
    }

    /**
     * @param Application_Model_Division $obj
     * @return array
     */
    public function findAssetsByDivision($obj){
        return $this->assetTypeMapper->findAssetsByDivisionId($obj->getId());

    }
}