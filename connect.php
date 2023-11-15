<?php
$host = 'localhost';
$dbname = 'signup_login';
$user = 'root';
$password = '';

$database = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);