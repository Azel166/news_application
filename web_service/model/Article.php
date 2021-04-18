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

//
public function getAllArticles(){

    $query = 'SELECT * FROM '.$this->table;

    $ps = $this->connection->prepare($query);

    $ps->execute();

    return $ps;

}

public function getArticlesByCategory($category_id){
    $tag_id = htmlspecialchars(strip_tags($category_id));
    $query = 'SELECT * FROM '.$this->table.' WHERE category_id = '.$category_id;

    // prepare statements
    $ps = $this->connection->prepare($query);

    $ps->execute();

    return $ps;
}

public function getArticlesByTag($tag_id){
    $tag_id = htmlspecialchars(strip_tags($tag_id));
    $query = 'SELECT * FROM '.$this->table.' a INNER JOIN article_tag AS art ON a.article_id = art.article_id WHERE art.tag_id = '.$tag_id;

    // prepare statements
    $ps = $this->connection->prepare($query);

    $ps->execute();

    return $ps;
    

    
    
}

public function getRelatedArticles(){

}

// get a single article by its id
public function getArticle($article_id){

    $query = 'SELECT * FROM '.$this->table.
    ' WHERE article_id = '.$article_id.' LIMIT 0,1';

    $ps = $this->connection->prepare($query);


    $ps->execute();

    $row = $ps->fetch(PDO::FETCH_ASSOC);

    $this->article_id = $row['article_id'];
    $this->title = $row['title'];
    $this->short_intro = $row['short_intro'];
    $this->author = $row['author'];
    $this->content = $row['content'];
    $this->date_created = $row['date_created'];
    $this->category_id = $row['category_id'];
}

}


?>