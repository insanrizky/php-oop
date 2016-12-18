<?php

namespace Model;

use Model\Database;

class User extends Database{

  private $table = 'user';

  public function __construct(){
    parent::__construct();
  }

  public function save($input){
    $sql = "INSERT INTO $this->table VALUES('', '$input[name]', '$input[username]', '$input[password]')";
    $query = $this->con->prepare($sql);
    return $query->execute();
  }

  public function update($input){
    $sql = "UPDATE $this->table SET name='$input[name]', username='$input[username]', password='$input[password]' WHERE id='$input[id]'";
    $query = $this->con->prepare($sql);
    return $query->execute();
  }

  public function getAll(){
    $query = $this->con->prepare("SELECT * FROM $this->table");
    $query->execute();
    return $query->fetchAll(\PDO::FETCH_OBJ);
  }

  public function getById($id){
    $query = $this->con->prepare("SELECT * FROM $this->table WHERE id=$id");
    $query->execute();
    return $query->fetch(\PDO::FETCH_OBJ);
  }

  public function delete($id){
    $sql = "DELETE FROM $this->table WHERE id='$id'";
    $query = $this->con->prepare($sql);
    return $query->execute();
  }
}
