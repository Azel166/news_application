<?php
// API to list all Caegories from database
// Headers

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=UTF-8');
    
    include_once '../../config/Database.php';
    include_once '../../model/Category.php';

    // instantiate DB & connect
    $database = new Database();

    $db = $database->connect();

    $category = new Category($db);

    // Article query
    $result = $category->getAllCategories();

    $num = $result->rowCount();

    if ($num > 0){

        $category_array = array();
        

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $category_item = array(
                'category_id' => $category_id,
                'category_name' => $category_name ,
                'category_desc' => $category_desc ,

                'image' => $image
            );

        array_push($category_array, $category_item);


        }

        http_response_code(200);

        echo json_encode($category_array);






    } else {
        echo json_encode(
			array('message' => 'no category found')

		);

    }


?>