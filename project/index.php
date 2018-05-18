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
$productClass = new Product($conn);

$products = $productClass->getProducts(2)
    ->fetchAll(PDO::FETCH_OBJ);

?>
<table border="1" width="100%">
    <tr>
        <?php
            foreach ($products as $product) {
                echo '<td>' .
                    $product->title .
                    ' ' .
                    $product->price .
                    '</td>';
            }
        ?>
    </tr>
</table>
