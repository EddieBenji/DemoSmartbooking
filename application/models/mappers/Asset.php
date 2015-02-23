<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 09:37 AM
 */

class Application_Model_Mapper_Asset implements Application_Model_Mapper_Abstract {

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
        // TODO: Implement insert() method.
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
        // TODO: Implement update() method.
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
        // TODO: Implement delete() method.
        $this->assetDbTable->delete("id=" . $obj->getId());
    }

    /**
     * @param int $id
     * @return Application_Model_Asset
     */
    public function findOneBy($id)
    {
        // TODO: Implement findOneBy() method.
        $resultQuery = $this->assetDbTable->select()->where("id=?",$id);
        $row = $this->assetDbTable->fetchRow($resultQuery)->toArray();

        if ($row != null) {
            $objAsset = new Application_Model_Asset();
            $objAsset ->createFromDbTable($row);
            //faltan los objetos de division y property

            $divisionMapper = new Application_Model_Mapper_Division();
            $objDivision = $divisionMapper->findOneBy($row["division_id"]);
            $objAsset->setObjDivision($objDivision);

            //PROPIEDADES:
            $propertiesMapper = new Application_Model_Mapper_AssetTypeHasProperty();

            $arrayProps = $propertiesMapper->findPropertiesOfAnAssetById( $objAsset->getId() );
            $objAsset->setArrayProperties($arrayProps);

            return $objAsset;
        }
    }


     /**
     * Find all elements
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
    }


}