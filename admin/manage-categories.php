<?php
include 'partials/header.php';
?>


    <section class="dashboard">
        <?php  if (isset($_SESSION['add-category-success'])): ?>
            <div class="container alert__message success">
                <p style="font-size: 20px;">
                <?=
                        $_SESSION['add-category-success'];
                        unset($_SESSION['add-category-success']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="fa fa-angle-right"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="fa fa-angle-left"></i></button>
            <aside>
                <ul>
                    <li>
                        <a href="./add-post.php"><i class="fa fa-pen"></i>
                            <h5>Add post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="./dashboard.php"><i class="fa fa-vcard"></i>
                            <h5>Manage posts</h5>
                        </a>
                    </li>
                    <li>
                        <a href="./add-user.php"><i class="fa fa-user-plus"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="./manage-users.php"><i class="fa fa-users-cog"></i>
                            <h5>Manage User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="./add-category.php"><i class="fa fa-edit"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="./manage-categories.php" class="active"><i class="fa fa-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Categories</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM categories";
                            $result = mysqli_query($con, $query);
                            if(mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                                    $category_id = $row['id'];
                                    $title = $row['title'];
                                    ?>

                                    <tr>
                                        <td><?= $title ?></td>
                                        <td><a href="<?= ROOT_URL ?>admin/edit-category.php?id=<?= $category_id ?>" class="btn sm">Edit</a></td>
                                        <td><a href="<?= ROOT_URL ?>admin/delete-category.php" class="btn sm danger">Delete</a></td>
                                    </tr>

                                    <?php
                                }
                            }
                            else {
                                ?>
                                    <tr>
                                        <td>No record found</td>
                                    </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </main>
        </div>
    </section>

<?php
include '../partials/footer.php';
?>