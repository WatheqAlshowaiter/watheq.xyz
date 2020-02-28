<?php include 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>



<!-- Navigation -->

<?php include 'includes/navigation.php'; ?>


<!-- <div class="results-container main-border margin-3">
  <div class="background-1">
    <h4 class="no-margin in-block padding-1">نتائج البحث</h4>
  </div>
  <div class="no-result no-margin">
    <p class="padding-1 no-margin" style="background: #ffefea">عفواً لا توجد نتائج مطابقة.</p>
    <p class="padding-1 no-margin"><a href="">العودة للصفحة الرئيسية</a></p>
  </div>
</div> -->

<div class="sections-container">

  <section class="main-section padding-2">
    <div class="results-container main-border margin-3">

      <?php
      if (isset($_POST['submit']) && !empty($_POST['search'])) :

        $search = htmlentities($_POST['search']);
        $query  = "SELECT * FROM posts left join categories 
      on posts.cat_id = categories.cat_id WHERE post_tags or post_title LIKE '%{$search}%' order by post_id desc ";
        $search_query = mysqli_query($connection, $query);

        if (!$search_query) {
          die("QUERY FAILED " . mysqli_error($connection));
        }

        $count = mysqli_num_rows($search_query);

        if ($count == 0) { ?>
          <div class="no-result no-margin">
            <p class="padding-1 no-margin results-head"> عفواً لا توجد نتائج مطابقة، حاول البحث باستخدام كلمات أخرى</p>
            <p class="padding-1 no-margin"><a href="">
                << العودة للصفحة الرئيسية</a> </p> </div> <? } else { ?> <div class="background-1">
                  <h4 class="no-margin padding-1 results-head">نتائج البحث</h4>
          </div>

    </div>
    <?php
                                                          while ($row = mysqli_fetch_assoc($search_query)) :

    ?>
      <div class="post-container margin-3 main-border">
        <a href="post.php?p_id=<?php echo $row['post_id']; ?>" class="">
          <h1 class="title padding-1 no-margin in-block"><?= $row['post_title']; ?></h1>
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


    <?php endwhile;  // end of posts (while()) 
    ?>



<?php

                                                        }  // end of else $count == 0
                                                      else :
                                                        header("location: index.php");
                                                        die;
                                                      endif; // end of else if isset($_POST['submit'])  
?>

  </section>


  <section class="side-bar padding-2">
    <!-- Sidebar Widgets Column -->
    <?php include 'includes/sidebar.php' ?>
  </section>

</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>