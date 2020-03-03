<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    die();
  }

 ?>
<?php include 'includes/admin_header.php'; ?>

    <!-- Navigation -->
    <?php include 'includes/admin_navigation.php'; ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li> -->
        <!-- posts  -->
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="postsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Posts</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="posts.php">View all posts</a>
            <a class="dropdown-item" href="#">Add posts </a>
          </div>
        </li>
        <!-- end of posts  -->
       <!--  <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li> -->
          <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="postsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Users</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="login.php">View all users</a>
            <a class="dropdown-item" href="register.php">Add users </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Categories</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Profile</span></a>
        </li>


       <!--  <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li> -->
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Welcome</a>
            </li>
            <li class="breadcrumb-item active">Admin</li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
          
          <div class="row">
             <div class="col-sm-4">
                <?php 
                  // Inserting categories 
                   insert_categories(); 
                ?>
            </div>
          </div>
         



            <!-- Adding Category -->
            <!-- <div class="container"> -->
               <div class="row">

              <div class="col-sm-4">
              <form action="" method="post">
                <div class= "form-group">
                  <label for="cat_title">Category Name</label>
                  <input class="form-control" type="text" name="cat_title" id="cat_title">
                </div>
                <div class="form-group">
                   <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                </div>
              </form>

              <!-- Editing / Updating Category  -->
              <?php 
                if (isset($_GET['edit'])) {
                  include 'includes/update_categories.php'; 
                }

               ?>
             

         

          </div> <!-- end the div for adding and editing categories--> 


              <div class="col-sm-4 text-center">
                <table class="table table-bordered table-hover">
                 <thead>
                   <tr>
                     <th>Id</th>
                     <th>Category title</th>
                   </tr>
                 </thead>
                 <tbody>
                  <?php 
                    // Select all categories 
                    select_all_categories(); 
               ?>

               <?php 
                //Delete Categoreis  
               delete_categoreis(); 

                ?>
                 </tbody>
                </table>
             </div>
            </div>
            <!-- </div> -->
           
         
          <!-- /.container-fluid -->
        </div>



        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include 'includes/admin_footer.php'; ?>
