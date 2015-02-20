<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 10:29 AM
 */
class Application_Service_Asset
{


    private $assetMapper;

    public function __construct()
    {
        $this->assetMapper = new Application_Model_Mapper_Asset();
    }

    /**
     * @param $id
     * @return Application_Model_Asset
     */
    public function findOneBy($id){
        return $this->assetMapper->findOneBy($id);
    }


}