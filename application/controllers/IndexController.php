<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }


    public function indexAction()
    {
        // action body
//        $serviceDiscipline = new Application_Service_Discipline();
//        $this->view->disciplines = $serviceDiscipline->findAllAssets();
//        $this->view->disciplines = $serviceDiscipline->findOneBy(1);
//        $objToInsert = new Application_Model_Discipline();
//        $objToInsert->setId(10);
//        $objToInsert->setName("sierra");
//        $serviceDiscipline->insert($objToInsert);
//        $serviceDivision = new Application_Service_Division();
//        $this->view->divisions = $serviceDivision->findAllAssets();

//        $serviceProperties = new Application_Service_Property();
//        $this->view->properties=$serviceProperties->findAllAssets();

//        $placeProperties = new Application_Service_Place();
//        $this->view->places=$placeProperties->findAllAssets();

        $assetService = new Application_Service_Asset();
//        $this->view->assets = $assetService->findAnAssetById(1);
        $this->view->assets = $assetService->findAllAssets();




    }


}

