<?php require_once('db/config.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>
   <!-- HEADER -->
   <header>
        <nav>
            <!-- MOBILE BTN:DROPDOWN -->
            <label for="toggle"><i class="fas fa-align-justify"></i></label>
            <input type="checkbox" id="toggle">
            <!-- MOBILE/WEB NAVIGATION -->
            <ul class="menu">  
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="products">Products</a></li>
                <li><a href="customers">Customers</a></li>
            </ul>
        </nav>
    </header>