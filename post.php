<?php include 'includes/db.php' ?>

<?php

// the post query 

if (isset($_GET['p_id'])) {
  $post_id = $_GET['p_id'];
  $query = "SELECT * FROM posts left join categories 
  on posts.cat_id = categories.cat_id  WHERE post_id = $post_id limit 1";

  $select_post_by_id = mysqli_query($connection, $query);


  while ($row = mysqli_fetch_assoc($select_post_by_id)) {
    $post_id = $row['post_id'];
    $cat_id = $row['cat_id'];
    $post_title = $row['post_title'];
    //$post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_date_modify = $row['post_date_modify']; 
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
    $post_desc = $row['post_desc'];
    $post_tags = $row['post_tags'];
    $post_comment_count = $row['post_comment_count'];
    $post_status = $row['post_status'];
    // from the join
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
  }
}
?>

<?php include 'includes/header.php'; ?>

<!-- Navigation -->

<?php include 'includes/navigation.php'; ?>
<div class="sections-container">
  <section class="main-section padding-2">
    <div class="post-container margin-3 main-border">
      <h1 class="title padding-1 no-margin in-block"> <?php echo $post_title; ?></h1>
      <p class="details no-margin padding-1">
        <span class="cat-name"><a href="category.php?cat_id=<?php echo $cat_id; ?>"><?= $cat_title; ?> </a></span>
        <span class="date"><?= $post_date; ?></span>
        <span class="date-mod"><? echo ($post_date_modify > 0)? "تاريخ التعديل: ". $post_date_modify :'';?></span>
      </p>
      <div class="post-text-article padding-1 no-margin post-body">
        <?php echo $post_content; ?>
      </div>
      <div class="post-tags padding-1 no-margin">
        <b class="pa-ra">وسوم</b>
        <span><?php echo $post_tags; ?></span>
      </div>
    </div>
  </section>
  <section class="side-bar padding-2">
    <?php include 'includes/sidebar.php'; ?>
  </section>

  <section class="comments-container">
    <div class="main-section padding-2">
      <div id="disqus_thread"></div>
      <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

        var disqus_config = function() {
          // this.page.url = <?= 'http://www.watheq.xyz/post.php?p_id=' . $post_id; ?>// Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = <?= $post_id; ?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

        (function() { // DON'T EDIT BELOW THIS LINE
          var d = document,
            s = d.createElement('script');
          s.src = 'https://watheq-xyz-1.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
        })();
      </script>
      <noscript>رجاء، فّعل جافاسكريبت حتى يتسنى لك التعليق <a href="https://disqus.com/?ref_noscript"></a></noscript>

    </div>
  </section>

</div>

<!-- Comment Section Disqus -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>