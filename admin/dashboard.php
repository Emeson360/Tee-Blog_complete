<?php
include 'partials/header.php';
?>



    <section class="dashboard">
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
                        <a href="./dashboard.php" class="active"><i class="fa fa-vcard"></i>
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
                        <a href="./manage-categories.php"><i class="fa fa-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
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
                            <td><a href="./edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="./delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="./edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="./delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="./edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="./delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="./edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="./delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="./edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="./delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="./edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="./delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                    
                    </tbody>
                </table>
            </main>
        </div>
    </section>

<?php
include '../partials/footer.php';
?>