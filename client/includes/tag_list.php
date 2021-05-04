<?php

$tagListUrl = "http://localhost:8080/news_application/web_service/api/tag/get_all_tags.php";

$tagList = curl_init($tagListUrl);
curl_setopt($tagList, CURLOPT_RETURNTRANSFER, true);
$tagListResponse = curl_exec($tagList);

$tagListResult = json_decode($tagListResponse, true);
?>

<aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title">Tag Clouds</h4>
    <ul class="list">
        <?php foreach ($tagListResult as $keyTag => $valueTag) : ?>

            <li>
                <a  href="./components/find_by_tag.php?id<? echo $valueTag['tag_id']; ?>"><?php echo $valueTag['tag']; ?></a>
            </li>
            <?php if (++$i == 10) break; ?>

        <?php endforeach ?>
    </ul>

</aside>