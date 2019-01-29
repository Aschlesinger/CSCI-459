<?php

$db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');



function get_students(){
    global $db;
    $query = 'SELECT * FROM data459';
    $statement = $db->prepare($query);
    $statement->execute();
    $students = $statement->fetchAll();
    $statement->closeCursor();
    return $students;
  }
function delete_student($id) {
      global $db;
      $query = 'DELETE FROM data459
                WHERE id = :id';
      $statement = $db->prepare($query);
      $statement->bindValue(':id', $id);
      $statement->execute();
      $statement->closeCursor();
  }

function add_student($id, $f_name, $l_name) {
    global $db;
    $query = 'INSERT INTO data459
                 (id, f_name, l_name)
              VALUES
                 (:id, :f_name, :l_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':f_name', $f_name);
    $statement->bindValue(':l_name', $l_name);
    $statement->execute();
    $statement->closeCursor();
}

?>
