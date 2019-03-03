<?php require_once('db/config.php'); ?>
<?php require_once('src/select_users.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
        $object = new User();
        echo $object->getAllUsers();
    ?>
</body>
</html>