 <!--================ Right Side Bar =================-->

 <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                       
                        <!--================ Category List =================-->

                      


                        <!--================ Recent Posts List =================-->

                        <!-- <?php include('related_post.php'); ?> -->


                        <!--================ Tag List =================-->

                        <?php

$tagListUrl = "http://localhost/news_application/web_service/api/tag/get_all_tags.php";

$tagList = curl_init($tagListUrl);
curl_setopt($tagList, CURLOPT_RETURNTRANSFER, true);
$tagListResponse = curl_exec($tagList);

$tagListResult = json_decode($tagListResponse, true);
$i=0;
?>

<aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title">All tags</h4>
    <ul class="list">
        <?php foreach ($tagListResult as $keyTag => $valueTag) : ?>

            <li >
                <a <?php if ($valueTag['tag_id'] == $tag_id) echo 'style="background-color:#ff7a7f; color:white;"'?> href="news_by_tag.php?tag_id=<?php echo $valueTag['tag_id']; ?>"><?php echo $valueTag['tag']; ?></a>
            </li>
           

        <?php endforeach ?>
    </ul>

</aside>



                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/instagram/widget-i1.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/instagram/widget-i2.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/instagram/widget-i3.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/instagram/widget-i4.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/instagram/widget-i5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/instagram/widget-i6.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter email" required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100" type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


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