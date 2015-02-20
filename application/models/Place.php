<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 08:57 AM
 */

class Application_Model_Place extends Application_Model_Abstract {

    private $id;
    private $name;
    private $img;

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
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
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

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }




}