<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 09:37 AM
 */
class Application_Model_Mapper_AssetType implements Application_Model_Mapper_Abstract
{

    private $assetDbTable;

    public function __construct()
    {
        $this->assetDbTable = new Application_Model_DbTable_Asset();
    }


    /**
     * @param Application_Model_Asset $obj
     * @return Application_Model_Asset
     */
    public function insert($obj)
    {
        // TODO: Implement addAsset() method.
        $data = array(
            "name" => $obj->getName(),
            "division_id" => $obj->getObjDivision()->getId(),
            "division_discipline_id" => $obj->getObjDivision()->getObjDiscipline()->getId(),
        );

        $id = $this->assetDbTable->insert($data);
        $obj->setId($id);

        return $obj;
    }


    /**
     * @param Application_Model_Asset $obj
     * @return Application_Model_Asset
     */
    public function update($obj)
    {
        // TODO: Implement updateInformationOfDiscipline() method.
        $data = array(
            "name" => $obj->getName(),
            "division_id" => $obj->getObjDivision()->getId(),
            "division_discipline_id" => $obj->getObjDivision()->getObjDiscipline()->getId(),
        );

        $id = $this->assetDbTable->update($data, "id = " . $obj->getId());
        $obj->setId($id);

        return $obj;
    }

    /**
     * Delete object
     * @param Application_Model_Asset $obj
     */
    public function delete($obj)
    {
        // TODO: Implement removeDiscipline() method.
        $this->assetDbTable->delete("id=" . $obj->getId());
    }

    /**
     * @param int $id
     * @return Application_Model_Asset
     */
    public function findOneBy($id)
    {
        // TODO: Implement findDisciplineById() method.
        $resultQuery = $this->assetDbTable->select()->where("id=?", $id);
        $row = $this->assetDbTable->fetchRow($resultQuery)->toArray();

        if ($row != null) {
            $objAsset = new Application_Model_Asset();
            $objAsset->createFromDbTable($row);
            //faltan los objetos de division y property

            $divisionMapper = new Application_Model_Mapper_Division();
            $objDivision = $divisionMapper->findOneBy($row["division_id"]);
            $objAsset->setObjDivision($objDivision);

            //PROPIEDADES:
            $propertiesMapper = new Application_Model_Mapper_AssetTypeHasProperty();

            $arrayProps = $propertiesMapper->findPropertiesOfAnAssetById($objAsset->getId());
            $objAsset->setArrayProperties($arrayProps);

            return $objAsset;
        }
    }


    /**
     * @param int $id
     * @return array
     */
    public function findAssetsByDivisionId($id)
    {
        //SELECT * FROM `asset_type` WHERE `division_id` = 2
        $resultQuery = $this->assetDbTable->select()->where("division_id=?", $id)->setIntegrityCheck(false);
        $rows = $this->assetDbTable->fetchAll($resultQuery)->toArray();

        $divisionMapper = new Application_Model_Mapper_Division();
        $propertiesMapper = new Application_Model_Mapper_AssetTypeHasProperty();
        $assetsArray = array();

        if ($resultQuery != null) {
            foreach ($rows as $row) {
                //ASSETS:
                $objAsset = new Application_Model_Asset();
                $objAsset->createFromDbTable($row);

                //DIVISIONS:
                $objDivision = $divisionMapper->findOneBy($row["division_id"]);
                $objAsset->setObjDivision($objDivision);

                //PROPERTIES:
                $arrayProps = $propertiesMapper->findPropertiesOfAnAssetById($objAsset->getId());
                $objAsset->setArrayProperties($arrayProps);
                array_push($assetsArray, $objAsset);
            }
            return $assetsArray;
        }else{
            print("FUE NULO");
            exit;
        }


    }


    /**
     * Find all elements
     * @return array Application_Model_Asset
     */
    public function findAll()
    {
        // TODO: Implement findAllAssets() method.
        $assetsArray = array();
        $result = $this->assetDbTable->fetchAll()->toArray();

        $divisionMapper = new Application_Model_Mapper_Division();
        $propertiesMapper = new Application_Model_Mapper_AssetTypeHasProperty();

        if ($result != null) {
            foreach ($result as $row) {
                //ASSETS:
                $objAsset = new Application_Model_Asset();
                $objAsset->createFromDbTable($row);

                //DIVISIONS:
                $objDivision = $divisionMapper->findOneBy($row["division_id"]);
                $objAsset->setObjDivision($objDivision);

                //PROPERTIES:
                $arrayProps = $propertiesMapper->findPropertiesOfAnAssetById($objAsset->getId());
                $objAsset->setArrayProperties($arrayProps);
                array_push($assetsArray, $objAsset);
            }
            return $assetsArray;
        }
    }


}