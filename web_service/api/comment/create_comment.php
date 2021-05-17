<?php


include_once '../../config/Database.php';
include_once '../../model/Comment.php';

$database = new Database();

$db = $database->connect();

$comment = new Comment($db);


// get posted data
$data = json_decode(file_get_contents("php://input"));
  
// make sure data is not empty
    $comment->comment = $data->comment;

    $comment->article_id = $data->article_id;
    $comment->email = $data->email;

    if ($comment->createComment()){
        http_response_code(201);
        echo json_encode(
            array('message' => 'Comment created')
        );
    } else {
        echo json_encode(
            array('message' => 'Comment not created')
        );
    }






?>