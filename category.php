<?php include 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>

<!-- Navigation -->

<?php include 'includes/navigation.php'; ?>


<?php

if (isset($_GET['cat_id'])) {
  $post_cat_id  = $_GET['cat_id'];
} else {
  header("location: index.php");
}

$query = "SELECT * FROM posts where cat_id = $post_cat_id";
$select_all_posts = mysqli_query($connection, $query);

// only if the category does not have any post 
if (mysqli_num_rows($select_all_posts) == 0) : ?>

  <section class="main-section padding-2">
    <div class="result main-border">
      <div class="header padding-1">
        <h4 class="no-margin">عذراً، لا توجد نتائج :(</h4>
      </div>
      <div class="go-back padding-1">
        <a href="index.php" class="in-block">
          << الرجوع إلى الصفحة الرئيسية</a> </div> </div> </section> <?php endif; ?> <section class="main-section padding-2">
            <?php
            while ($row = mysqli_fetch_assoc($select_all_posts)) :

            ?>
              <div class="result main-border">
                <div class="header padding-1">
                  <h4 class="no-margin"> <a href="post.php?p_id=<?php echo $row['post_id'] ?>"> <?php echo $row['post_title']; ?></a> <span class="date in-block"><?= $row['post_date']; ?></span> </h4>
                </div>
                <div class="go-back padding-1">
                  <a href="#" class="in-block"><?php echo substr(trim($row['post_content']), 0, 200); ?></a>
                </div>
              </div>

            <?php endwhile; ?>

            <section class="side-bar padding-2">
              <?php include 'includes/sidebar.php'; ?>
            </section>


            <!-- Footer -->
            <?php include 'includes/footer.php'; ?>