<h2>Add product</h2>

<form action="" method="post">
    <label for="title">Pavadinimas</label>
    <input type="text" name="title" value="">
    <br>
    <label for="description">Aprasymas</label>
    <textarea name="description"></textarea>
    <br>
    <label for="price">Kaina</label>
    <input type="number" name="price" step="0.01" value="">
    <br>
    <label for="quantity">Kiekis</label>
    <input type="number" name="quantity" step="1" value="">
    <br>
    <input type="submit" name="submit_button" value="Saugoti">
</form>

<?php

require_once 'bootstrap.php';

use Shop\Models\Product;

if (isset($_POST['submit_button'])) {
    $data = [];

    $data['title'] = $_POST['title'];
    $data['description'] = $_POST['description'];
    $data['price'] = $_POST['price'];
    $data['quantity'] = $_POST['quantity'];

    $productClass = new Product($conn);

    $productClass->saveProduct($data);

    header('Location: http://phppamokos.test/project/all_products.php');
}
