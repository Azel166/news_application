<?php

class Category {

private $connection;
private $table = "category";

public $category_id;
public $category_name;
public $category_desc;

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

public function getCategoryName(){
    $query = 'SELECT category_name
    FROM' .$this->table. 'INNER JOIN article
    ON category.category_id = article.category_id;';
    
    $ps = $this->connection->prepare($query);

    $ps->execute();

    return $ps;
}



}





?>