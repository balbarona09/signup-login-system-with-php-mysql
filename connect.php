<?php

$host = 'localhost';
$dbname = 'signup_login';
$user = 'root';
$password = 'admin';

$database = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);