<?php 
session_start();
require_once 'check-login.php';
require_once 'php-actions/signup.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Signup</title>
  </head>
  <body class="bg-dark">
    <main class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6 card mt-5">
          <div class="card-body">
            <div class="py-2">
              <h1>Sign up</h1>
            </div>
            <?php echo $message; ?>
            <form class="form-row" method="post">
              <div class="col py-2">
                <label class="fw-bold" for="fullname">Fullname</label>
                <input class="form-control" type="text" name="fullname" id="fullname"
                value = "<?php echo empty($_POST['fullname']) ? '' : $_POST['fullname'] ?>" required>
              </div>
              <div class="col py-2">
                <label class="fw-bold" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email"
                value = "<?php echo empty($_POST['email']) ? '' : $_POST['email'] ?>" required>
              </div>
              <div class="col py-2">
                <label class="fw-bold" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" required>
              </div>
              <div class="col py-2">
                <label class="fw-bold" for="confirm-password">Confirm password</label>
                <input class="form-control" type="password" name="confirm-password" id="confirm-password" required>
              </div>
              <div class="col py-2">
                <input class="btn btn-primary w-100"type="submit" value="Sign up" name="signup">
              </div>
            </form>
            <div class="text-center py-2">
              <span>Already have an account?</span>
              <a class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="login.php">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>