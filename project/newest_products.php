<?php

require_once 'bootstrap.php';

use Shop\Models\Product;

?>

<u>
    <li><a href="index.php">Pagrindinis</a> </li>
    <li><a href="all_products.php">Visi produktai</a> </li>
    <li><a href="newest_products.php">Naujausi</a> </li>
</u>

<?php

$productsClass = new Product($conn);

$products = $productsClass->getProducts(2, 'id', 'DESC')
    ->fetchAll(PDO::FETCH_OBJ);

?>

<ul>

    <?php
    foreach ($products as $product) {
        echo '<li>' . $product->title . '</li>';
    }
    ?>

</ul>
