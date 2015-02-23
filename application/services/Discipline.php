<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 19/02/15
 * Time: 10:20 PM
 */
class Application_Service_Discipline
{


    private $disciplineMapper;

    public function __construct()
    {
        $this->disciplineMapper = new Application_Model_Mapper_Discipline();
    }


    /**
     * Insert object
     * @param Application_Model_Discipline $obj
     * @return Application_Model_Discipline
     */
    public function addDiscipline($obj)
    {
        // TODO: Implement addAsset() method.
        return $this->disciplineMapper->insert($obj);
    }


    /**
     * @param Application_Model_Discipline $obj
     * @return Application_Model_Discipline
     */
    public function updateInformationOfDiscipline($obj)
    {
        // TODO: Implement updateInformationOfDiscipline() method.
        return $this->disciplineMapper->update($obj);
    }

    /**
     * Delete object
     * @param Application_Model_Discipline $obj
     */
    public function removeDiscipline($obj)
    {
        // TODO: Implement removeDiscipline() method.
        $this->disciplineMapper->delete($obj);
    }


    /**
     * @param int $id
     * @return Application_Model_Discipline
     */
    public function findDisciplineById($id)
    {
        // TODO: Implement findDisciplineById() method.

        return $this->disciplineMapper->findOneBy($id);
    }


    /**
     *
     * @return array Application_Model_Discipline
     */
    public function findAllDisciplines()
    {
        return $this->disciplineMapper->findAll();
    }



}