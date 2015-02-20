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
     * @param unknown $obj
     * @return unknown
     */
    public function insert($obj)
    {
        // TODO: Implement insert() method.
        return $this->disciplineMapper->insert($obj);
    }


    public function update($obj)
    {
        // TODO: Implement update() method.
        return $this->disciplineMapper->update($obj);
    }

    /**
     * Delete object
     * @param unknown $obj
     */
    public function delete($obj)
    {
        // TODO: Implement delete() method.
        $this->disciplineMapper->delete($obj);
    }


    public function findOneBy($id)
    {
        // TODO: Implement findOneBy() method.

        return $this->disciplineMapper->findOneBy($id);
    }


    public function findAll()
    {
        return $this->disciplineMapper->findAll();
    }


}