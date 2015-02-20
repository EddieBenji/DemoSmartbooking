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

    public function findAll()
    {
        return $this->divisionMapper->findAll();
    }


}