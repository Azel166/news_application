<?php

$catUrl = "http://localhost/news_application/web_service/api/category/get_all_categories.php";

$cat = curl_init($catUrl);
curl_setopt($cat, CURLOPT_RETURNTRANSFER, true);
$catResponse = curl_exec($cat);

$catResult = json_decode($catResponse, true);

?>
<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Category</h4>
    <ul class="list cat-list">
    <?php foreach ($catResult as $keyCat => $valueCat) : ?>
        <li>
            <a href="./news_by_category.php?category_id=<?php echo $valueCat['category_id']; ?>" class="d-flex">
                <p><?php echo $valueCat['category_name']; ?></p>
            </a>
        </li>
        <?php endforeach; ?>

    </ul>
</aside>