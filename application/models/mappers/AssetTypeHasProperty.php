<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 10:55 AM
 */
class Application_Model_Mapper_AssetTypeHasProperty implements Application_Model_Mapper_Abstract
{

    private $assetTypeHasPropertyDbTable;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // TODO: Implement __construct() method.
        $this->assetTypeHasPropertyDbTable = new Application_Model_DbTable_AssetTypeHasProperty();

    }

    public function insert($obj)
    {
        // TODO: Implement addAsset() method.
    }


    public function update($obj)
    {
        // TODO: Implement updateInformationOfDiscipline() method.
    }

    /**
     * Delete object
     * @param unknown $obj
     */
    public function delete($obj)
    {
        // TODO: Implement removeDiscipline() method.
    }


    public function findOneBy($id)
    {
        // TODO: Implement findDisciplineById() method.

    }


    /**
     * @param int $id
     * @return array
     */
    public function findPropertiesOfAnAssetTypeById($id)
    {
        $resultQuery = $this->assetTypeHasPropertyDbTable->select()->where("asset_type_id=?", $id)->setIntegrityCheck(false);
        $rows = $this->assetTypeHasPropertyDbTable->fetchAll($resultQuery)->toArray();
        $propertiesOfAnAsset_array = array();

        $propertiesMapper = new Application_Model_Mapper_Property();
        if ($rows != null) {
            foreach ($rows as $row) {
                $a_property = $propertiesMapper->findOneBy($row["property_id"]);
                $a_property->setRequired($row["required"]);
                array_push($propertiesOfAnAsset_array, $a_property);
            }
            return $propertiesOfAnAsset_array;
        }
    }

    public function findAll()
    {
        // TODO: Implement findAllAssets() method.
    }
}