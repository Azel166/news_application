<?php
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$url = "http://localhost/news_application/web_service/api/article/get_all_articles.php";

$news = curl_init($url);
curl_setopt($news, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($news);

$result = json_decode($response, true);


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
                        <h2>Lastest News</h2>
                    </div>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="category.php">All news</a>
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
                        <?php foreach ($result as $key => $value) : ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="img/articles/<?php echo $value['image']; ?>" alt="">
                                    <a href="#" class="blog_item_date">
                                        <?php $date = strtotime($value['date_created']); ?>
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
                                    <a class="d-inline-block" href='single_article.php?article_id=<?php echo $value['article_id']; ?>'>
                                        <h2><?php echo $value['title']; ?></p>
                                        </h2>
                                    </a>
                                    <p><?php echo $value['short_intro']; ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="far fa-user"></i> <?php echo $value['author']; ?></a></li>
                                        <li><a href='news_by_category.php?category_id=<?php echo $value['category_id']; ?>'><i class="far fa-list-alt" ></i> <?php echo $value['category_name']; ?></a></li>

                                    </ul>
                                </div>
                            </article>
                        <?php endforeach; ?>
                        <!--================ End of articles Area =================-->

                        <!--================ Pagination =================-->


                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!--================ Right Side Bar =================-->
                <?php include('includes/right_side_bar.php'); ?>



    <!-- ================ start footer Area ================= -->
    <?php include('includes/footer.php'); ?>

    <!-- ================ End footer Area ================= -->
    <script type="text/javascript">
    const active = document.querySelector("#nav-all");
    active.classList.add("active");
    </script>

</body>

</html>