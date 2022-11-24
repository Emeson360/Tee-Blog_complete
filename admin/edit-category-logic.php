<?php
include '../config/database.php';

if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(empty($title)) {
        $_SESSION['edit-category'] = "Title Required";
    }
    elseif(empty($description)) {
        $_SESSION['edit-category'] = "Description Required";
    }
    else {
        // Update Category
        $query = "UPDATE categories SET title = '$title', description = '$description' WHERE id = '$id'";
        $result = mysqli_query($con, $query);

        if($result) {
            $_SESSION['edit-category-success'] = "$title Updated Succesfully";
            // redirect to manage users
            header('location: ' . ROOT_URL . 'admin/manage-categories.php');
        }
    }

    if(isset($_SESSION['edit-category'])) {
        header('location: ' . ROOT_URL . 'admin/edit-category.php?id=' . $id);
    }
}
else {
    header('location: ' . ROOT_URL . 'admin/edit-user.php');
}