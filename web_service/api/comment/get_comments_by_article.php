<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');

include_once '../../config/Database.php';
include_once '../../model/Comment.php';

// instantiate DB & connect
$database = new Database();

$db = $database->connect();

$comment = new Comment($db);

$article_id = (isset($_GET['article_id'])) ? $_GET['article_id'] : die();

$result = $comment->getCommentsByArticle($article_id);

$num = $result->rowCount();


if ($num > 0) {
    $comment_array = array();
    $comment_array['article_id'] = $article_id;
    $comment_array['comments'] = array();


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $comment_item = array(
            'comment_id' => $comment_id,
            'comment' => $comment,
            'article_id' => $article_id,
            'email' => $email,
        

        );

        array_push($comment_array['comments'], $comment_item);
    }

    http_response_code(200);

    echo json_encode($comment_array);
} else {
    echo json_encode(
        array('message' => 'no comment found')

    );
}
