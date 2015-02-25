<?php

/**
 * Created by PhpStorm.
 * User: equipo1
 * Date: 24/02/2015
 * Time: 10:17 AM
 */
class Application_Model_Mapper_AssetHasProperty implements Application_Model_Mapper_Abstract
{

    private $assetHasPropertyMapper;


    /**
     * Default constructor
     */
    public function __construct()
    {
        // TODO: Implement __construct() method.
        $this->assetHasPropertyMapper = new Application_Model_DbTable_AssetHasProperty();
    }


    public function insert($obj)
    {
        // TODO: Implement insert() method.
    }


    public function update($obj)
    {
        // TODO: Implement update() method.
    }


    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }


    public function findOneBy($id)
    {
        // TODO: Implement findOneBy() method.
    }

    /**
     * Find all elements
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function findPropertiesOfAnAssetById($id){
        $resultQuery = $this->assetHasPropertyMapper->select()->where("asset_id=?", $id)->setIntegrityCheck(false);

        $rows = $this->assetHasPropertyMapper->fetchAll($resultQuery)->toArray();
        $propertiesOfAnAsset_array = array();

        $propertiesMapper = new Application_Model_Mapper_Property();
        if ($rows != null) {
            foreach ($rows as $row) {

                $a_property = $propertiesMapper->findOneBy($row["property_id"]);
                $a_property->setData($row["data"]);
                array_push($propertiesOfAnAsset_array, $a_property);
            }

            return $propertiesOfAnAsset_array;
        }
    }

    public function findAnswersOfAnAssetById($id){
        //esta tabla en la BD, tiene:
        //asset_id, property_id, data

        $resultQuery = $this->assetHasPropertyMapper->select()->where("asset_id=?", $id)->setIntegrityCheck(false);

        $rows = $this->assetHasPropertyMapper->fetchAll($resultQuery)->toArray();
        $answersOfAnAsset_array = array();

        $propertiesMapper = new Application_Model_Mapper_Property();
        $a_answer = new Application_Model_Answer();
        if ($rows != null) {
            foreach ($rows as $row) {

                $a_property = $propertiesMapper->findOneBy($row["property_id"]);
                //$a_property->setData($row["data"]);
                $a_answer->setObjProperty($a_property);
                $a_answer->setData($row["data"]);

                array_push($answersOfAnAsset_array, $a_answer);
            }

            return $answersOfAnAsset_array;
        }

    }


}