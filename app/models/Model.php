<?php

namespace Model;

use Database\Database as Database;


abstract class Model {

  protected $table;
  protected $app;
  protected $db;
  protected $query;
  protected $select;
  protected $where;

  public function __construct() {
    $this->setTableName();
    $this->db = Database::Instance()->get();
  }

  public function setTableName() {
    $this->table = strpos($name = get_called_class(),'\\') !== FALSE ? strtolower(array_pop(explode("\\",$name))) : strtolower($name);
  }

  public function query($string) {
    return $this->db->query($string)->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function all($string) {
    return $this->db->query("SELECT * FROM " . $this->table)->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function insert($string) {
    return $this->db->query($string)->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function select($args) {
    for($i = 0; $i < count($args); $i++)
    {
      $select
    }
  }

  public function where($arg1, $op, $arg2) {
    $this->where = $arg1 . $op . "'" . $arg2 . "'";
  }

  public function get() {
    $result = $this->db->query(
    "SELECT " . $this->select ? $this->select : "*"  .
    " FROM " . $this->where ? $this->where : "")
    ->fetchALl(\PDO::FETCH_ASSOC);

    $this->select = '';
    $this->where = '';
  }

}
