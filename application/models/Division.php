<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 19/02/15
 * Time: 10:58 PM
 */

class Application_Model_Division extends Application_Model_Abstract{

    private $objDiscipline;
    private $id;
    private $name;

    /**
     * @param mixed $objDiscipline
     */
    public function setObjDiscipline($objDiscipline)
    {
        $this->objDiscipline = $objDiscipline;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getObjDiscipline()
    {
        return $this->objDiscipline;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }






}