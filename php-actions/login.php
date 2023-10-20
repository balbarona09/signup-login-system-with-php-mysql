<?php

require_once 'connect.php';
$message = '';
if(!empty($_POST['login'])) {
  login();
}

function login() {
  global $message, $database;
  
  $statement = $database->prepare("SELECT COUNT(user_id) as total, password, fullname, email, 
  user_id FROM user WHERE email = :email LIMIT 1");
  $statement->bindParam(":email", $_POST['email']);
  $statement->execute();
  $result = $statement->fetch(PDO::FETCH_ASSOC);
  if($result['total'] < 1) {
    $message = "<div class='alert alert-danger'>Email or Password is incorrect.</div>";
    return;
  }
  if(!password_verify($_POST['password'], $result['password'])) {
    $message = "<div class='alert alert-danger'>Email or Password is incorrect.</div>";
    return;
  }
  $_SESSION['USER_INFORMATION']['ID'] = $result['user_id'];
  $_SESSION['USER_INFORMATION']['FULLNAME'] = $result['fullname'];
  $_SESSION['USER_INFORMATION']['EMAIL'] = $result['email'];
  
  header('Location: ./');
  die();
}