<?php

if (isset($_GET['p_id'])) {
  $post_id_to_edit = $_GET['p_id'];
  $query = "SELECT * FROM posts WHERE post_id = $post_id_to_edit limit 1";
  $select_post_by_id = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($select_post_by_id)) {
    $post_id = $row['post_id'];
    $cat_id = $row['cat_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
    $post_desc = $row['post_desc'];
    $post_tags = $row['post_tags'];
    $post_comment_count = $row['post_comment_count'];
    $post_status = $row['post_status'];
  }
}

// After hitting Edit button (to insert)
if (isset($_POST['update_post'])) {
  // like from adding new post
  // $post_id = $_POST[]
  $post_title = $_POST['post_title'];
  $cat_id = $_POST['post_category'];
  // $post_catgs = $_POST['post_category']; 
  $post_author = $_POST['post_author'];

  // speciaal case for image 
  $post_image = $_FILES['post_image']['name'];
  $post_image_temp = $_FILES['post_image']['tmp_name']; // it should be 'tmp_name'

  $post_content = $_POST['post_content'];
  $post_desc = $_POST['post_desc'];
  $post_date = date("d-mm-year");
  $post_tags = $_POST['post_tags'];
  $post_status = $_POST['post_status'];

  move_uploaded_file($post_image_temp, "../images/$post_image");

  if (empty($post_image)) {
    $query = "SELECT * FROM posts WHERE post_id = $post_id_to_edit";
    $select_image =   mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($select_image)) {
      $post_image = $row['post_image'];
    }
  }


  $query  = "UPDATE posts SET ";
  $query .= "post_title = '$post_title', ";
  $query .= "cat_id = '$cat_id', ";
  $query .= "post_date = now(), ";
  // $query .= "post_author = '$post_author',  ";
  $query .= "post_content = '$post_content', ";
  $query .= " = '$', ";
  $query .= "post_tags = '$post_tags', ";
  $query .= "post_status = '$post_status',  ";
  $query .= "post_image = '$post_image' ";
  $query .= "WHERE post_id = $post_id ";


  $update_query = mysqli_query($connection, $query);

  confirm_query($update_query, 'Update');
}

?>
<form action="" method="post" enctype="multipart/form-data">
  <!--enctype for uploading images  -->

  <!-- Post Title  -->
  <div class="form-group">
    <label for="post_title">Post Title</label>
    <input class="form-control" value="<?php echo $post_title; ?>" type="text" name="post_title" id="post_title">
  </div>
  <!-- Category Id  -->
  <div class="form-group">
    <select name="post_category">
      <?php
      $query = "SELECT * FROM categories";
      $select_all_catgs = mysqli_query($connection, $query);
      confirm_query($select_all_catgs);

      while ($row = mysqli_fetch_assoc($select_all_catgs)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "<option value =\"$cat_id\">{$cat_title}</option>";
      }

      ?>
    </select>

  </div>
  <!-- Post Author  -->
  <div class="form-group">
    <label for="post_author">Post Author</label>
    <input class="form-control" value="<?php echo $post_author; ?>" type="text" name="post_author" id="post_author">
  </div>
  <!-- Post Image  -->
  <!-- there is something to edit -->
  <div class="form-group">
    <label for="post_image">Post Image</label> <br>
    <img width='200' src="../images/<?php echo $post_image; ?>">
    <input type="file" name="post_image" id="post_image">
  </div>
  <!-- Post Content  -->
  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea class="form-control" type="text" name="post_content" id="post_content" cols="30" rows="10"><?php echo $post_content; ?>
          
          </textarea>
  </div>

  <!-- Post Description  -->
  <div class="form-group">
    <label for="post_content">وصف المنشور</label>
    <input class="form-control" type="text" name="post_desc" id="post_desc" />
  </div>

  <!-- Post Tags  -->
  <div class="form-group">
    <label for="post_content">Post Tags</label>
    <input class="form-control" value="<?php echo $post_tags; ?>" type="text" name="post_tags" id="post_tags">
  </div>
  <!-- Post Status -->
  <div class="form-group">
    <label for="post_content">Post Status</label>
    <input class="form-control" value="<?php echo $post_status; ?>" type="text" name="post_status" id="post_status">
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_post" value="Edit Post">
  </div>

</form>