<?php
include '../partials/header.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    foreach($result as $row) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $is_admin = $row['is_admin'];
    }
}
else {
    // redirect to dashboard
    header('location: ' . ROOT_URL . 'admin/index.php');
}


?>

    <section class="form__section">
       
        <div class="container form__section-container">
        <?php  if (isset($_SESSION['edit-user'])): ?>
            <div class="alert__message error">
                <p style="font-size: 20px;">
                    <?=
                        $_SESSION['edit-user'];
                        unset($_SESSION['edit-user']);
                    ?>
                </p>
            </div>
        <?php endif ?>
            <h2>Edit User</h2>
            <form action="<?= ROOT_URL ?>admin/edit-user-logic.php" method="POST">
                <input type="hidden" value="<?= $id ?>" name="id">
                <input type="text" placeholder="First Name" value="<?= $firstname ?>" name="firstname">
                <input type="text" placeholder="Last Name" value="<?= $lastname ?>" name="lastname">
                <select name="is_admin">
                    <?php if($is_admin == '0'): ?>
                        <option value="0" selected>Author</option>
                        <option value="1">Admin</option>
                    <?php elseif($is_admin == '1'): ?>
                        <option value="0">Author</option>
                        <option value="1" selected>Admin</option>
                    <?php endif ?>
                </select>

                <button class="btn" type="submit" name="update_user">Update User</button>

            </form>
        </div>
    </section>

<?php
include '../partials/footer.php';
?>