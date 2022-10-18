<?php
include 'partials/header.php';
?>



    <section class="dashboard">
        <?php if (isset($_SESSION['signin-success'])): ?>
            <div class="container alert__message success">
                <p style="font-size: 20px;">
                    <?=
                        $_SESSION['signin-success'];
                        unset($_SESSION['signin-success']);
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
                        <a href="<?= ROOT_URL ?>admin/add-post.php"><i class="fa fa-pen"></i>
                            <h5>Add post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/index.php" class="active"><i class="fa fa-vcard"></i>
                            <h5>Manage posts</h5>
                        </a>
                    </li>
                    <?php if(isset($_SESSION['user-role'])): ?>
                        <?php if($_SESSION['user-role'] == 1): ?>
                            <li>
                                <a href="<?= ROOT_URL ?>admin/add-user.php"><i class="fa fa-user-plus"></i>
                                    <h5>Add User</h5>
                                </a>
                            </li>
                            <li>
                                <a href="<?= ROOT_URL ?>admin/manage-users.php"><i class="fa fa-users-cog"></i>
                                    <h5>Manage User</h5>
                                </a>
                            </li>
                            <li>
                                <a href="<?= ROOT_URL ?>admin/add-category.php"><i class="fa fa-edit"></i>
                                    <h5>Add Category</h5>
                                </a>
                            </li>
                            <li>
                                <a href="<?= ROOT_URL ?>admin/manage-categories.php"><i class="fa fa-list-ul"></i>
                                    <h5>Manage Categories</h5>
                                </a>
                            </li>
                        
                        <?php endif ?>
                    <?php endif ?>
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href=".<?= ROOT_URL ?>admindelete-category.php" class="btn sm danger">Delete</a></td>
                            
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-category.php" class="btn sm danger">Delete</a></td>
                            
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-category.php" class="btn sm danger">Delete</a></td>
                            
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-category.php" class="btn sm danger">Delete</a></td>
                            
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-category.php" class="btn sm danger">Delete</a></td>
                            
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-category.php" class="btn sm danger">Delete</a></td>
                            
                        </tr>
                    
                    </tbody>
                </table>
            </main>
        </div>
    </section>

<?php
include '../partials/footer.php';
?>