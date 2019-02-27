<?php 
$hosten = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'classicmodels';
$charset = 'utf8';

// SET DSN ( Data Source Name )
$dsn = 'mysql:host='. $hosten . ';dbname=' . $dbname . ';charset=' . $charset;

// Create a PDO instance
try {
    $conn = new PDO($dsn, $user, $password);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Förhindrar PDO att använda stimulerade förfrågningar
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

