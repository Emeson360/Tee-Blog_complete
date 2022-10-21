<?php
include 'partials/header.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$query = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($con, $query);
foreach($result as $row) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
}

?>

    <section class="form__section">
        <?php  if (isset($_SESSION['edit-user'])): ?>
            <div class="container alert__message success">
                <p style="font-size: 20px;">
                <?=
                        $_SESSION['edit-user'];
                        unset($_SESSION['edit-user']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <div class="container form__section-container">
            <h2>Edit User</h2>
            <form action="<?= ROOT_URL ?>admin/edit-user-logic.php" method="POST">
                <input type="text" placeholder="First Name" value="<?= $firstname ?>" name="firstname">
                <input type="text" placeholder="Last Name" value="<?= $lastname ?>" name="lastname">
                <select name="is_admin">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>

                <button class="btn" type="submit" name="update_user">Update User</button>

            </form>
        </div>
    </section>

<?php
include '../partials/footer.php';
?>