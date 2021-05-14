<?php
// API to list all Articles from database
// Headers

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');

include_once '../../config/Database.php';
include_once '../../model/Article.php';

// instantiate DB & connect
$database = new Database();

$db = $database->connect();

$article = new Article($db);

$result = $article->getArticlesByCategory($category_id);
$num = $result->rowCount();
if ($num > 0) {
    $article_array = array();

    // $article_id = (isset($_GET['article_id'])) ? $_GET['article_id'] : die();


    // $article->getArticle($article_id);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $article_item = array(
            "article_id" => $article->article_id,

            'title' => $article->title,
            'short_intro' => $article->short_intro,
            'image' => $article->image,
            'content' =>  $article->content,
            'date_created' => $article->date_created,
            'author' => $article->author,
            'category_id' => $article->category_id



        );
        array_push($article_array, $article_item);
    }
    http_response_code(200);
    echo json_encode($article_item);
} else {
    // No Posts
    echo json_encode(
      array('message' => 'No News Found')
    

    );
}
