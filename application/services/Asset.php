<?php
/**
 * Created by PhpStorm.
 * User: equipo1
 * Date: 24/02/2015
 * Time: 09:40 AM
 */

class Application_Service_Asset {

    private $assetMapper ;

    function __construct()
    {
        $this->assetMapper = new Application_Model_Mapper_Asset();
    }

    /**
     * @param int $id
     * @return Application_Model_Asset
     */
    public function findAssetById($id){
        return  $this->assetMapper->findOneBy($id);
    }


}