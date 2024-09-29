<!-- header -->
<header class="header">
<div class="header_body">
    <a href="index.php" class="logo">Shopify</a>
    <nav class="navbar">
        <a href="index.php">Add Products</a>
        <a href="view_products.php">View Products</a>
        <a href="shop_products.php">Shop</a>
    </nav>
    <?php
$select_product=mysqli_query($conn,"Select * from `cart`") or die('query failed');
$row_count=mysqli_num_rows($select_product);

    ?>
    <!--Shopping cart icon-->
    <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i><span><sup><?php echo $row_count ?></sup></span></a>
    <!--<div id="menu-btn" class="fas fa-bars"></div>-->
</div>
</header>