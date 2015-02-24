<?php

/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 24/02/2015
 * Time: 09:22 AM
 */
class Application_Model_Mapper_Asset implements Application_Model_Mapper_Abstract
{
    private $assetDbTable;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // TODO: Implement __construct() method.
        $this->assetDbTable = new Application_Model_DbTable_Asset();
    }

    /**
     * Insert object
     * @param unknown $obj
     */
    public function insert($obj)
    {
        // TODO: Implement insert() method.
    }


    /**
     * @param unknown $obj
     */
    public function update($obj)
    {
        // TODO: Implement update() method.
    }

    /**
     * Delete object
     * @param unknown $obj
     */
    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }


    /**
     * @param int $id
     * @return Application_Model_Asset
     */
    public function findOneBy($id)
    {
        // TODO: Implement findOneBy() method.
        $resultQuery = $this->assetDbTable->select()->where("id=?", $id);
        $row = $this->assetDbTable->fetchRow($resultQuery)->toArray();

        if ($row != null) {
            $objAsset = new Application_Model_Asset();
            $objAsset->createFromDbTable($row);

            $assetTypeMapper = new Application_Model_Mapper_AssetType();
            $objAsset->setObjAssetType($assetTypeMapper->findOneBy($row["asset_type_id"]));

            //FALTAN SETEAR LAS PROPIEDADES QUE EL USUARIO PUSO EN VISTA


            return $objAsset;
        }
    }

    /**
     * Find all elements
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
        $assetsArray = array();
        $result = $this->assetDbTable->fetchAll()->toArray();

       $assetTypeMapper = new Application_Model_Mapper_AssetType();

        if ($result != null) {
            foreach ($result as $row) {
                //ASSETS:
                $objAsset = new Application_Model_Asset();
                $objAsset->createFromDbTable($row);

                //AssetType:
                $objAssetType = $assetTypeMapper->findOneBy($row["asset_type_id"]);
                $objAsset->setObjAssetType($objAssetType);

                //FALTAN LAS PROPIEDADES QUE EL USUARIO PUSO EN VISTA

            }
            return $assetsArray;
        }
    }


}