<?php
$url = "http://localhost:8080/news_application/web_service/api/article/get_all_recent_articles.php";

$news = curl_init($url);
curl_setopt($news, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($news);

$result = json_decode($response, true);
$i = 0;

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

    <!--================Fullwidth block Area =================-->


    <section class="category-page area-padding">
        <div class="container">
            <div class="row">
            <?php foreach ($result as $key => $value) : ?>

                <div class="col-md-6 col-lg-4">
                    <div class="single-category">
                        <div class="thumb">
                            <img class="img-fluid" src="img/articles/<?php echo $value['image']; ?>"  alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">shoes </a>/
                                <a href="#"> March 15, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4><?php echo $value['title']; ?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>05 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                            </div>
                        </div>
                    </div> 
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


    <!-- ================ Instargram Area End ================= -->


    <!-- ================ start footer Area ================= -->
    <?php include('includes/footer.php'); ?>

    <!-- ================ End footer Area ================= -->

</body>

</html>