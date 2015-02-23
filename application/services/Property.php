<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 08:35 AM
 */
class Application_Service_Property
{

    private $propertyMapper;

    public function __construct()
    {
        $this->propertyMapper = new Application_Model_Mapper_Property();
    }

    public function insert($obj)
    {
        return $this->propertyMapper->insert($obj);
    }

    public function update($obj)
    {

        return $this->propertyMapper->update($obj);
    }

    public function delete($obj)
    {
        $this->propertyMapper->delete($obj);
    }

    public function findOneBy($id)
    {
        return $this->propertyMapper->findOneBy($id);
    }


    public function findAll()
    {
        return $this->propertyMapper->findAll();
    }


}