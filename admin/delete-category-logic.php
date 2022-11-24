<?php
include '../config/database.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


    $query = "DELETE FROM categories WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    if ($result) {

        $_SESSION['delete-category-success'] = "Category deleted successfully";

        header('location: ' . ROOT_URL . 'admin/manage-categories.php');
    }
    else {
        $_SESSION['delete'] = "Error!! Delete failed";
        header('location: ' . ROOT_URL . 'admin/manage-categories.php');
    }

    
}
else {
    // redirect to manage categories page
    header('location: ' . ROOT_URL . 'admin/manage-categories.php');
}