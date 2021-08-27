<?php


namespace App\Model;

use common\Database\DbConnector;

class Index extends AbstractModel
{
   private $dbconnector;

   public function __construct()
   {
       $connect = new DbConnector();
       $this->dbconnector = $connect->connect();
   }

   public function getAllTitle(): array
   {
        $sql = 'SELECT * FROM index';
        $result = $this->dbconnector->query($sql);
        return $result->fetchAll();
   }
}