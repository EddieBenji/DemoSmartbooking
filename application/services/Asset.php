<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 10:29 AM
 */
class Application_Service_Asset
{


    private $assetMapper;

    public function __construct()
    {
        $this->assetMapper = new Application_Model_Mapper_Asset();
    }


    /**
     * Función que llama al mapper de Asset, para agregar a la DB.
     * Regresa el mismo objeto, con el ID con el que se insertó en la DB.
     *
     * @param Application_Model_Asset $obj
     * @return Application_Model_Asset $obj
     */
    public function insert($obj)
    {
        return $this->assetMapper->insert($obj);
    }

    /**
     * @param Application_Model_Asset $obj
     * @return Application_Model_Asset
     */
    public function updateInformationOfAnAsset($obj)
    {
        return $this->assetMapper->update($obj);
    }

    /**
     * @param Application_Model_Asset $obj
     */
    public function deleteAnAsset($obj){
        $this->assetMapper->delete($obj);
    }


    /**
     * @param $id
     * @return Application_Model_Asset
     */
    public function findAnAssetById($id)
    {
        return $this->assetMapper->findOneBy($id);
    }

    /**
     * @return array Application_Model_Asset
     */
    public function findAllAssets()
    {
        return $this->assetMapper->findAll();
    }
}