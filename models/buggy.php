<?php
class BuggyModel
{

  // Connection instance
  private $connection;

  // table name
  private $table_name = "buggy";

  // table columns
  public $id;
  public $sku;
  public $barcode;
  public $name;
  public $price;
  public $unit;
  public $quantity;
  public $minquantity;
  public $createdAt;
  public $updatedAt;
  public $family_id;
  public $location_id;

  public function __construct($connection)
  {
    $this->connection = $connection;
  }

  //C
  public function create()
  { }
  //R
  public function getAll()
  {
    $query = "SELECT * FROM $this->table_name";
    $stmt = $this->connection->query($query);

    return $stmt;
  }
  //U
  public function update()
  { }
  //D
  public function delete()
  { }
}
