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
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title" value="<?= $title?>">
            <textarea rows="4" placeholder="Description"><?= $description?></textarea>
            <button class="btn " type="submit" name="submit">Edit Category</button>
        </form>
    </div>
</section>

<?php
include '../partials/footer.php';
?> 