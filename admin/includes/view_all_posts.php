              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Title</th>
                    <!-- <th>Author</th> -->
                    <th>Date Created</th>
                    <th>Date Modified</th>
                    <th>Image</th>
                    <!-- <th>Content</th> -->
                    <th>Tags</th>
                    <!-- <th>Comment Count</th> -->
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM posts order by post_id desc";
                  $select_all_posts = mysqli_query($connection, $query);

                  while ($row = mysqli_fetch_assoc($select_all_posts)) {
                    $post_id = $row['post_id'];
                    $cat_id = $row['cat_id'];
                    $post_title = $row['post_title'];
                    // $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_date_modify = $row['post_date_modify'];
                    if($post_date_modify <= 0){
                      $post_date_modify = "Not modified yet";
                    }
                    $post_image = $row['post_image'];
                    // $post_content = $row['post_content'];
                    $post_tags = $row['post_tags'];
                    $post_comment_count = $row['post_comment_count'];
                    $post_status = $row['post_status'];

                    // to display Category by id 
                    $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
                    $category_query = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($category_query)) {

                      $cat_title_by_id = $row["cat_title"];
                    }

                    echo "<tr>";
                    echo "<td>{$post_id}</td>";
                    echo "<td>$cat_title_by_id</td>";
                    echo "<td>{$post_title}</td>";
                    // echo "<td>{$post_author}</td>";
                    echo "<td>{$post_date}</td>";
                    echo "<td>{$post_date_modify}</td>";
                    echo "<td> <img width='100' src='../images/$post_image' alt='$post_image'></td>";
                    // echo "<td>{$post_content}</td>";
                    echo "<td>{$post_tags}</td>";
                    // echo "<td>{$post_comment_count}</td>";
                    echo "<td>{$post_status}</td>";
                    echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                    echo "<td><a href='delete_post.php?delete=$post_id'onclick=\"return confirm('Are you sure?');\" >Delete</a></td>";


                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>