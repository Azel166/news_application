<?php

$tag_id = $_GET['tag_id'];
$urlTag = 'http://localhost/news_application/web_service/api/article/get_articles_by_tag.php?tag_id='.$tag_id;

$newsTag = curl_init($urlTag);
curl_setopt($newsTag, CURLOPT_RETURNTRANSFER, true);
$responseTag = curl_exec($newsTag);

$resultTag = json_decode($responseTag, true);
$tag = $resultTag['tag'];
// $resultTag = $resultTag['articles'];

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">

<!--================ Start head Area =================-->
<?php include('includes/head.php'); ?>

<!--================ End head Area =================-->

<body>

    <!--================ Start header Top Area =================-->
    <?php include('includes/top-header.php'); ?>

    <!--================ End header top Area =================-->

    <!-- Start header Menu Area -->
    <?php include('includes/header.php'); ?>

    <!-- End header Menu Area -->


    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>News by Tag: </br><?php echo $tag?></h2>
                       
                    </div>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="contact.php">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->


    <!--================ Lastest News Area =================-->
    <section class="blog_area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php foreach ($resultTag['articles'] as $keyC => $valueC) : ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="img/articles/<?php echo $valueC['image']; ?>" alt="">
                                    <a href="#" class="blog_item_date">
                                        <?php $date = strtotime($valueC['date_created']); ?>
                                        <?php
                                        $day = date('d', $date);
                                        $mon_num = date('m', $date);
                                        $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                        $yr = date('Y', $date);
                                        ?>
                                        <h3><?php echo  $day ?></h3>
                                        <p><?php echo $mon  ?></p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href='single_article.php?article_id=<?php echo $valueC['article_id']; ?>'>
                                        <h2><?php echo $valueC['title']; ?></p>
                                        </h2>
                                    </a>
                                    <p><?php echo $valueC['short_intro']; ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="far fa-user"></i> <?php echo $valueC['author']; ?></a></li>
                                        <li><a href="news_by_category.php?category_id=<?php echo $valueC['category_id']; ?>"><i class="far fa-list-alt"></i> <?php echo $valueC['category_name']; ?></a></li>

                                    </ul>
                                </div>
                            </article>
                        <?php endforeach; ?>
                        <!--================ End of articles Area =================-->

                        <!--================ Pagination =================-->


        
                    </div>
                </div>

                <!--================ Right Side Bar =================-->
                <?php include('includes/right_side_bar_tag.php'); ?>



    <!-- ================ start footer Area ================= -->
    <?php include('includes/footer.php'); ?>

    <!-- ================ End footer Area ================= -->

</body>

</html>