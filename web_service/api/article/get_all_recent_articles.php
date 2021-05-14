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

    // Article query
    $result = $article->getRecentArticles();

    $num = $result->rowCount();

    if ($num > 0){

        $article_array = array();


        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $article_item = array(
                'article_id' => $article_id,
                'title' => $title,
                'short_intro' => $short_intro,
                'image' => $image,
                'content' => $content,
                'date_created' => $date_created,
                'author' => $author,
                'category_id' => $category_id
            );

        array_push($article_array, $article_item);


        }

        http_response_code(200);

        echo json_encode($article_array);






    } else {
        echo json_encode(
			array('message' => 'no Article found')

		);

    }


?>