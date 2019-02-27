<?php 

$sql = "SELECT * FROM classicmodels.admin";    

// Förbered förfrågan till databasen
$stmt = $conn->prepare($sql);

// Skickar förfrågan till databasen
$stmt->execute();


