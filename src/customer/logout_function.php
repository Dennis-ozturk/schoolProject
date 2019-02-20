<?php 

if(isset($_GET['logout'])){
    session_destroy();
    header('../../public/index.php');
}