<?php

class Article {
// db-related attributes
private $connection;
private $table = "article";

public $article_id;
public $title;
public $short_intro;
public $author;
public $content;
public $category_id;
public $date_created;


public function __construct($db){
    $this->connection = $db;
}


public function getAllArticles(){

    $query = 'SELECT * FROM '.$this->table;

    $ps = $this->connection->prepare($query);

    $ps->execute();

    return $ps;

}

}


?>