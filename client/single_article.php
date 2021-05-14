

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
                        <h2>News</h2>
                    </div>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="all_news.php">All news</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
   

    <!--================Blog Area =================-->
    <?php include('includes/article.php'); ?>

                    <!--================ Comment List =================-->
                    <?php include('includes/all_comments.php'); ?>
                    
                    <!--================ Create Comment  =================-->
                    <?php include('includes/comment_form.php'); ?>

                    <!--================ Right Side Bar =================-->
                    <?php include('includes/right_side_bar.php'); ?>
                </div>
            </div>
    </section>
    <!--================Blog Area end =================-->

    <!-- ================ Instargram Area Starts ================= -->


    <!-- ================ Instargram Area End ================= -->


    <!-- ================ start footer Area ================= -->
    <?php include('includes/footer.php'); ?>

    <!-- ================ End footer Area ================= -->
</body>

</html>