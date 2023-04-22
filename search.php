<?php 
include './partials/header.php';


if(isset($_GET['search'])) {
    $search = filter_var($_GET['search'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $query_post_all = mysqli_query($con, "SELECT * FROM posts WHERE title LIKE '%$search%' ORDER BY id DESC");
}
else {
    header('location: ' . ROOT_URL . 'blog.php');
}

?>



<?php if(mysqli_num_rows($query_post_all) > 0): ?>
    <div class="posts section__extra-margin">
        <div class="container posts__container">
            <?php
                
                foreach ($query_post_all as $row) {
                    $author_id = $row['author_id'];
                    $category_id = $row['category_id'];
                    $title = $row['title'];
                    $category = $row['category'];
                    $body = $row['body'];
                    $thumbnail = $row['thumbnail'];
                    $date = $row['date'];
                    ?>

                        
                        <article class="post">
                            <div class="post__thumbnail">
                                <img src="./images/<?= $thumbnail ?>">
                            </div>
                            <div class="post__info">
                                <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category_id ?>" class="category__button"><?= $category ?></a>
                                <h3 class="post__title">
                                    <a href="<?= ROOT_URL ?>post.php"><?= $title ?></a>
                                </h3>
                                <p class="post__body"><?= substr($body, 0, 150)?>...</p>
                                <div class="post__author">
                                    <?php
                                        $query_user = mysqli_query($con, "SELECT * FROM users WHERE id = $author_id");
                                        foreach ($query_user as $value) {
                                            $name = $value['firstname'] . " " . $value['lastname'];
                                            $avatar = $value['avatar'];
                                        }
                                    ?>
                                    <div class="post__author-avatar">
                                        <img src="./images/<?= $avatar ?>" alt="">
                                    </div>
                                    <div class="post__author-info">
                                        <h5>By: <?= $name ?></h5>
                                        <small><?= date_format(new DateTime($date), "M d, Y-h:i:sa")  ?></small>
                                    </div>
                                </div>
                            </div>
                        </article>
                    
                        
                    <?php
                }
            ?>
        </div>
    </div>
<?php else: ?>
    <div class="section__extra-margin alert__message error e">
        <p>No post found for this search</p>
    </div>
<?php endif ?>
<!-- ================== END OF POSTS ============= -->


<?php 
include './partials/footer.php';
?>