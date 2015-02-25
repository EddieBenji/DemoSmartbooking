<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 19/02/15
 * Time: 08:36 AM
 */
class Application_Model_Mapper_Division implements Application_Model_Mapper_Abstract
{


    private $divisionDbTable;


    /**
     * Default constructor
     */
    public function __construct()
    {
        // TODO: Implement __construct() method.
        $this->divisionDbTable = new Application_Model_DbTable_Division();
    }

    /**
     * Insert object
     * @param Application_Model_Abstract $obj
     * @return obj
     */
    public function insert($obj)
    {
        //el objeto $obj deberá contener un objeto de tipo discipline

        $data = array(
            "discipline_id" => $obj->getObjDiscipline()->getId(),
            "name" => $obj->getName()
        );

        $id = $this->divisionDbTable->insert($data);
        $obj->setId($id);

        return $obj;
    }

    /**
     * Es necesario que el objeto división tenga encapsulado el objeto disciplina
     * al que está relacionado la divisón;
     * Update object
     * @param Application_Model_Division $obj
     * @return obj
     */
    public function update($obj)
    {
        // TODO: Implement updateInformationOfDiscipline() method.
        $data = array(
            "discipline_id" => $obj->getObjDiscipline()->getId(),
            "name" => $obj->getName()
        );

        $id = $this->divisionDbTable->update($data, "id = " . $obj->getId());
        $obj->setId($id);
        return $obj;
    }

    /**
     * Delete object
     * @param Application_Model_Division $obj
     */
    public function delete($obj)
    {
        // TODO: Implement removeDiscipline() method.
        $this->divisionDbTable->delete("id=" . $obj->getId());
    }

    /**
     * Find one by
     * @param int $id
     * @return Application_Model_Division
     */
    public function findOneBy($id)
    {
        // TODO: Implement findDisciplineById() method.
        $query = $this->divisionDbTable->select()->from("division")->where("id = ?", $id);
        $row = $this->divisionDbTable->fetchRow($query)->toArray();

        if ($row != null) {
            $objDivision = new Application_Model_Division();
            $objDivision->createFromDbTable($row);

            $disciplineMapper = new Application_Model_Mapper_Discipline();
            $discipline = $disciplineMapper->findOneBy($row["discipline_id"]);

            $objDivision->setObjDiscipline($discipline);

            return $objDivision;
        }
    }


    /**
     * Find all elements
     */
    public function findAll()
    {
        // TODO: Implement findAllAssets() method.
        $divisionArray = array();
        $rows = $this->divisionDbTable->fetchAll()->toArray();

        $disciplineMapper = new Application_Model_Mapper_Discipline();
        foreach ($rows as $row) {

            $a_division = new Application_Model_Division();
            $a_division->createFromDbTable($row);

            $theDiscipline = $disciplineMapper->findOneBy($row["discipline_id"]);
            $a_division->setObjDiscipline($theDiscipline);

            array_push($divisionArray, $a_division);
        }
        return $divisionArray;
    }


    /**
     * Encuentra las divisiones que están relacionadas a una disciplina
     * @param int $id
     * @return array Application_Model_Division
     */
    public function findDivisionsByDisciplineId($id)
    {

        $resultQuery = $this->divisionDbTable->select()->where("discipline_id=?", $id)->setIntegrityCheck(false);
        $rows = $this->divisionDbTable->fetchAll($resultQuery)->toArray();


        $divisions_array = array();
        $objDivision = new Application_Model_Division();
        $disciplineMapper = new Application_Model_Mapper_Discipline();

        if ($rows != null) {
            foreach ($rows as $row) {
                $objDivision->createFromDbTable($row);

                $discipline = $disciplineMapper->findOneBy($row["discipline_id"]);
                $objDivision->setObjDiscipline($discipline);

                array_push($divisions_array, $objDivision);
            }
            return $divisions_array;
        }
    }


}