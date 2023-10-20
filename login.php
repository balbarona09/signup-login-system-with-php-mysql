<?php

session_start();
require_once 'check-login.php';
require_once 'php-actions/login.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title>Login</title>
  </head>
  <body class="bg-dark">
    <main class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6 card mt-5">
          <div class="card-body">
            <div class="py-2">
              <h1>Log in</h1>
            </div>
            <?php echo $message; ?>
            <form class="form-row" method="post">
              <div class="col py-2">
                <label class="fw-bold" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com"
                value = "<?php echo empty($_POST['email']) ? '' : $_POST['email'] ?>" required>
              </div>
              <div class="col py-2">
                <label class="fw-bold" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Password123" required>
              </div>
              <div class="col py-2">
                <a href="#0" class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Forgot Password?</a>
              </div>
              <div class="col py-2">
                <input class="btn btn-primary w-100" type="submit" value="Log in" name="login">
              </div>
            </form>
            <div class="text-center py-2">
              <span>No account yet?</span>
              <a class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="signup.php" >Sign up</a>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>