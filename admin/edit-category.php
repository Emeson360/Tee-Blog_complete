<?php
    include './partials/header.php';

    if (isset($_GET['id'])) {
        $category_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT * FROM categories WHERE id = '$category_id' LIMIT 1";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0) {
            foreach ($result as $row) {
                $title = $row['title'];
                $description = $row['description'];
                
            }
        }
    }
?>

<section class="form__section">
    <div class="container form__section-container">
    <h2>Edit Category</h2>
        <?php  if (isset($_SESSION['edit-category'])): ?>
            <div class="alert__message error">
                <p style="font-size: 20px;">
                <?=
                        $_SESSION['edit-category'];
                        unset($_SESSION['edit-category']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        
        <form action="<?= ROOT_URL ?>admin/edit-category-logic.php" method="POST">
            <input type="hidden" value="<?= $category_id ?>" name="id">
            <input type="text" placeholder="Title" value="<?= $title?>" name="title">
            <textarea rows="4" placeholder="Description" name="description"><?= $description?></textarea>
            <button class="btn " type="submit" name="submit">Edit Category</button>
        </form>
    </div>
</section>

<?php
include '../partials/footer.php';
?> 