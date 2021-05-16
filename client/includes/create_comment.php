  
<?php
$data = array('comment' => $_POST['comment'],'email' => $_POST['email'],'article_id' => $_POST['article_id']);
$data_string = json_encode($data);
$article_id = $_POST['article_id'];
$curl = curl_init('hhttp://localhost:8080/news_application/web_service/api/comment/create_comment.php');

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt(
  $curl,
  CURLOPT_HTTPHEADER,
  array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string)
  )
);

$response = curl_exec($curl);
echo $data_string, $response;
curl_close($curl);
header("Location: http://localhost:8080/news_application/web_service/api/article/get_article.php?article_id={$article_id}");
?>