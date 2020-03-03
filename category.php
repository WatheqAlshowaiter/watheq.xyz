<?php include 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>


<?php

if (isset($_GET['cat_id'])) {
  $post_cat_id  = $_GET['cat_id'];
} else {
  header("location: index.php");
}
?>

<!-- Navigation -->

<?php include 'includes/navigation.php'; ?>

<?php

$query = "SELECT * FROM posts where cat_id = $post_cat_id order by post_id desc";
$select_all_posts = mysqli_query($connection, $query);
?> 

<div class="sections-container">
<?php 
// only if the category does not have any post 
if (mysqli_num_rows($select_all_posts) == 0) : ?>

  <section class="main-section padding-2">
    <div class="result main-border">
      <div class="header padding-1 no-results">
        <h4 class="no-margin">عذراً، لا توجد نتائج</h4>
      </div>
      <div class="go-back padding-1">
        <a href="index.php" class="in-block">
          << الرجوع إلى الصفحة الرئيسية</a> </div> </div> 
        
  </section> <!-- end if: the category does have posts -->

<?php else: ?>

          <section class="main-section padding-2">

            <?php
            while ($row = mysqli_fetch_assoc($select_all_posts)) :

            ?>
              <div class="post-container margin-3 main-border">
                <a href="post.php?p_id=<?php echo $row['post_id']; ?>" class="">
                  <h1 class="title padding-1 no-margin in-block"><?= $row['post_title']; ?> </h1>
                </a>
                <p class="details no-margin padding-1">
                  <span class="date in-block"><?= $row['post_date'] ?></span>
                </p>
                <p class="post-text no-margin">
                  <a href="post.php?p_id=<?php echo $row['post_id'] ?>" class="padding-1 in-block">
                    <?php echo strip_tags(substr($row['post_content'], 0, 100)) . "..."; ?>
                  </a>
                </p>
              </div>

            <?php endwhile; ?>
          </section>
            <?php endif;?>
          <section class="side-bar padding-2">
            <?php include 'includes/sidebar.php' ?>
          </section>

          </div>


          <!-- Footer -->
          <?php include 'includes/footer.php'; ?>