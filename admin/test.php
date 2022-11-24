<?php
include '../config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= ROOT_URL ?>admin/test-logic.php" method="POST">
        <input type="checkbox" name="checkbox_name"> Featured
        <input type="submit" value="Save" name="send">

    </form>
    <?= __DIR__ ?>
    
</body>
</html>