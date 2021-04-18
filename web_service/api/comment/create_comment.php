<?php


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include_once '../../config/Database.php';
include_once '../../model/Comment.php';

$database = new Database();

$db = $database->connect();

$comment = new Comment($db);


$data = json_decode(file_get_contents("php://input"));

$comment->comment = $data->comment;
$comment->article_id = $data->article_id;
$comment->user_id = $data->user_id;

if ($comment->createComment()){
    http_response_code(201);
    echo json_encode(array("message" => "comment created"));

} else {
    echo json_encode(array("message" => "comment not created"));
}







?>