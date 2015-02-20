<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 08:35 AM
 */
class Application_Service_Properties
{

    private $propertiesMapper;

    public function __construct()
    {
        $this->propertiesMapper = new Application_Model_Mapper_Properties();
    }

    public function insert($obj)
    {
        return $this->propertiesMapper->insert($obj);
    }

    public function update($obj)
    {

        return $this->propertiesMapper->update($obj);
    }

    public function delete($obj)
    {
        return $this->propertiesMapper->delete($obj);
    }

    public function findOneBy($id)
    {
        return $this->propertiesMapper->delete($id);
    }


    public function findAll()
    {
        return $this->propertiesMapper->findAll();
    }


}