<?php 
  session_start(); 

  // hust for now brfore DB 
  define('USERNAME', 'SOME_NAME');
    define('PASSWORD', 'SOME_PASSWORD');

    // you can also use 
    // if (isset($_POST['login_form'])){ ... }

    if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
      // get their values
      $username = $_POST['username']; 
      $password = $_POST['password'];

      // validate these values 
      if ($username === USERNAME && $password === PASSWORD ) {
        // they are correct 

        $_SESSION['username'] = $username; 
        header("Location: index.php"); 
       } else { 

        $status = "Incorrect login credentials"; 
       }
    }


 ?>

 <!doctype html>
<html>
<head>
  <title></title>
</head>
<body>

<h1>Login</h1>
<form action="login.php" method="post">
  <ul>
    <li>
      <label for="username">Username: </label>
      <input type="text" name="username">
    </li>

    <li>
      <label for="password">Password: </label>
      <input type="password" name="password">
    </li>

    <li>
      <input type="submit" value="Login" name="login_form"> 
    </li>
  </ul>

  <?php if(isset($status)) : ?>
    <p><?php echo "$status"; ?></p>
  <?php endif; ?>

  </form>

</body>

</html>