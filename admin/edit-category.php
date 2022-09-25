<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tee Blog website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css">
    <!-- GOOGLE FONT (MONTSERRAT) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">TEE-BLOG</a>
            <ul class="nav__items">
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="services.html">Services</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <!-- <li>
                    <a href="signin.html">Signin</a>
                </li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar.png">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open__nav-btn"><i class="fa fa-bars"></i></button>
            <button id="close__nav-btn"><i class="fa fa-times"></i></button>

        </div>
    </nav>
    <!-- ================== END OF NAV ============= -->

    <section class="form__section">
        <div class="container form__section-container">
            <h2>Edit Category</h2>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <textarea rows="4" placeholder="Description"></textarea>
                <button class="btn " type="submit ">Edit Category</button>
            </form>
        </div>
    </section>


    <footer>
        <div class="footer__socials ">
            <a href=" " target="_blank "><i class="fab fa-youtube "></i></a>
            <a href=" " target="_blank "><i class="fab fa-facebook "></i></a>
            <a href=" " target="_blank "><i class="fab fa-instagram "></i></a>
            <a href=" " target="_blank "><i class="fab fa-linkedin "></i></a>
            <a href=" " target="_blank "><i class="fab fa-twitter "></i></a>
        </div>
        <div class="container footer__container ">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li>
                        <a href=" ">Art</a>
                    </li>
                    <li>
                        <a href=" ">Wild Life</a>
                    </li>
                    <li>
                        <a href=" ">Travel</a>
                    </li>
                    <li>
                        <a href=" ">Music</a>
                    </li>
                    <li>
                        <a href=" ">Science & Technology</a>
                    </li>
                    <li>
                        <a href=" ">Food</a>
                    </li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li>
                        <a href=" ">Online Support</a>
                    </li>
                    <li>
                        <a href=" ">Call Numbers</a>
                    </li>
                    <li>
                        <a href=" ">Emails</a>
                    </li>
                    <li>
                        <a href=" ">Social Support</a>
                    </li>
                    <li>
                        <a href=" ">Location</a>
                    </li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li>
                        <a href=" ">Safety</a>
                    </li>
                    <li>
                        <a href=" ">Repair</a>
                    </li>
                    <li>
                        <a href=" ">Recent</a>
                    </li>
                    <li>
                        <a href=" ">Popular</a>
                    </li>
                    <li>
                        <a href=" ">Categories</a>
                    </li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li>
                        <a href=" ">Home</a>
                    </li>
                    <li>
                        <a href=" ">Blog</a>
                    </li>
                    <li>
                        <a href=" ">About</a>
                    </li>
                    <li>
                        <a href=" ">Services</a>
                    </li>
                    <li>
                        <a href=" ">Contact</a>
                    </li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright ">
            <small>copyright &copy; TeeCee Tutorials</small>
        </div>
    </footer>
    <script src="./main.js "></script>
</body>

</html>