<?php

class Tag {

private $connection;
private $table = "tag";

public $tag_id;
public $tag;


public function __construct($db){
    $this->connection = $db;
}


public function getAllTags(){

    $query = 'SELECT * FROM '.$this->table;

    $ps = $this->connection->prepare($query);

    $ps->execute();

    return $ps;
}



}





?>