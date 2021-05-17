<?php
$article_id = $_GET['article_id'];
$url = 'http://localhost:8080/news_application/web_service/api/article/get_article.php?article_id=' . $article_id;

$news = curl_init($url);
curl_setopt($news, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($news);

$result = json_decode($response, true);

$urlTag = 'http://localhost:8080/news_application/web_service/api/tag/get_tags_by_article.php?article_id=' . $article_id;

$tag = curl_init($urlTag);
curl_setopt($tag, CURLOPT_RETURNTRANSFER, true);
$responseTag = curl_exec($tag);

$resultTag = json_decode($responseTag, true);

$urlRelated = 'http://localhost:8080/news_application/web_service/api/article/get_related_articles.php?article_id=' . $article_id;

$related = curl_init($urlRelated);
curl_setopt($related, CURLOPT_RETURNTRANSFER, true);
$responseRelated = curl_exec($related);

$resultRelated = json_decode($responseRelated, true);
$i = 0;


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
                            <li><a href=""><i class="far fa-user"></i> <?php echo $result['author']; ?></a></li>
                            <li><a href="news_by_category.php?category_id=<?php echo $result['category_id']; ?>"><i class="far fa-list-alt"></i> <?php echo $result['category_name']; ?></a></li>
                            <a href="#" class="blog_item_date">
                                <?php $date = strtotime($result['date_created']); ?>
                                <?php
                                $day = date('d', $date);
                                $mon_num = date('m', $date);
                                $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                $yr = date('Y', $date);
                                ?>
                            </a>
                            <li><a href=""><i class="far far fa-calendar"></i> <?php echo  $day, ' ', $mon, ', ', $yr ?></a></li>


                        </ul>
                        <div class="quote-wrapper">
                            <div class="quotes">
                                <?php echo $result['short_intro']; ?>
                            </div>
                        </div>
                        <p class="excert"><?php echo ($result['content']); ?></p>
                    </div>

                </div>
                <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="img/author.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4><?php echo ($result['author']); ?></h4>
                            </a>
                            <p><?php echo ($result['author']); ?> from Les Nouvelles</p>
                        </div>
                    </div>
                </div>


                <div class="blog-author ">
                    <h4>Tag</h4>
                    <div class="button-group">
                        <?php foreach ($resultTag as $keyT => $valueT) : ?> <a href="news_by_tag.php?tag_id=<?php echo $valueT['tag_id']; ?>" class="genric-btn primary-border circle"><?php echo $valueT['tag']; ?></a>
                        <?php endforeach ?>
                    </div>
                    <div class="navigation-area">
                        <div class="col-lg-12 col-sm-8 mt-sm-30 typo-sec">
                            <h3 class="mb-20 title_color">Related Post</h3>
                            <div class="">
                                <ul class="unordered-list">
                                    <?php foreach ($resultRelated as $keyR => $valueR) : ?>
                                        <li> <a href='single_article.php?article_id=<?php echo $valueT['article_id']; ?>'>
                                                <p> <?php echo ($valueR['title']); ?></p>
                                            </a></li>

                                    <?php
                                        if (++$i == 3) break;
                                    endforeach ?>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>