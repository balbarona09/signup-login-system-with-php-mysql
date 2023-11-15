<?php
if(!empty($_SESSION['USER_INFORMATION'])) {
    header('Location: ./');
    die();
}