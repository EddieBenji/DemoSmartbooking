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
/*        $this->view->disciplines = $serviceDiscipline->findAll();
        $this->view->disciplines = $serviceDiscipline->findOneBy(1);*/
//        $objToInsert = new Application_Model_Discipline();
//        $objToInsert->setId(10);
//        $objToInsert->setName("sierra");
//        $serviceDiscipline->insert($objToInsert);
        //$serviceDivision = new Application_Service_Division();
        //$this->view->divisions = $serviceDivision->findAll();

        $serviceProperties = new Application_Service_Properties();
        $this->view->properties=$serviceProperties->findAll();




    }


}

