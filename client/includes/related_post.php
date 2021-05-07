<?php
$article_array = array();
foreach ($result as $key => $value) :
    $article_id = $value['article_id'];
    $relatedUrl = "http://localhost:8080/news_application/web_service/api/article/get_related_articles.php?id=$article_id";
    $articleRelated = curl_init($relatedUrl);
    curl_setopt($articleRelated, CURLOPT_RETURNTRANSFER, true);
    $responseR = curl_exec($articleRelated);
    $resultR = json_decode($responseR, true);
    $article_array = array_merge($article_array, $resultR);
endforeach;
$i = 0;
?>

<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Recent Post</h3>

    <?php foreach ($article_array as $keyA => $valueA) : ?>
        <div class="media post_item">
            <img src="img/articles/<?php echo $value['image']; ?>" alt="post" width="70" height="50">
            <div class="media-body">
                <a href="#">
                    <h3><?php echo $value['title']; ?>.</h3>
                </a>
                <?php $date = strtotime($value['date_created']); ?>
                <?php
                $day = date('d', $date);
                $mon_num = date('m', $date);
                $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                $yr = date('Y', $date);
                ?>
                <p> <?php echo $mon  ?> <?php echo  $day ?>  <?php echo $yr  ?> </p>
            </div>
        </div>

        <?php if (++$i == 4) break; ?>

    <?php endforeach; ?>
</aside>