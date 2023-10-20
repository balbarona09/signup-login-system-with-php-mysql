<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title>Homepage</title>
  </head>
  <body class="container m-3">
    <?php if(empty($_SESSION['USER_INFORMATION'])): ?>
      <a href="login.php" class="btn btn-lg btn-danger h5 fw-bold">Login</a>
    <?php else: ?>
      <p>Fullname: <?php echo htmlspecialchars($_SESSION['USER_INFORMATION']['FULLNAME']); ?></p>
      <p>Email: <?php echo htmlspecialchars($_SESSION['USER_INFORMATION']['EMAIL']); ?></p>
      <a href="logout.php" class="btn btn-danger h5 fw-bold">Logout</a>
    <?php endif; ?>
    
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>