<?php

class Comment
{

    private $connection;
    private $table = "comment";


    public $comment_id;
    public $comment;
    public $article_id;
    public $email;


    public function __construct($db)
    {
        $this->connection = $db;
    }


    // create a new comment
    public function createComment()
    {
        $query = 'INSERT INTO ' . $this->table .
            ' SET comment =:comment, email=:email, article_id =:article_id';

        $ps = $this->connection->prepare($query);

        $this->comment = htmlspecialchars(strip_tags($this->comment));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->article_id = htmlspecialchars(strip_tags($this->article_id));


        $ps->bindParam(':comment', $this->comment);
        $ps->bindParam(':email', $this->email);
        $ps->bindParam(':article_id', $this->article_id);


        if ($ps->execute()) {
            return true;
        }
        return false;
    }

    public function getCommentsByArticle($article_id)
    {
        $article_id = htmlspecialchars(strip_tags($article_id));
        $query = 'SELECT * FROM ' . $this->table . ' WHERE article_id = ' . $article_id;

        $ps = $this->connection->prepare($query);

        $ps->execute();


        return $ps;
    }
}
?>
