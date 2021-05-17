<?php
// API to list all Articles from database
// Headers

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=UTF-8');
    
    include_once '../../config/Database.php';
    include_once '../../model/Article.php';
    include_once '../../model/Tag.php';

    // instantiate DB & connect
    $database = new Database();

    $db = $database->connect();

    $article = new Article($db);
    $tagg = new Tag($db);


    $tag_id = isset($_GET['tag_id']) ? htmlspecialchars(strip_tags($_GET['tag_id'])) : die();




    $tagg->getTagById($tag_id);
    
    // Article query
    $result = $article->getArticlesByTag($tag_id);

    $num = $result->rowCount();

    if ($num > 0){

        $tag_array = array();
        $article_array['tag_id'] = $tag_id;
        $article_array['tag'] = $tagg->tag;
        $article_array['articles'] = array();

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
                'category_id' => $category_id,
                'category_name' => $category_name

            );

        array_push($article_array['articles'], $article_item);


        }

        http_response_code(200);

        echo json_encode($article_array);






    } else {
        echo json_encode(
			array('message' => 'no Article found')

		);

    }


?>