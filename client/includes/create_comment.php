
<?php
  $data = array('email' => $_POST['email'], 'comment' => $_POST['comment'], 'article_id' => $_POST['article_id']);

  // echo $data;
  $data_string = json_encode($data);
  $article_id= $_POST['article_id'];
    $curl = curl_init('http://localhost/news_application/web_service/api/comment/create_comment.php');
                        
    
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );
    
    $response = curl_exec($curl);
    echo $data_string, $response;
    curl_close($curl);
    header("Location: http://localhost/news_application/client/single_article.php?article_id={$article_id}");
    ?>

