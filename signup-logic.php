<?php
include 'admin/config/database.php';


if (isset($_POST['signup'])) {
    echo "good";
}
else {
    header('location: '. ROOT_URL . 'signup.php');
    die();
}