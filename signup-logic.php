<?php
include 'admin/config/database.php';


if (isset($_POST['signup'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $create_password = filter_var($_POST['create_password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirm_password = filter_var($_POST['confirm_password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

   
    if (empty($firstname)) {
        $_SESSION['signup'] = "Firstname required";
    }
    elseif (empty($lastname)) {
        $_SESSION['signup'] = "Lastname required";
    }
    elseif (empty($username)) {
        $_SESSION['signup'] = "Username required";
    }
    elseif (empty($email)) {
        $_SESSION['signup'] = "Email required";
    }
    elseif (strlen($create_password) < 4 || strlen($confirm_password) < 4) {
        $_SESSION['signup'] = "Password should be 4+ characters";
    }
    elseif (empty($avatar['name'])) {
        $_SESSION['signup'] = "Please add an avatar";
    }
    else {
        if($create_password !== $confirm_password) {
            $_SESSION['signup'] = "Password do not match";
        }
        else {
            $hashed_password = password_hash($create_password, PASSWORD_DEFAULT);  
            
            // check if username already exist in database
            $user_check_username_query = "SELECT username FROM users WHERE username = '$username'";
            $user_check_username_result = mysqli_query($con, $user_check_username_query);
            
            if (mysqli_num_rows($user_check_username_result) > 0) {
                
                $_SESSION['signup'] = "Username already exist";
            }
            
            // check if email already exist in database
            $user_check_query = "SELECT email FROM users WHERE email = '$email'";
            $user_check_result = mysqli_query($con, $user_check_query);
            
            if (mysqli_num_rows($user_check_result) > 0) {
                
                $_SESSION['signup'] = "Email already exist";
            }
            else {

                // work on the avatar
                // rename avatar
                $time = time(); //Make each image name unique using current timestamp
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;
    
                // make sure file is allowed
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extension = explode('.', $avatar_name);
                $extension = end($extension);
    
                if (in_array($extension, $allowed_files)) {
                    // Make sure image is not more than 2mb
                    if ($avatar['size'] < 2000000) {
                        // Upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    }
                    else {
                        $_SESSION['signup'] = "File size too big. Should be less than 2mb";
                    }
                }
                else {
                    $_SESSION['signup'] = "File should be png, jpg or jpeg";
                }
                
            }

        }
    }



    if(isset($_SESSION['signup'])) {

        $_SESSION['signup-data'] = $_POST;
        // Redirect to signup page
        header('location: ' . ROOT_URL . 'signup.php');
    }
    else {
        // Insert into the database
        $user_insert_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) VALUE ('$firstname', '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', 0)";

        if (mysqli_query($con, $user_insert_query)) {
            $_SESSION['signup-success'] = "Registration successfull, Please Log In!!!";
            // redirect to login page
            header('location: ' . ROOT_URL . 'signin.php');
        }
    }
    
}
else {
    header('location: '. ROOT_URL . 'signup.php');
    die();
}