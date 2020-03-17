<?php
if (isset($_POST['create_post'])) {

      $post_title = $_POST['post_title'];
      $cat_id = $_POST['post_category'];
      // $post_author = $_POST['post_author']; 

      // speciaal case for image 
      $post_image = $_FILES['post_image']['name'];
      $post_image_temp = $_FILES['post_image']['tmp_name']; // it should be 'tmp_name'

      $post_content = $_POST['post_content'];
      $post_desc = $_POST['post_desc'];
      $post_date = date("d-mm-year");
      $post_tags = $_POST['post_tags'];
      $post_status = $_POST['post_status'];
      $post_comment_count = 4; // we will fetch it from DB  

      // copy the image to a folder you want 
      move_uploaded_file($post_image_temp, "../images/$post_image");

      // Inserting to DB 
      $query  = "INSERT INTO posts(cat_id, post_title, post_date, post_image, post_content, post_desc ,post_tags, post_status) ";
      $query .= "VALUES ({$cat_id}, '{$post_title}', now(), '{$post_image}', '{$post_content}','{$post_desc}' ,'{$post_tags}', '{$post_status}' )";

      $create_post_query = mysqli_query($connection, $query);

      confirm_query($create_post_query, 'Created Post');
}

?>
<form action="" method="post" enctype="multipart/form-data">
      <!--enctype for uploading images  -->

      <!-- Post Title  -->
      <div class="form-group">
            <label for="post_title">Post Title</label>
            <input class="form-control" type="text" name="post_title" id="post_title">
      </div>
      <!-- Category Id  -->
      <div class="form-group">
            <!--      <label for="cat_id">Category Id</label>
          <input class="form-control" type="text" name="cat_id" id="cat_id"> -->
            <select name="post_category">
                  <?php
                  $query = "SELECT * FROM categories";
                  $select_all_catgs = mysqli_query($connection, $query);
                  confirm_query($select_all_catgs);

                  while ($row = mysqli_fetch_assoc($select_all_catgs)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];

                        echo "<option value ='$cat_id'>{$cat_title}</option>";
                  }

                  ?>
            </select>
      </div>
      <!-- Post Author  -->
      <!-- <div class= "form-group">
          <label for="post_author">Post Author</label>
          <input class="form-control" type="text" name="post_author" id="post_author">
    </div> -->
      <!-- Post Image  -->
      <!-- there is something to edit -->
      <div class="form-group">
            <label for="post_image">Post Image </label>
            <input type="file" name="post_image" id="post_image">
      </div>
      <!-- Post Content  -->
      <!-- there is something to edit -->
      <div class="form-group">
            <label for="post_content">Post Content</label>
            <textarea class="form-control" type="text" name="post_content" id="post_content" cols="30" rows="10"> </textarea>
      </div>
      <!-- Post Description  -->
      <div class="form-group">
            <label for="post_content">وصف المنشور</label>
            <input class="form-control" type="text" name="post_desc" id="post_desc" />
      </div>

      <!-- Post Tags  -->
      <div class="form-group">
            <label for="post_content">Post Tags</label>
            <input class="form-control" type="text" name="post_tags" id="post_tags">
      </div>
      <!-- Post Status -->
      <div class="form-group">
            <label for="post_content">Post Status</label>
            <input class="form-control" type="text" name="post_status" id="post_status">
      </div>
      <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_post" value="Add Post">
      </div>

</form>