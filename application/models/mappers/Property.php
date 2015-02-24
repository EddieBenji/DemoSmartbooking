    <?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 20/02/15
 * Time: 08:16 AM
 */

class Application_Model_Mapper_Property  implements Application_Model_Mapper_Abstract{

    private $propertiesDbTable;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // TODO: Implement __construct() method.s
        $this->propertiesDbTable = new Application_Model_DbTable_Property();
    }


    /**
     * Insert object
     * @param unknown $obj
     * @return unknown
     */
    public function insert($obj)
    {
        // TODO: Implement addAsset() method.

        $data = array("name"=>$obj->getName(), "type"=>$obj->getType());

        $id = $this->propertiesDbTable->insert($data);
        $obj->setId($id);

        return $obj;
    }


    public function update($obj)
    {
        // TODO: Implement updateInformationOfDiscipline() method.
        $data = array("name"=>$obj->getName(), "type"=>$obj->getType());

        $id = $this->propertiesDbTable->update($data, "id = ". $obj->getId());
        $obj->setId($id);

        return $obj;
    }

    public function delete($obj)
    {
        // TODO: Implement removeDiscipline() method.
        $this->propertiesDbTable->delete("id = ".$obj->getId());
    }

    /**
     * @param int $id
     * @return Application_Model_Property
     */
    public function findOneBy($id)
    {
        // TODO: Implement findDisciplineById() method.

        $resultQuery = $this->propertiesDbTable->select()->where("id=?",$id);
        $row = $this->propertiesDbTable->fetchRow($resultQuery)->toArray();

        $property = new Application_Model_Property();
        $property->createFromDbTable($row);

        return $property;
    }

    /**
     * Find all elements
     */
    public function findAll()
    {
        // TODO: Implement findAllAssets() method.
        $propertiesArray = array();
        $result = $this->propertiesDbTable->fetchAll()->toArray();

        foreach ($result as $row) {
            $a_property = new Application_Model_Property();
            $a_property->createFromDbTable($row);

            array_push($propertiesArray, $a_property);
        }
        return $propertiesArray;
    }
}