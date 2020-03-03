<?php include 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>

<!-- Navigation -->

<?php include 'includes/navigation.php'; ?>



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
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
    $post_tags = $row['post_tags'];
    $post_comment_count = $row['post_comment_count'];
    $post_status = $row['post_status'];
    // from the join
    $cat_id = $row['cat_id'];
    $cat_tile = $row['cat_title'];
  }
}

?>

<div class="sections-container">

  <section class="main-section padding-2">
    <div class="post-container margin-3 main-border">
      <h1 class="title padding-1 no-margin in-block"> <?php echo $post_title; ?></h1>
      <p class="details no-margin padding-1">
        <span class="date"><?= $post_date; ?></span><span class="cat-name"><a href="category.php?cat_id=<?php echo $cat_id; ?>"><?=$cat_tile;?> </a></span>
      </p>
      <div class="post-text padding-1 no-margin post-body">
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

</div>






<!-- Sidebar Widgets Column -->
<!-- if I want it in my single posts uncomment this line -->
<?php //include 'includes/sidebar.php' 
?>

</div>
<!-- /.row -->
<!--Comment Section -->

<div class="commentbox" id="post<?php echo $post_id; ?>"></div>
<!-- <script src="https://unpkg.com/commentbox.io/dist/commentBox.min.js"></script> -->

<!-- <script>
  // commentBox('5715241090416640-proj');
  // import qs from 'qs';
  commentBox('5715241090416640-proj', {
    className: 'commentbox', // the class of divs to look for
    defaultBoxId: 'commentbox', // the default ID to associate to the div
    tlcParam: 'tlc', // used for identifying links to comments on your page
    backgroundColor: null, // default transparent
    textColor: null, // default black
    subtextColor: null, // default grey
    singleSignOn: null, // enables Single Sign-On (for Professional plans only)
    /**
     * Creates a unique URL to each box on your page.
     * 
     * @param {string} boxId
     * @param {Location} pageLocation - a copy of the current window.location
     * @returns {string}
     */
    createBoxUrl(boxId, pageLocation) {

      pageLocation.search = ''; // removes query string!
      pageLocation.hash = boxId; // creates link to this specific Comment Box on your page
      return pageLocation.href; // return url string
    },
    /**
     * Fires once the plugin loads its comments.
     * May fire multiple times in its lifetime.
     * 
     * @param {number} count
     */
    onCommentCount(count) {

    }


  });
</script> -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>