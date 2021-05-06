<?php

class Category {

private $connection;
private $table = "category";

public $category_id;
public $category_name;
public $image;


public function __construct($db){
    $this->connection = $db;
}


public function getAllCategories(){

    $query = 'SELECT * FROM '.$this->table;

    $ps = $this->connection->prepare($query);

    $ps->execute();

    return $ps;
}



}





?>