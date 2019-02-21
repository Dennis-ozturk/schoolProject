<?php 
//SELECT SQL
$sql = "SELECT * FROM classicmodels.users WHERE username = 'dowinos' AND password = 'hejsan123';";    

// SANITIZE
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// PREPARE
$stmt = $conn->prepare("SELECT * FROM classicmodels.users WHERE username = ? AND password = ?;");

//EXECUTE
$stmt->execute([$user, $password]);

//COUNT ROWS
$rowcount = $stmt->rowCount();

//CHECK IF ROWS BIGGER THAN 1
$userLoggedIn = ($rowcount > 0);

//ECHO TOTAL USERS
echo("Antal användare " . $rowcount . "<br>");

if($userLoggedIn){
    $_SESSION['user'] = $user;
    echo("Användare $user inloggad, välkommen!<br>");
}else{
    echo("Det finns ingen sån användare<br>");
}
