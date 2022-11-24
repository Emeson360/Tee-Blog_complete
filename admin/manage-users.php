<?php
include '../partials/header.php';
?>


<section class="dashboard">
    <?php  if (isset($_SESSION['add-user-success'])): ?>
        <div class="container alert__message success">
            <p style="font-size: 20px;">
            <?=
                    $_SESSION['add-user-success'];
                    unset($_SESSION['add-user-success']);
                ?>
            </p>
        </div>
    <?php endif ?>
    <?php  if (isset($_SESSION['edit-user-success'])): ?>
        <div class="container alert__message success">
            <p style="font-size: 20px;">
            <?=
                    $_SESSION['edit-user-success'];
                    unset($_SESSION['edit-user-success']);
                ?>
            </p>
        </div>
    <?php endif ?>
    <?php  if (isset($_SESSION['delete'])): ?>
        <div class="container alert__message error">
            <p style="font-size: 20px;">
                <?=
                    $_SESSION['delete'];
                    unset($_SESSION['delete']);
                ?>
            </p>
        </div>
    <?php endif ?>
    <?php  if (isset($_SESSION['delete-success'])): ?>
        <div class="container alert__message success">
            <p style="font-size: 20px;">
            <?=
                    $_SESSION['delete-success'];
                    unset($_SESSION['delete-success']);
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
                    <a href="./index.php"><i class="fa fa-vcard"></i>
                        <h5>Manage posts</h5>
                    </a>
                </li>
                <li>
                    <a href="./add-user.php"><i class="fa fa-user-plus"></i>
                        <h5>Add User</h5>
                    </a>
                </li>
                <li>
                    <a href="./manage-users.php" class="active"><i class="fa fa-users-cog"></i>
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
                        <th>Name</th>
                        <th>Useername</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $current_admin_id = $_SESSION['user']['id'];
                        $query = "SELECT * FROM users WHERE NOT id = '$current_admin_id'";
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            foreach ($result as $row) {
                                $name = "{$row['firstname']} {$row['lastname']}";
                                $username = $row['username'];
                                $is_admin = $row['is_admin'];
                                $id = $row['id'];
                                if($is_admin == '1') {
                                    $is_admin = "Yes";
                                }
                                elseif($is_admin == '0') {
                                    $is_admin = "No";
                                }
                                ?>
                             
                                <tr>
                                    <td><?= $name ?></td>
                                    <td><?= $username ?></td>
                                    <td><a href="./edit-user.php?id=<?= $id ?>" class="btn sm">Edit</a></td>
                                    <td><a href="<?= ROOT_URL ?>admin/delete-user-logic.php?id=<?= $id ?>" class="btn sm danger" onclick="confimation_box();">Delete</a></td>
                                    <td><?= $is_admin ?></td>
                                </tr>

                               <?php
                            }
                        }
                    ?>
                   
                </tbody>
            </table>
        </main>
    </div>
</section>

<!-- Delete user -->
<script>
	
	function confimation_box() {
		if (confirm('Are you sure ?')) {
			return true;
		}
		else {
			event.stopPropagation();
			event.preventDefault();
		}
	}
	
	
</script>

<?php
include '../partials/footer.php';
?>