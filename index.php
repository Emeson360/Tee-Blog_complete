<?php 
include './partials/header.php';

$query_post = mysqli_query($con, "SELECT * FROM posts WHERE is_featured = 1");
foreach ($query_post as $row) {
    $author_id = $row['author_id'];
    $category_id = $row['category_id'];
    $title = $row['title'];
    $category = $row['category'];
    $body = $row['body'];
    $thumbnail = $row['thumbnail'];
    $date = $row['date'];

}

?>

<?php if(mysqli_num_rows($query_post) > 0): ?>
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./images/<?= $thumbnail ?>">
            </div>
            <div class="post__info">
                <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category_id ?>" class="category__button"><?= $category ?></a>
                <h2 class="post_title">
                    <a href="<?= ROOT_URL ?>post.php"><?= $title ?></a>
                </h2>
                <p class="post__body"><?= substr($body, 0, 300)?>...</p>
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
        </div>
    </section>
<?php endif ?>
<!-- ================== END OF FEATURED ============= -->


<div class="posts <?= mysqli_num_rows($query_post) > 0 ? '' : 'section__extra-margin' ?>">
    <div class="container posts__container">
        <?php
            $query_post_all = mysqli_query($con, "SELECT * FROM posts ORDER BY id DESC LIMIT 6");
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
<!-- ================== END OF POSTS ============= -->

<section class="category__buttons">
    <div class="container category__buttons-container">
        <?php
            $query_cat = mysqli_query($con, "SELECT * FROM categories");
            foreach ($query_cat as $row) {
                $category_id = $row['id'];
                $title = $row['title'];
                ?>
                    <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category_id ?>" class="category__button"><?= $title ?></a>
                <?php
            }
        ?>
        
        
    </div>
</section>

<!-- ================== END OF CATEGORY BUTTONS ============= -->

<?php 
include './partials/footer.php';
?>