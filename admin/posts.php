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
            <a class="dropdown-item" href="posts.php?source=add_post">Add posts </a>
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
            <a class="dropdown-item" href="login.html">View all users</a>
            <a class="dropdown-item" href="register.html">Add users </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categories.php">
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
            <li class="breadcrumb-item active">Posts</li>
          </ol>
          
         <!-- display posts -->
         <?php 
              if (isset($_GET['source'])) {
                $source = $_GET['source']; 
              }else {
                $source = ''; 
              }

              switch ($source) {
                // for test 
                case 'add_post':
                  include 'includes/add_post.php'; 
                  break;
                 case 'edit_post':
                  require 'includes/edit_post.php'; 
                  break; 
                
                default:
                  include 'includes/view_all_posts.php'; 
                  break;
              }
          ?>


            </div>

          <!-- /.container-fluid -->
        </div>

        <!-- <table>sdf</table>  Here -->



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
