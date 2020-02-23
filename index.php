<?php include 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>

<!-- Navigation -->

<?php include 'includes/navigation.php'; ?>
<section class="main-section padding-2">
  <div class="post-container margin-3 main-border">
    <a href="#" class="">
      <h1 class="title padding-1 no-margin in-block"> ترتيب مكتبتي، ومناهج دراسية، وعن شخصيتي، وعن الماضي والمستقبل</h1>
    </a>
    <p class="details no-margin padding-1">
      <span class="date in-block">5, Dec</span><span class="cat-name in-block"><a href="">شعر</a></span>
    </p>
    <p class="post-text no-margin">
      <a href="#" class="padding-1 in-block">
        رتبتُ مكتبتي بعد عناء طويل.. وأصابتني النوستالجيا (الحنين إلى الماضي) كما تصيبني عادة هذه الأيام.. لفت انتباهي عدة أشياء:...
      </a>
    </p>
  </div>

  <div class="post-container margin-3 main-border">
    <a href="#" class="">
      <h1 class="title padding-1 no-margin in-block"> ترتيب مكتبتي، ومناهج دراسية، وعن شخصيتي، وعن الماضي والمستقبل</h1>
    </a>
    <p class="details no-margin padding-1">
      <span class="date in-block">5, Dec</span><span class="cat-name in-block"><a href="">شعر</a></span>
    </p>
    <p class="post-text no-margin">
      <a href="#" class="padding-1 in-block">
        رتبتُ مكتبتي بعد عناء طويل.. وأصابتني النوستالجيا (الحنين إلى الماضي) كما تصيبني عادة هذه الأيام.. لفت انتباهي عدة أشياء:...
      </a>
    </p>
  </div>

  <?php include 'includes/ads.php'; ?>

  <div class="post-container margin-3 main-border">
    <a href="#" class="">
      <h1 class="title padding-1 no-margin in-block"> ترتيب مكتبتي، ومناهج دراسية، وعن شخصيتي، وعن الماضي والمستقبل</h1>
    </a>
    <p class="details no-margin padding-1">
      <span class="date in-block">5, Dec</span><span class="cat-name in-block"><a href="">شعر</a></span>
    </p>
    <p class="post-text no-margin">
      <a href="#" class="padding-1 in-block">
        رتبتُ مكتبتي بعد عناء طويل.. وأصابتني النوستالجيا (الحنين إلى الماضي) كما تصيبني عادة هذه الأيام.. لفت انتباهي عدة أشياء:...
      </a>
    </p>
  </div>

  <div class="post-container margin-3 main-border">
    <a href="#" class="">
      <h1 class="title padding-1 no-margin in-block">كيف يكتب يونس بن عمارة؟</h1>
    </a>
    <p class="details no-margin padding-1">
      <span class="date in-block">5, Dec</span><span class="cat-name in-block"><a href="">شعر</a></span>
      <p class="post-text no-margin">
        <a href="#" class="padding-1 in-block">
          في أحد المرات التي مررت بها بأحد باعة الكتب المتجولين جوار بوابة الجامعة، وجدت كتابا يحمل عنوان
          السلام عليكم ورحمة الله ويركاته....
        </a>
      </p>
  </div>
</section>
<section class="side-bar padding-2">
  <?php include 'includes/sidebar.php' ?>
</section>

<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <?php
      $query = "SELECT * FROM posts
        left join categories 
        on posts.cat_id = categories.cat_id 
       order by post_id desc ";
      $select_all_posts = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_assoc($select_all_posts)) {

      ?>

        <div class="post-container margin-3 main-border">
          <a href="post.php?p_id=<?php echo $row['post_id'] ?>" class="">
            <h1 class="title padding-1 no-margin in-block"><?= $row['post_title']; ?></h1>
          </a>
          <p class="details no-margin padding-1">
            <span class="date in-block"><?= $row['post_date']?></span><span class="cat-name in-block"><a href=""><?= $row['cat_title'] ?></a></span>
            <p class="post-text no-margin">
              <a href="post.php?p_id=<?php echo $row['post_id'] ?>" class="padding-1 in-block">
              <?php echo strip_tags(substr($row['post_content'], 0, 100)) . "..."; ?>
              </a>
            </p>
        </div>

        <!-- Title -->
        <h1 class="mt-4">
          <?php //  echo $row['post_title']; 
          ?>
          <a href="post.php?p_id=<?php echo $row['post_id'] ?>"> <?php echo $row['post_title']; ?></a>
        </h1>

        <!-- Author -->
        <!-- there is no author because all post by me -->

        </p>

        <hr>

        <!-- Date/Time -->
        <p><?php echo $row['post_date']; ?></p>

        <hr>
        <!-- Post Content -->
        <p class="post_content_short"><?php echo strip_tags(substr($row['post_content'], 0, 100)) . "..."; ?>
        </p>
        <a href="post.php?p_id=<?php echo $row['post_id'] ?>" class='btn btn-primary'>
          إكمال القراءة >>
          <span class="glyphicaon glyphicaon-chevron-right"></span>

        </a>
        <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicin</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

          <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in
              <cite title="Source Title">Source Title</cite>
            </footer>
          </blockquote>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p> -->

        <hr>

        <!-- Comments Form -->
        <!-- <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div> -->

        <!-- Single Comment -->
        <!--   <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div> -->

        <!-- Comment with nested comments -->
        <!--  <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div> -->

      <?php }  // end of posts 
      ?>

    </div>

    <!-- Sidebar Widgets Column -->
    <?php // include 'includes/sidebar.php' 
    ?>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php include 'includes/footer.php'; ?>