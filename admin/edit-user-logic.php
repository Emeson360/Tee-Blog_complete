<?php
include 'config/database.php';

if(isset($_POST['update_user'])) {

    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['is_admin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    if(empty($firstname)) {
        $_SESSION['edit-user'] = "First Name Required";
    }
    elseif(empty($lastname)) {
        $_SESSION['edit-user'] = "Last Name Required";
    }
    else {

    }

    if(isset($_SESSION['edit-user'])) {
        $_SESSION['edit-user-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/edit-user.php');
    }

}
else {
    header('location: ' . ROOT_URL . 'admin/edit-user.php');
}