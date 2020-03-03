<?php

function confirm_query($query, $type_of_query = 'Query'){
  global $connection; 
 if (!$query) {
       die("Query Failed: ". mysqli_error($connection)); 
     } else {
      echo "<p class='alert alert-successful'>$type_of_query done Successfully!</p>";
   }
}

function insert_categories(){

global $connection; 
  // Inserting categories 
	if ($_POST['submit']) {
	$cat_title = $_POST['cat_title']; 

	if (empty($cat_title)){
 		echo "<p class='alert alert-danger'>The Category title should not be empty</p>";
	} else {
	  $query = "INSERT INTO categories(cat_title) "; 
	  $query .="VALUES ('{$cat_title}') "; 

	  $catgs_query = mysqli_query($connection, $query); 

 	 if (!$catgs_query) {
    	echo "Qeury failed: " . mysqli_error($connection);
	  }
	}
 }
}

function select_all_categories(){
	global $connection; 

	$query = "SELECT * FROM categories"; 
	$select_all_catgs = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($select_all_catgs)) {
    $cat_id = $row['cat_id']; 
    $cat_title = $row['cat_title']; 
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href='categories.php?delete={$cat_id}' onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";
  }
}


function delete_categoreis(){ 
global $connection; 
      if (isset($_GET['delete'])) {
          $cat_to_delete = $_GET['delete']; 
          $query = "DELETE FROM categories WHERE cat_id = {$cat_to_delete} LIMIT 1"; 
          
          $delete_catgs = mysqli_query($connection, $query);
          header("Location: categories.php"); 

          }
}


     