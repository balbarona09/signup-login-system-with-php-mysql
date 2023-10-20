<?php

require_once 'connect.php';
$message = '';
if(!empty($_POST['signup'])) {
  signup();
}

function signup() {
  global $message, $database;
  
  if(!validate_account()) {
    return;
  }

  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $statement = $database->prepare("INSERT INTO user (fullname, email, password) 
  VALUES (:fullname, :email, :password) ");
  $statement->bindParam(':fullname', $_POST['fullname']);
  $statement->bindParam(':email', $_POST['email']);
  $statement->bindParam(':password', $password);
  if(!$statement->execute()) {
    $message = "<div class='alert alert-danger'>Sign up Failed. Please try again.</div>";
    return;
  }
  $message = "<div class='alert alert-success'>Sign up Successful. You can now login</div>";
}

function validate_account() {
  global $message, $database;
  if(empty($_POST['fullname'])) {
    $message = "<div class='alert alert-danger'>Please enter your name</div>";
    return false;
  }
  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $message = "<div class='alert alert-danger'>Please enter valid email</div>";
    return false;
  }
  $statement = $database->prepare("SELECT COUNT(user_id) FROM user WHERE email = :email");
  $statement->bindParam(':email', $_POST['email']);
  $statement->execute();
  $result = $statement->fetch(PDO::FETCH_BOTH)[0];
  if($result >= 1) {
    $message = "<div class='alert alert-danger'>Email already exist.</div>";
    return false;
  }
  if(empty($_POST['password'])) {
    $message = "<div class='alert alert-danger'>Please enter your password</div>";
    return false;
  }
  if(strlen($_POST['password']) < 8) {
    $message = "<div class='alert alert-danger'>Password should be atleast 8 characters</div>";
    return false;
  }
  if($_POST['password'] != $_POST['confirm-password'] ) {
    $message = "<div class='alert alert-danger'>Passwords do not match</div>";
    return false;
  }
  return true;
}