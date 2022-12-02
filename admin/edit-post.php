<?php
    include '../partials/header.php';


    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM posts WHERE id = '$id'";
        $result = mysqli_query($con, $query);
    
        foreach($result as $row) {
            $title = $row['title'];
           
        }
    }
    else {
        // redirect to dashboard
        header('location: ' . ROOT_URL . 'admin/index.php');
    }

?>



    <section class="form__section">
        <div class="container form__section-container">

            <?php if (isset($_SESSION['edit-post'])): ?>
                <div class="alert__message error">
                    <p style="font-size: 20px;">
                        <?=
                            $_SESSION['edit-post'];
                            unset($_SESSION['edit-post']);
                        ?>
                    </p>
                </div>
            <?php endif ?>

            <h2>Edit Post</h2>
            <form action="<?= ROOT_URL ?>admin/edit-post-logic.php" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="text" placeholder="Title" name="title" value="<?= $title  ?>">
                <select name="category_id">
                    <?php

                        $query = "SELECT * FROM posts WHERE id = '$id'";
                        $result = mysqli_query($con, $query);

                        foreach($result as $row) {
                            $title = $row['title'];
                            $category = $row['category'];
                            $category_id = $row['category_id'];
                            $body = $row['body'];
                            $is_featured = $row['is_featured'];
                            $prev_thumbnail = $row['thumbnail'];
                        }

                        $query = "SELECT * FROM categories";
                        $result = mysqli_query($con, $query);
                        foreach ($result as $value) {
                            $title_cat = $value['title'];
                            $id_cat = $value['id'];
                            
                            if($category == $title_cat) {
                                ?>
                                    <option value="<?= $id_cat  ?>" selected><?= $title_cat  ?></option>
                                <?php
                            }
                            else{
                                ?>
                                    <option value="<?= $id_cat  ?>" ><?= $title_cat  ?></option>
                                <?php
                            }
                            
                        }

                    ?>
                </select>

                <textarea rows="10" name="body" placeholder="Body"><?= $body  ?></textarea>

                <?php if($_SESSION['user']['is_admin'] == 1) : ?>
                    <div class="form__control inline">
                        <?php 
                            if($is_featured == 1) {
                                ?>
                                    <input type="checkbox" id="is_featured" value="1" name="is_featured" checked>
                                <?php
                            }
                            else {
                                ?>
                                    <input type="checkbox" id="is_featured" value="0" name="is_featured">
                                <?php
                            }
                        ?>
                        <label for="is_featured">Featured</label>
                    </div>
                <?php endif ?>

                <div class="form__control">
                    <input type="hidden" name="prev_thumbnail" value="<?= $prev_thumbnail ?>">
                    <label for="thumbnail">Change Thumbnail</label>
                    <input type="file" id="thumbnail" name="thumbnail">
                </div>
                <button class="btn" name="update_post" type="submit ">Update Post</button>
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