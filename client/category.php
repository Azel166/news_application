<?php

$url = "http://localhost/news_application/web_service/api/category/get_all_categories.php";

$cate = curl_init($url);
curl_setopt($cate, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cate);

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



    <!--================Fullwidth block Area =================-->


    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Category</h2>
                    </div>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="contact.php">Category</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category  Area Start =================-->

    <section class="category-page area-padding">
        <div class="container">
            <div class="row">
            <?php foreach ($result as $key => $value) : ?>

                    <div class="col-md-6 col-lg-4">
                     <div class="single-category">
                        <div class="thumb">
                            <img class="img-fluid" src="img/category/<?php echo $value['image']; ?>" alt="">
                        </div>
                        <div class="short_details text-center">
                            <a class="d-block" href='news_by_category.php?category_id=<?php echo $value['category_id']; ?>'>
                                <h3><?php echo $value['category_name']; ?></h3>
                            </a>
                            <p><?php echo $value['category_desc']; ?></p>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!--================Category  Area End =================-->

    <!-- ================ Instargram Area Starts ================= -->

    <section class="instagram">
        <div class="row no-gutters">
            <div class="col-2">
                <a href=""><img src="img/instagram/1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/instagram/2.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/instagram/3.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/instagram/4.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/instagram/5.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/instagram/6.jpg" alt=""></a>
            </div>
        </div>
    </section>

    <!-- ================ Instargram Area End ================= -->


    <!-- ================ start footer Area ================= -->
    <?php include('includes/footer.php'); ?>

    <!-- ================ End footer Area ================= -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
    const active = document.querySelector("#nav-cat");
    active.classList.add("active");
    </script>
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>