<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 19/02/15
 * Time: 10:11 PM
 */
class Application_Model_Mapper_Discipline implements Application_Model_Mapper_Abstract
{


    private $disciplineDbTable;


    /**
     * Default constructor
     */
    public function __construct()
    {
        // TODO: Implement __construct() method.
        $this->disciplineDbTable = new Application_Model_DbTable_Discipline();
    }

    /**
     * Insert object
     * @param unknown $obj
     * @return unknown
     */
    public function insert($obj)
    {
        // TODO: Implement insert() method.
        $data = array("name"=>$obj->getName());
        $id = $this->disciplineDbTable->insert($data);
        $obj->setId($id);

        return $obj;
    }


    public function update($obj)
    {
        // TODO: Implement update() method.
        $data = array("name"=>$obj->getName());

        $id = $this->disciplineDbTable->update($data, "id = ". $obj->getId());
        $obj->setId($id);

        return $obj;
    }

    /**
     * Delete object
     * @param unknown $obj
     */
    public function delete($obj)
    {
        // TODO: Implement delete() method.
        $this->disciplineDbTable->delete("id = ".$obj->getId());
    }


    public function findOneBy($id)
    {
        // TODO: Implement findOneBy() method.

        $resultQuery = $this->disciplineDbTable->select()->where("id=?",$id);
        $row = $this->disciplineDbTable->fetchRow($resultQuery)->toArray();

        $discipline = new Application_Model_Discipline();
        $discipline->createFromDbTable($row);

        return $discipline;
    }

    /**
     * Find all elements
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
        $disciplineArray = array();
        $result = $this->disciplineDbTable->fetchAll()->toArray();
        foreach ($result as $row) {
            $a_discipline = new Application_Model_Discipline();
            $a_discipline->createFromDbTable($row);
            array_push($disciplineArray, $a_discipline);
        }
        return $disciplineArray;

    }
}