<?php

require_once 'bootstrap.php';

use Shop\Models\Product;

$productClass = new Product($conn);

$productId = $_GET['product_id'];

if (isset($_POST['submit_button'])) {
    $data = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity'],
    ];

    $productClass->updateProduct($productId, $data);

    header('Location: http://phppamokos.test/project/all_products.php');

} else {
    $product = $productClass->getById($productId)
        ->fetch(PDO::FETCH_OBJ);
}

?>

<h2>Edit product</h2>

<form action="" method="post">
    <label for="title">Pavadinimas</label>
    <input type="text" name="title" value="<?php echo $product->title; ?>">
    <br>
    <label for="description">Aprasymas</label>
    <textarea name="description"><?php echo $product->description; ?></textarea>
    <br>
    <label for="price">Kaina</label>
    <input type="number" name="price" step="0.01" value="<?php echo $product->price; ?>">
    <br>
    <label for="quantity">Kiekis</label>
    <input type="number" name="quantity" step="1" value="<?php echo $product->quantity; ?>">
    <br>
    <input type="submit" name="submit_button" value="Saugoti">
</form>
