<?php include 'includes/db.php' ?>
<?php include 'includes/header.php'; ?>

    <!-- Navigation -->

<?php include 'includes/navigation.php'; ?>


<section class="main-section padding-2">
  <div class="result main-border">
    <div class="header padding-1">
      <h4 class="no-margin">عذراً لا توجد نتائج....</h4>
    </div>
    <div class="go-back padding-1">
      <a href="#" class="in-block">الرجوع إلى القائمة السابقة</a>
    </div>    
  </div>
</section>

</section><section class="side-bar padding-2">
  <?php include 'includes/sidebar.php'; ?>
</section>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <?php 
            if (isset($_GET['cat_id'])) {
             $post_cat_id  = $_GET['cat_id']; 

            }else {
              header("location: index.php"); 
            }
          ?>

          <?php 
             $query = "SELECT * FROM posts where cat_id = $post_cat_id"; 
              $select_all_posts = mysqli_query($connection, $query);

              // only if the category does not have any post 
              if (mysqli_num_rows($select_all_posts) == 0) {
                  echo "<br>";
                // echo "<p class='alert alert-danger'>عفوا ، لا توجد نتائج  :(</p>";
                //echo "<a href='index.php' class ='btn btn-primary'>  << الرجوع للصفحة الرئيسية    </a>"; 
                        
                    
              }

              while ($row = mysqli_fetch_assoc($select_all_posts)) {
              
               ?> 

          <!-- Title -->
          <h1 class="mt-4">
            <!-- <?php echo $row['post_title']; ?> -->
              <a href="post.php?p_id=<?php echo $row['post_id']?>"> <?php echo $row['post_title']; ?></a>
            </h1>

          <!-- Author -->

          <hr>

          <!-- Date/Time -->
          <p> <?php echo $row['post_date']; ?></p>

          <!-- Preview Image -->
          <!-- <a href="post.php?p_id=<?php echo $row['post_id']?>">
             <img src="images/<?php echo $row['post_image'] ;?>" class ="img-fluid rounded">
          </a> -->
         
 <!--          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->

          <hr>

          <!-- Post Content -->
          <p><?php echo substr($row['post_content'], 0, 100); ?></p>
          <a href="post.php?p_id=<?php echo $row['post_id']?>"class="btn btn-primary">
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

          <?php }  // end of posts ?>

        </div>

        <!-- Sidebar Widgets Column -->
        <?php //include 'includes/sidebar.php' ?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

