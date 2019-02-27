<?php
require_once('../includes/header.php');
session_start();
print_r($_SESSION);

?>


<Main class="product-container">
    <a class="back-page" href="">Previous page</a>
    <section class="product">
        <img src="<?php ?>https://picsum.photos/600/500" alt="product-<?php ?>">
        <div class="vertical-hr"></div>
        <section>
            <section>
                <h1><?php ?>Header2</h1>
                <h3>Description:</h3>
                <p><?php ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a pharetra nisl. Donec facilisis orci consequat odio egestas fringilla. Sed posuere sit amet eros ac dignissim. Donec vel maximus dolor. Suspendisse lorem nisl, dapibus nec rutrum non, pulvinar eu lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed id finibus lorem. Suspendisse sit amet pellentesque quam. Pellentesque varius sodales odio, vitae semper erat molestie et. Suspendisse cursus nibh risus, eu tristique quam tempus nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </section>
            <p>Article Number: <?php ?></p>
            <section>
            <p>Price: $1894<?php ?></p>
            <button>Add to cart</button>
            </section>
        </section>
    </section>
</Main>


<?php
require_once('../includes/footer.php');
?>