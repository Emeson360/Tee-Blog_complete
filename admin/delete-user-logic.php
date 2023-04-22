<?php
include '../config/database.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // fetch user from database
    $query = "SELECT * FROM users WHERE id ='$id'";
    $result = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($result);
   
    // make sure we are fetching only one user
    if (mysqli_num_rows($result) == 1) {
        $avatar_name = $user['avatar'];
        $avatar_path = '../images/' . $avatar_name;

        // delete the image if it exist
        if ($avatar_path) {
            unlink($avatar_path);
        }

        // delete post
        $query_post = mysqli_query($con, "SELECT thumbnail FROM posts WHERE author_id = $id");
        foreach ($query_post as $row) {
            $thumbnail_name = $row['thumbnail'];
            $thumbnail_path = '../images/' . $thumbnail_name;

            // delete the image if it exist
            if ($thumbnail_path) {
                unlink($thumbnail_path);
            }
        }

        $query = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($con, $query);

        if ($result) {

            $_SESSION['delete-success'] = "User deleted successfully";

            header('location: ' . ROOT_URL . 'admin/manage-users.php');
        }
        else {
            $_SESSION['delete'] = "Error!! Delete failed";
            header('location: ' . ROOT_URL . 'admin/manage-users.php');
        }
        
    }
    else {
        $_SESSION['delete'] = "Error!! Delete failed";
        header('location: ' . ROOT_URL . 'admin/manage-users.php');
    }

    
}
else {
    // redirect to manage users page
    header('location: ' . ROOT_URL . 'admin/manage-users.php');
}