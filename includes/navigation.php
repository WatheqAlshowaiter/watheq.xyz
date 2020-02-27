    <nav class="nav-bar">
      <div class="container">
        <div class="main-bar">
          <a class="" href="<?= "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) ?>">
            <img src="./images/Watheq Logo.svg">
          </a>
          <span id='bars-icon' class="fas fa-bars" onclick="toggleOpenClose()"></span>
        </div><div id="nav-items" onclick="toggleOpenClose()">

          <?php
          $query = "SELECT * FROM categories LIMIT 10";
          $select_all_catgs = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($select_all_catgs)) {
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
            echo "<a href='category.php?cat_id={$cat_id}' class='nav-link'>{$cat_title}</a>";
    
            // echo "<li><a href='category.php?cat_id={$cat_id}' class='text-white'> {$cat_title}</a></li>";
          }


          ?>
          <!--   <li class="nav-item active">
              <a class="nav-link" href="admin">Admin
                <span class="sr-only">(current)</span>
              </a> -->
          <!--  </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li> -->

        </div>
      </div>
    </nav>
    <div class="well"></div>
    <script src="./js/navBar.js"></script>