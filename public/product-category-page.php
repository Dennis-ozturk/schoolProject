<?php
require_once('../db/config.php');
require_once('../includes/header.php');
session_start();
?>


<Main class="category-container">

<?php 

$stmt = $conn->query("SELECT * FROM products");
        while ($row = $stmt->fetch()){

?>
    <a class="product-card" href="products.php?product=<?php echo $row['productName'];?>">
        <section name="<?php echo $row['productName']; ?>">
            <img src="<?php ?>https://picsum.photos/300/300" alt="product-<?php echo $row['productCode'];?>">
            <section>
                <h2><?php echo $row['productName'];?></h2> <!-- Product name -->
                <p class="shortDescription"><?php echo $row['productDescription'];?></p> <!-- Small description -->
                <p>Price: $<?php echo $row['buyPrice'];?></p>
                <p class="card-readmore">Read more</p>
            </section>
        </section>
    </a>
    <?php 
    }
    $page = $_SERVER["REQUEST_URI"];
    $_SESSION['page'] = $page;

    ?>
</Main>


<?php
require_once('../includes/footer.php');
?>