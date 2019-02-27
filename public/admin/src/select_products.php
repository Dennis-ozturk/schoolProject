<?php 

$sql = "SELECT * FROM classicmodels.products";    

// Förbered förfrågan till databasen
$stmt = $conn->prepare($sql);

// Skickar förfrågan till databasen
$select = $stmt->execute();



