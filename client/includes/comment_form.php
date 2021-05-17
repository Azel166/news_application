<?php
$article_id = $_GET['article_id'];
$url = "http://localhost/news_application/web_service/api/article/get_article.php?article_id=$article_id";

$article = curl_init($url);
curl_setopt($article, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($article);

$result = json_decode($response, true);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<div class="comment-form">
    <h4>Leave a Reply</h4>
    <form class="form-contact comment_form" action="includes/create_comment.php" method="POST" id="commentForm">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea required class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input required class="form-control" name="email" id="email" type="text" placeholder="Email">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="hidden" name="article_id" value="<?php echo $article_id ?>" />
                </div>
            </div>



        </div>
        <div class="form-group">
            <input type="submit" class="button button-contactForm" placeholders="Send Message" />
        </div>
    </form>
</div>
</div>