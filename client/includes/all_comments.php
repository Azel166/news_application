<?php
$article_id = $_GET['article_id'];
$url = 'http://localhost:8080/news_application/web_service/api/comment/get_comments_by_article.php?article_id=' . $article_id;

$tag = curl_init($url);
curl_setopt($tag, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($tag);

$result = json_decode($response, true);


?>

<div class="comments-area">
    <h4>All Comments</h4>
    <?php
    if ($result['message'] ?? NULL) {
        echo $result['message'];
    } else {
        foreach ($result as $key => $value) :
    ?>

            <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="img/cmt.png" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                <?php echo $value['comment'] ?>
                            </p>

                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                        <a href="#"><?php echo $value['email'] ?></a>
                                    </h5>
                                    <?php $date = strtotime($value['time']); ?>
                                    <?php
                                    $day = date('d', $date);
                                    $mon_num = date('m', $date);
                                    $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                    $yr = date('Y', $date);
                                    $hour = date("h");
                                    $minute = date("i");
                                    ?>

                                    <p class="date"><?php echo  $day, ' ', $mon, ' ', $yr, ' at ', $hour, ': ', $minute  ?> </p>
                                </div>

                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    <?php
        endforeach;
    } ?>
</div>