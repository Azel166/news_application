<?php
$article_id = $_GET['article_id'];
$url = 'http://localhost:8080/news_application/web_service/api/article/get_article.php?article_id=' . $article_id;

$news = curl_init($url);
curl_setopt($news, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($news);

$result = json_decode($response, true);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<section class="blog_area single-post-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="img/articles/<?php echo $result['image']; ?>" alt="">
                    </div>

                    <div class="blog_details">
                        <h2><?php echo $result['title']; ?></h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#author"><i class="far fa-user" ></i> <?php echo $result['author']; ?></a></li>
                        </ul>
                        <div class="quote-wrapper">
                            <div class="quotes">
                                <?php echo $result['title']; ?>
                            </div>
                        </div>
                            <p class="excert"><?php echo( $result['content']); ?></p>

                 

                    </div>
                </div>
                


                <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="img/author.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4><?php echo( $result['author']); ?></h4>
                            </a>
                            <p><?php echo( $result['author']); ?> from Les Nouvelles</p>
                        </div>
                    </div>
                </div>