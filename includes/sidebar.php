<div class="search-container main-border">
  <form action="#">
    <input class="in-block" type="search" name="" placeholder="ابحث في المدونة...."><button class="in-block" type="submit"><span class="fas fa-search"></span></button>
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
          <?php 
              $query = "SELECT * FROM categories limit 8"; 
              $select_catgs_sidebar = mysqli_query($connection, $query);

             ?>

<div class="cats-container margin-3 main-border">
  <div class="cats-bar padding-1">
    <h4 class="no-margin in-block">تصنيفات</h2>
  </div>
  <a class="category padding-1" href="">فئة 1</a>
  <a class="category padding-1" href="">فئة 2</a>
  <a class="category padding-1" href="">فئة 3</a>
  <a class="category padding-1" href="">فئة 4</a>
  <a class="category padding-1" href="">فئة 5</a>
</div>



         <!--  <div class="card my-4  text-white bg-secondary mb-3">
            <h5 class="card-header">تصنيفات</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <?php 

                      while ($row = mysqli_fetch_assoc($select_catgs_sidebar)) {
                        $cat_id = $row['cat_id']; 
                        $cat_title = $row['cat_title']; 
                        echo "<li><a href='category.php?cat_id={$cat_id}' class='text-white'> {$cat_title}</a></li>";
                      }
                     ?>

                  </ul>
                </div> -->
                <!-- <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div> -->
           <!--    </div>
            </div>
          </div>
 -->

          <!-- Side Widget -->
          <?php include 'includes/widget.php'; ?>

        </div>