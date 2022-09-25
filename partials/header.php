<?php
require './admin/config/database.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tee Blog website</title>
    <link rel="stylesheet" href="<?= ROOT_URL?>/css/style.css">
    <link rel="stylesheet" href="<?= ROOT_URL?>/fontawesome-free-6.1.1-web/css/all.css">
    <!-- GOOGLE FONT (MONTSERRAT) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="<?php echo ROOT_URL?>" class="nav__logo">TEE-BLOG</a>
            <ul class="nav__items">
                <li>
                    <a href="<?= ROOT_URL?>blog.php">Blog</a>
                </li>
                <li>
                    <a href="<?= ROOT_URL?>about.php">About</a>
                </li>
                <li>
                    <a href="<?php echo ROOT_URL?>services.php">Services</a>
                </li>
                <li>
                    <a href="<?php echo ROOT_URL?>contact.php">Contact</a>
                </li>
                <li>
                    <a href="<?php echo ROOT_URL?>signin.php">Signin</a>
                </li>
                <li class="nav__profile">
                    <!-- <div class="avatar">
                        <img src="./images/avatar.png">
                    </div>
                    <ul>
                        <li><a href="<?php echo ROOT_URL?>admin/dashboard.php">Dashboard</a></li>
                        <li><a href="<?php echo ROOT_URL?>logout.php">Logout</a></li>
                    </ul>
                </li> -->
            </ul>
            <button id="open__nav-btn"><i class="fa fa-bars"></i></button>
            <button id="close__nav-btn"><i class="fa fa-times"></i></button>

        </div>
    </nav>
    <!-- ================== END OF NAV ============= -->