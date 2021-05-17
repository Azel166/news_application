<?php
$url = "http://localhost/news_application/web_service/api/article/get_all_recent_articles.php";

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

   <section class="fullwidth-block area-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-5">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/index/category1.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                            <a href="news_by_category.php?category_id=1"><?php echo $result[0]['category_name']; ?></a>
                            </div>
                            <a class="d-block" href='single_article.php?article_id=30'>
                                <h4><?php echo $result[0]['title']; ?></h4>
                            </a>
                            <div class="meta-bottom d-flex" >
                            <?php $date = strtotime($result[0]['date_created']); ?>
                                        <?php
                                        $day = date('d', $date);
                                        $mon_num = date('m', $date);
                                        $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                        $yr = date('Y', $date);
                                        ?>
                                <a href="#"><?php echo $mon,' ', $day,', ', $yr, ' ' ?></a>                                <a class="dark_font" href="#">By Alen Mark</a>
                            </div>
                        </div>
                    </div>    
                </div>

                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="single-blog style_two">
                        <div class="thumb">
                            <img class="img-fluid" src="img/index/category3.jpg" alt="">
                        </div>
                        <div class="short_details text-center ">

                            <div class="meta-top d-flex justify-content-center">
                            <a href="news_by_category.php?category_id=3"><?php echo $result[2]['category_name']; ?></a>
                            </div>
                            <a class="d-block" href='single_article.php?article_id=5'>
                                <h4><?php echo $result[2]['title']; ?></h4>
                            </a>
                            <div class="meta-bottom d-flex justify-content-center">
                            <?php $date = strtotime($result[2]['date_created']); ?>
                                        <?php
                                        $day = date('d', $date);
                                        $mon_num = date('m', $date);
                                        $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                        $yr = date('Y', $date);
                                        ?>
                                <a href="#"><?php echo $mon,' ', $day,', ', $yr, ' ' ?></a>  
                                <a class="dark_font" href="#">/ <?php echo $result[0]['author']; ?></a>

                            </div>
                        </div>
                    </div>    
                </div>

                <div class="col-lg-12 col-xl-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-12">
                            <div class="single-blog style-three m_b_30">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/index/category7.jpg" alt="">
                                </div>
                                <div class="short_details">

                                    <div class="meta-top d-flex justify-content-center">
                                    <a href="news_by_category.php?category_id=7"><?php echo $result[3]['category_name']; ?></a>
                                    </div>
                                    <a class="d-block" href='single_article.php?article_id=24'>
                                <h4><?php echo $result[3]['title']; ?></h4>
                            </a>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-12">
                            <div class="single-blog style-three">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/index/category9.jpg" alt="">
                                </div>
                                <div class="short_details">

                                    <div class="meta-top d-flex justify-content-center">
                                    <a href="news_by_category.php?category_id=9"><?php echo $result[5]['category_name']; ?></a>
                                    </div>
                                    <a class="d-block" href='single_article.php?article_id=30'>
                                <h4><?php echo $result[5]['title']; ?></h4>
                            </a>
                                </div>
                            </div>    
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--================Fullwidth block Area end =================-->


    <!--================ Video section start =================-->  

    <div class="video-area background_one area-padding">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>Entertainment News</h3>
                    <p>View entertainment news and videos for the latest movie, music, TV and celebrity headlines</p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-blog video-style">
                        <div class="thumb">
                        <img class="img-fluid" src="img/articles/<?php echo $result[15]['image']; ?>" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                            <a href="news_by_category.php?category_id=4"><?php echo $result[15]['category_name']; ?></a>
                            <?php $date = strtotime($result[15]['date_created']); ?>
                                        <?php
                                        $day = date('d', $date);
                                        $mon_num = date('m', $date);
                                        $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                        $yr = date('Y', $date);
                                        ?>
                                <a href="#"><?php echo $mon,' ', $day,', ', $yr, ' ' ?></a>                            </div>
                            <a class="d-block" href='single_article.php?article_id=8'>
                                <h4><?php echo $result[15]['title']; ?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>05 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div> 

                </div> 

                <div class="col-lg-4">
                    <div class="single-blog video-style small row m_b_30">
                        <div class="short_details ">
                        <img class="img-fluid " src="img/articles/<?php echo $result[20]['image']; ?>" alt="">

                            <div class="meta-top d-flex">
                            <a href="news_by_category.php?category_id=4"><?php echo $result[20]['category_name']; ?></a>
                            </div>
                            <a class="d-block" href='single_article.php?article_id=10'>
                                <h4><?php echo $result[20]['title']; ?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                            <?php $date = strtotime($result[0]['date_created']); ?>
                                        <?php
                                        $day = date('d', $date);
                                        $mon_num = date('m', $date);
                                        $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                        $yr = date('Y', $date);
                                        ?>
                                <a href="#"><i class="ti-time"></i><?php echo $mon,' ', $day?></a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div> 

                    <div class="single-blog video-style small row m_b_30 ">
                        
                        <div class="short_details col-12 col-sm-12">
                            <div class="meta-top d-flex">
                            <a href="news_by_category.php?category_id=4"><?php echo $result[24]['category_name']; ?></a>
                            </div>
                            <a class="d-block" href='single_article.php?article_id=9'>
                                <h4><?php echo $result[24]['title']; ?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                            <?php $date = strtotime($result[0]['date_created']); ?>
                                        <?php
                                        $day = date('d', $date);
                                        $mon_num = date('m', $date);
                                        $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                        $yr = date('Y', $date);
                                        ?>
                                <a href="#"><i class="ti-time"></i><?php echo $mon,' ', $day?></a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--================ Video section end =================-->  


    <!--================ three-block section start =================-->  

    <div class="three-block  area-padding">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>Style News</h3>
                    <p>Brings you the latest coverage on celebrity and entertainment news, beauty and style trends, women's health information and more.</p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-blog style-five">
                        <div class="thumb">
                        <img class="img-fluid " src="img/articles/<?php echo $result[21]['image']; ?>" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                            <a href="news_by_category.php?category_id=5"><?php echo $result[21]['category_name']; ?></a>
                            <?php $date = strtotime($result[21]['date_created']); ?>
                                        <?php
                                        $day = date('d', $date);
                                        $mon_num = date('m', $date);
                                        $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                        $yr = date('Y', $date);
                                        ?>
                                <a href="#"><?php echo $mon,' ', $day,', ', $yr, ' ' ?></a>                            </div>
                                <a class="d-block" href='single_article.php?article_id=13'>
                                <h4><?php echo $result[21]['title']; ?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>0 comment</a>
                                <a href="#"><i class="ti-heart"></i> 22 like</a>
                            </div>
                        </div>
                    </div> 

                </div> 

                <div class="col-lg-4">
                    <div class="single-blog style-five">
                        <div class="thumb">
                        <img class="img-fluid " src="img/articles/<?php echo $result[25]['image']; ?>" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                            <a href="news_by_category.php?category_id=5"><?php echo $result[25]['category_name']; ?></a>
                            <?php $date = strtotime($result[25]['date_created']); ?>
                                        <?php
                                        $day = date('d', $date);
                                        $mon_num = date('m', $date);
                                        $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                        $yr = date('Y', $date);
                                        ?>
                                <a href="#"><?php echo $mon,' ', $day,', ', $yr, ' ' ?></a>                            </div>
                                <a class="d-block" href='single_article.php?article_id=11'>
                                <h4><?php echo $result[25]['title']; ?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>0 comment</a>
                                <a href="#"><i class="ti-heart"></i> 40 like</a>
                            </div>
                        </div>
                    </div> 

                </div> 

                <div class="col-lg-4">
                    <div class="single-blog style-five">
                        <div class="thumb">
                        <img class="img-fluid " src="img/articles/<?php echo $result[26]['image']; ?>" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                            <a href="news_by_category.php?category_id=5"><?php echo $result[26]['category_name']; ?></a>
                            <?php $date = strtotime($result[26]['date_created']); ?>
                                        <?php
                                        $day = date('d', $date);
                                        $mon_num = date('m', $date);
                                        $mon = date("F", mktime(0, 0, 0, $mon_num, 10));
                                        $yr = date('Y', $date);
                                        ?>
                                <a href="#"><?php echo $mon,' ', $day,', ', $yr, ' ' ?></a>                            </div>
                                <a class="d-block" href='single_article.php?article_id=12'>
                                <h4><?php echo $result[26]['title']; ?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>0 comment</a>
                                <a href="#"><i class="ti-heart"></i> 30 like</a>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
   

    <!--================ three-block section end =================-->  



   

    <!-- ================ Instargram Area End ================= -->


    <!-- ================ start footer Area ================= -->
    <?php include('includes/footer.php'); ?>

    <!-- ================ End footer Area ================= -->
    <script type="text/javascript">
    const active = document.querySelector("#nav-home");
    active.classList.add("active");
    </script>
</body>

</html>