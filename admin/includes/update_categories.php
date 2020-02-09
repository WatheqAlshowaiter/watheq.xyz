   <form action="" method="post">
                <div class= "form-group">
                  <label for="cat_title">Edit Category</label>

                  <?php 

                    if (isset($_GET['edit'])) {

                    $cat_id_edit = $_GET['edit']; 

                   $query = "SELECT * FROM categories WHERE cat_id = $cat_id_edit"; 
                   $edit_query = mysqli_query($connection, $query); 

                   while($row = mysqli_fetch_assoc($edit_query)){

                    $cat_title_edit = $row["cat_title"]; 
                  
              ?>

              <input value="<?php if(isset($cat_title_edit)){echo $cat_title_edit;}?>" class="form-control" type="text" name="cat_title">

            <?php 
                 } // end while   
                }// end if 

              ?> 

              <?php 
                // Updating Query 
               if (isset($_POST['edit_category'])) {
                      $cat_title = $_POST['cat_title']; 
                      $query = "UPDATE categories SET cat_title = '{$cat_title}' WHERE cat_id = {$cat_id_edit} LIMIT 1"; 
                      
                      $update_query = mysqli_query($connection, $query);
                      header("Location: categories.php"); 

                  }


               ?>
                </div>
                <div class="form-group">
                   <input class="btn btn-primary" type="submit" name="edit_category" value="Edit Category">
                </div>
              </form>