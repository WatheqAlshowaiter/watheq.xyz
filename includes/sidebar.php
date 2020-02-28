<div class="search-container main-border">
  <form action="search.php" method="post">
    <input class="" type="search" name="search" placeholder="ابحث في المدونة...">
    <button class="" type="submit" name="submit"><span class="fas fa-search"></span></button>
  </form>
</div>


<!-- <div class="col-md-4"> -->

<!-- Search Widget -->
<!-- <div class="card my-4">
            <h5 class="card-header">ابحث </h5>
            <div class="card-body">
              <form action="search.php" method="post">
              <div class="input-group">
                <input name = "search" type="text" class="form-control" placeholder="ابحث عن ... ">
                <span class="input-group-btn">
                  <button name="submit" class="btn btn-secondary" type="submit">هيا!</button>
                </span>
              </div>
              </form>
            </div>
          </div> -->

<!-- Categories Widget -->
<!-- Deleted becaues the are repeated the same as the navebar items -->
<?php
// $query = "SELECT * FROM categories limit 8";
// $select_catgs_sidebar = mysqli_query($connection, $query);

?>

<!-- <div class="cats-container margin-3 main-border">
  <div class="cats-bar padding-1">
    <h4 class="no-margin in-block">تصنيفات</h4>
  </div> -->
  <?php

  // while ($row = mysqli_fetch_assoc($select_catgs_sidebar)) {
  //   $cat_id = $row['cat_id'];
  //   $cat_title = $row['cat_title'];
  //   echo "<a class='category padding-1' href='category.php?cat_id={$cat_id}' >{$cat_title}</a>";
  // }

  ?>
  
<!-- </div> -->


<!-- Side Widget -->
<?php include 'includes/widget.php'; ?>
<?php include 'includes/ads.php'; ?>