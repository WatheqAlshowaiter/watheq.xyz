<?php
header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;

//sitemap.php

require 'includes/db.php';


$query = "SELECT post_id, post_date_modify, post_date FROM posts order by post_id DESC";

$all_posts = mysqli_query($connection, $query);

$base_url = "http://watheq.xyz";


while ($row = mysqli_fetch_array($all_posts)) {
    echo '<url>' . PHP_EOL;
    echo '<loc>' . $base_url . "/post.php?p_id=" . $row["post_id"] . '/</loc>' . PHP_EOL;
    echo '<changefreq>weekly</changefreq>' . PHP_EOL;
    if ($row['post_date_modify'] > 0) {
        echo '<lastmod>' . $row['post_date_modify'] . '</lastmod>' . PHP_EOL;;
    } else {
        echo '<lastmod>' . $row['post_date'] . '</lastmod>' . PHP_EOL;;
    }
    echo '</url>' . PHP_EOL;
}

echo '</urlset>' . PHP_EOL;
