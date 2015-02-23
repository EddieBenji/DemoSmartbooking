<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 19/02/15
 * Time: 11:03 PM
 */
class Application_Service_Division
{

    private $divisionMapper;

    public function __construct()
    {
        $this->divisionMapper = new Application_Model_Mapper_Division();
    }

    public function insert($obj)
    {
        return $this->divisionMapper->insert($obj);
    }

    public function update($obj)
    {
        return $this->divisionMapper->update($obj);
    }

    public function delete($obj)
    {
        $this->divisionMapper->delete($obj);
    }

    public function findOneBy($id)
    {
        return $this->divisionMapper->findOneBy($id);
    }

    public function findAll()
    {
        return $this->divisionMapper->findAll();
    }


    /**
     * @param int $id
     * @return array Application_Model_Division
     */
    public function findDivisionsByDisciplineId($id)
    {
        return $this->divisionMapper->findDivisionsByDisciplineId($id);
    }

    /**
     * @param Application_Model_Discipline $obj
     * @return array Application_Model_Division
     */
    public function findDivisionsByDiscipline($obj){

        return $this->divisionMapper->findDivisionsByDisciplineId($obj->getId());
    }


}