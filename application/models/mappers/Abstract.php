<?php

/**
 * Created by PhpStorm.
 * User: benji
 * Date: 19/02/15
 * Time: 10:09 PM
 */
interface Application_Model_Mapper_Abstract
{


    /**
     * Default constructor
     */
    public function __construct();

    /**
     * Insert object
     * @param unknown $obj
     */
    public function insert($obj);

    /**
     * Update object
     * @param unknown $obj
     * @return
     * @internal param unknown $id
     */
    public function update($obj);

    /**
     * Delete object
     * @param unknown $obj
     */
    public function delete($obj);

    /**
     * Find one by
     * @param unknown $id
     * @return
     * @internal param string $bandera
     */
    public function findOneBy($id);

    //public function consultarElementos($key,array $values);

    /**
     * Find all elements
     */
    public function findAll();


}