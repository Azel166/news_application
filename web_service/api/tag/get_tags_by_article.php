<?php
// API to list all Caegories from database
// Headers

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=UTF-8');
    
    include_once '../../config/Database.php';
    include_once '../../model/Tag.php';

    // instantiate DB & connect
    $database = new Database();

    $db = $database->connect();

    $tag = new Tag($db);

    $article_id = isset($_GET['article_id']) ? htmlspecialchars(strip_tags($_GET['article_id'])) : die();
    // Article query
    $result = $tag->getTagsByArticle($article_id);

    $num = $result->rowCount();

    if ($num > 0){

        // $tag_array = array();
        // $tag_array['article_id'] = $article_id;
        $tag_array = array();
     

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $tag_item = array(
                'tag_id' => $tag_id,
                'tag' => $tag
            );

        array_push($tag_array, $tag_item);


        }

        http_response_code(200);

        echo json_encode($tag_array);






    } else {
        echo json_encode(
			array('message' => 'no tag found')

		);

    }


?>