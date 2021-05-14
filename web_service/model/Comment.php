<?php

class Comment{

    private $connection;
    private $table = "comment";


    public $comment_id;
    public $comment;
    public $article_id;
    public $email;
    public $time;


    public function __construct($db){
        $this->connection = $db;
    }


    // create a new comment
    public function createComment(){
        $query = 'INSERT INTO '.$this->table.
        ' SET comment =:comment, article_id =:article_id, email=:email';

        $ps = $this->connection->prepare($query);

        $this->comment = htmlspecialchars(strip_tags($this->comment));
        $this->article_id = htmlspecialchars(strip_tags($this->article_id));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->time = htmlspecialchars(strip_tags($this->time));


        $ps->bindParam(':comment', $this->comment);
        $ps->bindParam(':article_id', $this->article_id);
        $ps->bindParam(':email', $this->email);

        if($ps->execute()){
            return true;
        } else {
            return false;
        }

    }

    public function getCommentsByArticle($article_id){
        $article_id = htmlspecialchars(strip_tags($article_id));
        $query = 'SELECT * FROM '.$this->table.' WHERE article_id = '.$article_id;

        $ps = $this->connection->prepare($query);

        $ps->execute();


        return $ps;


    }




}
?>