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

public function getTagsByArticle($article_id){
    $article_id = htmlspecialchars(strip_tags($article_id));

    $query = 'SELECT * FROM '.$this->table.'  t INNER JOIN article_tag art ON t.tag_id = art.tag_id WHERE art.article_id = '.$article_id;

    $ps = $this->connection->prepare($query);

    $ps->execute();

    return $ps;
}



}





?>