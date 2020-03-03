<?php require 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>

<!-- Navigation -->

<?php include 'includes/navigation.php'; ?>
<div class="sections-container">
  <section class="main-section padding-2">

    <?php
    $query = "SELECT * FROM posts
            left join categories 
            on posts.cat_id = categories.cat_id 
            order by post_id desc";
    $select_all_posts = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_assoc($select_all_posts)) :

    ?>

      <div class="post-container margin-3 main-border">
        <a href="post.php?p_id=<?php echo $row['post_id']; ?>" class="">
          <h1 class="title padding-1 no-margin in-block"><?= $row['post_title']; ?> </h1>
        </a>
        <p class="details no-margin padding-1">
          <span class="date in-block"><?= $row['post_date'] ?></span>
          <span class="cat-name in-block">
            <a href="category.php?cat_id=<?php echo $row['cat_id'] ?>"> <?= $row['cat_title']; ?></a>
          </span>
        </p>
          <p class="post-text no-margin">
            <a href="post.php?p_id=<?php echo $row['post_id'] ?>" class="padding-1 in-block">
              <?php echo strip_tags(substr($row['post_content'], 0, 100)) . "..."; ?>
            </a>
          </p>
      </div>

    <?php endwhile; ?>
  </section>
  <section class="side-bar padding-2">
    <?php include 'includes/sidebar.php' ?>
  </section>
</div>



<!-- Footer -->
<?php include 'includes/footer.php'; ?>