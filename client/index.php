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
                                <a href="#">Tours & Travel</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Created face stars sixth forth fow
                                Earth firmament meat</h4>
                            </a>
                            <div class="meta-bottom d-flex" >
                                <a href="#">March 12 , 2019 . </a>
                                <a class="dark_font" href="#">By Alen Mark</a>
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
                                <a href="#">Tours & Travel</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Created face stars sixth forth fow
                                Earth firmament meat</h4>
                            </a>
                            <div class="meta-bottom d-flex justify-content-center">
                                <a href="#">March 12 , 2019 . </a>
                                <a href="#">By Alen Mark</a>
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
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <a class="d-block" href="single-blog.html">
                                        <h4>The abundantly brought after day fish there image</h4>
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
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <a class="d-block" href="single-blog.html">
                                        <h4>The abundantly brought after day fish there image</h4>
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
                <div class="col-lg-7">
                    <div class="single-blog video-style">
                        <div class="thumb">
                        <img class="img-fluid" src="img/articles/<?php echo $result[15]['image']; ?>" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">shoes</a>/
                                <a href="#">March 15, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Created face stars sixth forth fow
                                Earth firmament meat</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>05 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div> 

                </div> 

                <div class="col-lg-5">
                    <div class="single-blog video-style small row m_b_30">
                        <div class="thumb col-12 col-sm-5">
                        <img class="img-fluid" src="img/articles/<?php echo $result[20]['image']; ?>" alt="">
    
                        </div>
                        <div class="short_details col-12 col-sm-7">
                            <div class="meta-top d-flex">
                                <a href="#">Beauty</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Blessed night morning on
                                them you great</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-time"></i>mar 12</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div> 

                    <div class="single-blog video-style small row m_b_30 ">
                        <div class="thumb col-12 col-sm-5">
                        <img class="img-fluid" src="img/articles/<?php echo $result[23]['image']; ?>" alt="">
                            
                        </div>
                        <div class="short_details col-12 col-sm-7">
                            <div class="meta-top d-flex">
                                <a href="#">Beauty</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Blessed night morning on
                                them you great</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-time"></i>mar 12</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div>

                    <div class="single-blog video-style small row">
                        <div class="thumb col-12 col-sm-5">
                            <img class="img-fluid" src="img/magazine/14.jpg" alt="">
                            <div class="play_btn">
                                <a class="play-video" href="https://www.youtube.com/watch?v=MrRvX5I8PyY" data-animate="zoomIn"
                                data-duration="1.5s" data-delay="0.1s"><span class="ti-control-play"></span></a>
                            </div>
                        </div>
                        <div class="short_details col-12 col-sm-7">
                            <div class="meta-top d-flex">
                                <a href="#">Beauty</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Blessed night morning on
                                them you great</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-time"></i>mar 12</a>
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
                    <h3>Fashion News</h3>
                    <p>Abundantly creeping saw forth spirit can made appear fourth us.</p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-blog style-five">
                        <div class="thumb">
                            <img class="img-fluid" src="img/magazine/15.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">shoes</a>/
                                <a href="#">March 15, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Shall for rule whose toge one
                                may heaven to dat</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>05 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                            </div>
                        </div>
                    </div> 

                </div> 

                <div class="col-lg-4">
                    <div class="single-blog style-five">
                        <div class="thumb">
                            <img class="img-fluid" src="img/magazine/16.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">shoes</a>/
                                <a href="#">March 15, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Shall for rule whose toge one
                                may heaven to dat</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>05 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                            </div>
                        </div>
                    </div> 

                </div> 

                <div class="col-lg-4">
                    <div class="single-blog style-five">
                        <div class="thumb">
                            <img class="img-fluid" src="img/magazine/17.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">shoes</a>/
                                <a href="#">March 15, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Shall for rule whose toge one
                                may heaven to dat</h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>05 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                            </div>
                        </div>
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

</body>

</html>