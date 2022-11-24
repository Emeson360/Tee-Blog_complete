<?php
include '../config/database.php';


if (isset($_POST['submit'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (empty($title) || empty($description)) {
        $_SESSION['add-category'] = "Please fill out all fields";
    }
    else {
        // Save to database
        $query = "INSERT INTO categories (title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($con, $query);

        if ($result) {
            $_SESSION['add-category-success'] = "New category added successfully";
            header('location: ' . ROOT_URL . 'admin/manage-categories.php');
        }
    }


    if (isset($_SESSION['add-category'])) {
        $_SESSION['add-category-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-category.php');
    }
}
else {
    header('location: ' . ROOT_URL . 'admin/add-category.php');
}