<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Homepage</title>
  </head>
  <body class="container m-3">
    <?php if(empty($_SESSION['USER_INFORMATION'])): ?>
      <a href="login.php" class="btn btn-primary h5 fw-bold">Login</a>
	  <a href="signup.php" class="btn btn-success h5 fw-bold">Signup</a>
    <?php else: ?>
      <p>Fullname: <?php echo htmlspecialchars($_SESSION['USER_INFORMATION']['FULLNAME']); ?></p>
      <p>Email: <?php echo htmlspecialchars($_SESSION['USER_INFORMATION']['EMAIL']); ?></p>
      <a href="logout.php" class="btn btn-danger h5 fw-bold">Logout</a>
    <?php endif; ?>    
  </body>
</html>