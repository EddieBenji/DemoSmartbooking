<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 19/02/15
 * Time: 10:12 PM
 */

class Application_Model_Discipline extends Application_Model_Abstract {

    private $id;
    private $name;

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