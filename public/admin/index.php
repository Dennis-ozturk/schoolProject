<?php require_once('db/config.php'); ?>
<?php require_once('src/select_users.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
</head>
<body class="admin_page">
    <h1>Admin panel</h1>
    <form action="" method="POST" class="form">

        <span>Username</span> 
        <br>
        <input type="text" name="username" placeholder="Username">
        <br>
        <br>
        <span>Password</span>
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <br>
        <input type="submit" name="sub" value="Submit">
    </form>



    <?php
        if(isset($_POST['sub'])){
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if($stmt->rowCount() > 0){
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    if($row['username'] == $username){
                        if($row['password'] == $password){
                            echo("Found User");
                            $_SESSION['admin'] = $username;
                            header('Location: dashboard.php');
                        }
                    }
                }
            }
            echo("<br> Please try again");
       
        }
    ?>




</body>
</html>


