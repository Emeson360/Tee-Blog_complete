<?php
include 'config/database.php';

if(isset($_POST['signin'])) {
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(empty($username_email)) {
        $_SESSION['signin'] = "Username Or Email required";
    }
    elseif (empty($password)) {
        $_SESSION['signin'] = "Password required";
    }
    else {
        // check if user exist in our database
        $user_fetch_query = "SELECT * FROM users WHERE email = '$username_email' OR username = '$username_email'";
        $user_fetch_result = mysqli_query($con, $user_fetch_query);

        if(mysqli_num_rows($user_fetch_result) == 1) {
            // fetch that user using fetch assoc method
            $user_record = mysqli_fetch_assoc($user_fetch_result);
            $db_password = $user_record['password'];
            $_SESSION['user'] = $user_record;

            // compare password with db_password
            if(password_verify($password, $db_password)) {
                $_SESSION['user-id'] = $user_record['id'];
                $_SESSION['user-role'] = $user_record['is_admin'];
                $_SESSION['signin-success'] = "Welcome " . $user_record['username'];
                header('location: ' . ROOT_URL . 'admin/index.php');
            }
            else {
                $_SESSION['signin'] = "Incorrect password";
                header('location: ' .ROOT_URL . 'signin.php');
            }
        }
        else {
            $_SESSION['signin'] = "user " . $username_email . "not found";
            header('location: ' . ROOT_URL . 'signin.php');
        }
    }

    if(isset($_SESSION['signin'])) {
        header('location: ' .ROOT_URL . 'signin.php');
    }
}
else {
    header('location: ' . ROOT_URL . 'signin.php');
}

?>