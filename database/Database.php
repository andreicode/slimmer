<?php

namespace Database;


final class Database {

  private function __construct()
  {

  }

  private function __clone()
  {

  }

  protected $db;

  public static function Instance()
  {
    static $inst = null;

    if($inst === null)
    {
      $inst = new Database();
    }

    return $inst;
  }

  public function set($db)
  {
    $this->db = $db;
  }

  public function get()
  {
    $pdo  = new \PDO('mysql:host=' . $this->db['host'] . ';dbname=' . $this->db['dbname'], $this->db['user'], $this->db['pass']);

    $pdo -> setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $pdo -> setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

    return $pdo;
  }
};
