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
    elseif (empty($avatar)) {
        $_SESSION['signup'] = "Please add an avatar";
    }
    else {
        if($create_password !== $confirm_password) {
            $_SESSION['signup'] = "Password do not match";
        }
    }



    if(isset($_SESSION['signup'])) {

        $_SESSION['signup-data'] = $_POST;
        // Redirect to signup page
        header('location: ' . ROOT_URL . 'signup.php');
    }
    // var_dump($avatar) . "<br>";
}
else {
    header('location: '. ROOT_URL . 'signup.php');
    die();
}