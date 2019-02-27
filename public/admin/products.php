<?php include_once('includes/header.php'); ?>
<?php require_once('src/select_products.php'); ?>

<div class="dashboard">
    <?php  
    
    if($stmt->rowCount() > 0){
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
        <br>
            <form action="" method="POST" class="productsEdit">
                <textarea style="display:none;" name="productCode" rows="2" cols="20"><?php echo($row['productCode']); ?></textarea>
                <textarea name="productName" rows="2" cols="10"><?php echo($row['productName']); ?></textarea>
                <textarea name="productLine" rows="2" cols="10"><?php echo($row['productLine']); ?></textarea>
                <textarea name="productVendor" rows="2" cols="10"><?php echo($row['productVendor']); ?></textarea> 
                <textarea name="productDescription" rows="2" cols="10"><?php echo($row['productDescription']); ?></textarea> 
                <textarea name="quantityInStock" rows="2" cols="10"><?php echo($row['quantityInStock']); ?></textarea> 
                <textarea name="buyPrice" rows="2" cols="10"><?php echo($row['buyPrice']); ?></textarea>  
                <textarea name="MSRP" rows="2" cols="10"><?php echo($row['MSRP']); ?></textarea> 

                <input type="submit" name="action">
            </form>
        <br>
        <?php 
        }
    }
    if(isset($_POST['action'])){
        $productCode = $_POST['productCode'];
        $productName = $_POST['productName'];
        $productLine = $_POST['productLine'];
        $productVendor = $_POST['productVendor'];
        $productDescription = $_POST['productDescription'];
        $quantityInStock = $_POST['quantityInStock'];
        $buyPrice = $_POST['buyPrice'];
        $MSRP = $_POST['MSRP'];

        $sql = "UPDATE classicmodels.products
            SET 
            productName=:productName,
            productLine=:productLine,
            productVendor=:productVendor,
            productDescription=:productDescription,
            quantityInStock=:quantityInStock,
            buyPrice=:buyPrice,
            MSRP=:MSRP
            WHERE productCode=:productCode";

        $stmt = $conn->prepare($sql);
        
        $update = $stmt->execute([
            ":productCode" => $productCode, 
            ":productName" => $productName, 
            ":productLine" => $productLine,
            ":productVendor" => $productVendor,
            ":productDescription" => $productDescription,
            ":quantityInStock" => $quantityInStock,
            ":buyPrice" => $buyPrice,
            ":MSRP" => $MSRP]);
        }

    
    ?>
</div>
<?php include_once('includes/footer.php'); ?>