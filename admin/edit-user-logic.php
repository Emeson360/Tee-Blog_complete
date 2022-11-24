<?php
include '../config/database.php';

if(isset($_POST['update_user'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
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
        // Update user
        $query = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', is_admin = '$is_admin' WHERE id = '$id'";
        $result = mysqli_query($con, $query);

        if($result) {
            $_SESSION['edit-user-success'] = "$firstname $lastname Updated Succesfully";
            // redirect to manage users
            header('location: ' . ROOT_URL . 'admin/manage-users.php');
        }
    }

    if(isset($_SESSION['edit-user'])) {
        $_SESSION['edit-user-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/edit-user.php?id=' . $id);
    }

}
else {
    header('location: ' . ROOT_URL . 'admin/edit-user.php');
}