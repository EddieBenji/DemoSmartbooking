<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 10:55 AM
 */
class Application_Model_Mapper_AssetHasProperties implements Application_Model_Mapper_Abstract
{

    private $assetHasPropertiesDbTable;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // TODO: Implement __construct() method.
        $this->assetHasPropertiesDbTable = new Application_Model_DbTable_AssetHasProperties();
    }

    public function insert($obj)
    {
        // TODO: Implement insert() method.
    }


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


    public function findOneBy($id)
    {
        // TODO: Implement findOneBy() method.

    }


    /**
     * @param int $id
     * @return array
     */
    public function findPropertiesOfAnAssetById($id)
    {

        $resultQuery = $this->assetHasPropertiesDbTable->select()->where("asset_id=?", $id)->setIntegrityCheck(false);
        $rows = $this->assetHasPropertiesDbTable->fetchAll($resultQuery)->toArray();
        $propertiesOfAnAsset_array = array();

        $propertiesMapper = new Application_Model_Mapper_Properties();
        if ($rows != null) {

            foreach ($rows as $row) {

                $a_property = $propertiesMapper->findOneBy($row["properties_id"]);
                $a_property->setRequired($row["required"]);
                array_push($propertiesOfAnAsset_array, $a_property);
            }
            return $propertiesOfAnAsset_array;

        }
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
    }
}