<?php
include '../config/database.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


    $query = mysqli_query($con, "DELETE FROM categories WHERE id = '$id'");

    if ($query) {
        $query_cate = mysqli_query($con, "UPDATE posts SET category_id = '10', category = 'Uncategorized' WHERE category_id = $id");
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