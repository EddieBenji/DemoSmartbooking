<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 09:10 AM
 */
class Application_Service_Place
{

    private $placeMapper;

    /**
     *Inicializa la clase, con el mapper que necesita.
     */
    public function __construct()
    {
        $this->placeMapper = new Application_Model_Mapper_Place();
    }

    /**
     * @param Application_Model_Place $obj
     * @return Application_Model_Place
     */
    public function insert($obj)
    {
        return $this->placeMapper->insert($obj);
    }

    /**
     * @param Application_Model_Place $obj
     * @return Application_Model_Place
     */
    public function update($obj)
    {
        return $this->placeMapper->update($obj);
    }

    /**
     * @param Application_Model_Place $obj
     */
    public function delete($obj)
    {
        $this->placeMapper->delete($obj);
    }

    /**
     * @param int $id
     * @return Application_Model_Place
     */
    public function findOneBy($id)
    {
        return $this->placeMapper->findOneBy($id);
    }

    /**
     * regresa toda la información de los lugares que hay en la DB.
     * @return array
     */
    public function findAll()
    {
        return $this->placeMapper->findAll();
    }


}