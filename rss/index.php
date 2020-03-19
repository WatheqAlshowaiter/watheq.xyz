<?php require '../includes/db.php'; ?>


<?php header('Content-type: application/xml'); ?>

<?php

echo "<rss version='2.0' xmlns:atom='http://www.w3.org/2005/Atom'>\n";
echo "<channel>\n";

echo "<title>مدونة واثق</title>\n";
echo "<description>مدونة واثق الشويطر. مدونة شخصية تتحدث عن التقنية والبرمجة والثقافة والأدب وأشياء أخرى</description>\n";
echo "<link>http://watheq.xyz</link>\n";

echo "<image>";
echo "<url>https://watheq.xyz/images/icon/icon.png</url>";
echo "<title>شعار الموقع</title>";
echo "<link>http://watheq.xyz</link>";
echo "<description>شعار الموقع ويعبر عن الحرف الأول من اسمي وهو الواو</description>";
echo "</image>";




$query = 'SELECT * FROM posts ORDER BY post_id DESC LIMIT 50';
$all_posts = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($all_posts)) : ?>

    <item>
        <title> <?= $row['post_title']; ?></title>
        <description><?= $row['post_desc'] ?></description>
        <pubDate><?= $row['post_date']; ?> </pubDate>
        <link>http://watheq.xyz/post.php?p_id=<?= $row['post_id']; ?></link>
        <guid>http://watheq.xyz/post.php?p_id=<?= $row['post_id']; ?></guid>
        <atom:link href="http://watheq.xyz/post.php?p_id=<?= $row['post_id']; ?>" rel='self' type='application/rss+xml' />
    </item>
<? endwhile;

echo "</channel>\n";
echo "</rss>\n";
?>