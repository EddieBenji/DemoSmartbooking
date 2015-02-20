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
            "place_id"=>$obj->getObjPlace()->getId(),
            "x"=>$obj->getX(),
            "y"=>$obj->getY(),
            "z"=>$obj->getZ()
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
            "place_id"=>$obj->getObjPlace()->getId(),
            "x"=>$obj->getX(),
            "y"=>$obj->getY(),
            "z"=>$obj->getZ()
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
            //faltan los objetos de division, place y properties

            $disciplineMapper = new Application_Model_Mapper_Division();
            $objDivision = $disciplineMapper->findOneBy($row["division_id"]);
            $objAsset->setObjDivision($objDivision);

            $placeMapper = new Application_Model_Mapper_Place();
            $objPlace = $placeMapper->findOneBy($row["place_id"]);

            $objAsset->setObjPlace($objPlace);

            //FALTAN PROPIEDADES

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