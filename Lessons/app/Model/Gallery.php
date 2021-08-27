<?php


namespace App\Model;


use Common\Database\DBConnector;
class Gallery extends AbstractModel
{
    private $dbConnect;

    public function __construct()
    {
        $connect = new DbConnector();
        $this->dbconnector = $connect->connect();

    }

    public function getAllTitle(): array
    {
        $sql = 'SELECT * FROM gallery';
        $result = $this->dbconnector->query($sql);
        return $result->fetchAll();
    }
}
