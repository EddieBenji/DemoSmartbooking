<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }


    /**
     *
     */
    public function indexAction()
    {
        // action body
        $divisionService = new Application_Service_Division();


        $this->view->divisionsOfADiscipline = $divisionService->findDivisionsByDisciplineId(1);
//        $objDiscipline = new Application_Model_Discipline();
//        $objDiscipline->setId(2);
//        $objDiscipline->setName("prueba");
//        $this->view->divisionsOfADiscipline = $divisionService->findDivisionsByDiscipline($objDiscipline);


        $assetService = new Application_Service_Asset();
        $this->view->assets = $assetService->findAssetsByDivisionId(2);

//        $division = new Application_Model_Division();
//        $division->setId(3);
//        $division->setName("Tuberias");

//        $this->view->assets = $assetService->findAssetsByDivision($division);


        $propertyService = new Application_Service_Property();
//        $this->view->propertiesOfAnAsset = $propertyService->findPropertiesOfAnAssetById(2);

        $asset = new Application_Model_AssetType();
        $asset->setName("HOLA");
        $asset->setId(2);
        $propertyService->findPropertiesOfAnAsset($asset);
        $this->view->propertiesOfAnAsset = $asset->getArrayProperties() ;

    }




}

