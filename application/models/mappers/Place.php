<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 08:59 AM
 */

class Application_Model_Mapper_Place implements Application_Model_Mapper_Abstract{


    private $placeDbTable;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // TODO: Implement __construct() method.
        $this->placeDbTable= new Application_Model_DbTable_Place();
    }


    /**
     *
     * @param Application_Model_Place $obj
     * @return Application_Model_Place
     */
    public function insert($obj)
    {
        // TODO: Implement insert() method.
        $data = array("name"=>$obj->getName(),"img"=>$obj->getImg());

        $id = $this->placeDbTable->insert($data);
        $obj->setId($id);

        return $obj;
    }

    /**
     * @param Application_Model_Place $obj
     * @return Application_Model_Place
     */
    public function update($obj)
    {
        // TODO: Implement update() method.
        $data = array("name"=>$obj->getName(),"img"=>$obj->getImg());

        $id = $this->placeDbTable->update($data, "id = ". $obj->getId());
        $obj->setId($id);

        return $obj;
    }


    /**
     * @param Application_Model_Place $obj
     */
    public function delete($obj)
    {
        // TODO: Implement delete() method.
        $this->placeDbTable->delete("id = ".$obj->getId());
    }


    /**
     * @param int $id
     * @return Application_Model_Place
     */
    public function findOneBy($id)
    {
        // TODO: Implement findOneBy() method.
        $resultQuery = $this->placeDbTable->select()->where("id=?",$id);
        $row = $this->placeDbTable->fetchRow($resultQuery)->toArray();

        $place = new Application_Model_Place();
        $place->createFromDbTable($row);

        return $place;
    }


    /**
     * regresa toda la información de los lugares que hay en la DB.
     * @return array
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
        $placeArray = array();
        $result = $this->placeDbTable->fetchAll()->toArray();
        foreach ($result as $row) {
            $a_place = new Application_Model_Place();
            $a_place->createFromDbTable($row);

            array_push($placeArray, $a_place);
        }
        return $placeArray;
    }
}