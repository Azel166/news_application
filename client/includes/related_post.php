<?php
$article_array = array();
foreach ($result as $key => $value) :
    $article_id = $value['article_id'];
    $urlR = "http://localhost:8080/news_application/web_service/api/article/get_related_articles.php?id=$article_id";
    $article = curl_init($urlR);
    curl_setopt($article, CURLOPT_RETURNTRANSFER, true);
    $responseR = curl_exec($article);
    $resultR = json_decode($responseR, true);
    $article_array = array_merge($article_array, $resultR);
endforeach;
$i = 0;
?>

<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Recent Post</h3>

    <?php foreach ($article_array as $keyA => $valueA) :?>
            <div class="media post_item">
                <img src="img/blog/popular-post/post1.jpg" alt="post">
                <div class="media-body">
                    <a href="#">
                        <h3><?php echo $value['title']; ?>.</h3>
                    </a>
                    <p>January 12, 2019</p>
                </div>
            </div>

        <?php if (++$i == 4) break;?>

    <?php endforeach; ?>
</aside>