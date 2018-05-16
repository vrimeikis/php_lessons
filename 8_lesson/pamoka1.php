<?php

try {
    $username = 'homestead';
    $pass = 'secret';

    $dht = new PDO(
        'mysql:host=localhost:3306;dbname=php_mysql',
        $username,
        $pass
    );
} catch (Exception $exception) {
    echo 'Error!: ' . $exception->getMessage();
}

// SIMPLE SELECT WITH JOIN

$regionId = '1';

$sql = "SELECT regions.title AS region_title,
    shops.title AS shop_title
    FROM regions
    JOIN shops ON regions.id = shops.region_id
    WHERE regions.id = :region_id";

$query = $dht->prepare($sql);
$query->bindValue(':region_id', $regionId, PDO::PARAM_INT);
$query->execute();

//echo '<pre>';
//print_r($query->fetchAll(PDO::FETCH_OBJ));
//echo '</pre>';
$data = $query->fetchAll(PDO::FETCH_OBJ);
echo '<ul>';
foreach ($data as $row) {
    echo '<li>' . $row->shop_title .
        ' priklauso regionui ' .
        $row->region_title . '</li>';
}
echo '</ul>';

// SELECT USING CONCAT

$sql1 = "SELECT
    CONCAT(shops.title, ' priklauso regionui ', regions.title) AS row_line
    FROM regions
    JOIN shops ON regions.id = shops.region_id";

$query1 = $dht->prepare($sql1);
$query1->execute();

//echo '<pre>';
//print_r($query1->fetchAll(PDO::FETCH_OBJ));
//echo '</pre>';
echo '---------------------------------------';
echo '<ul>';
foreach ($query1->fetchAll(PDO::FETCH_OBJ) as $row) {
    echo '<li>' . $row->row_line . '</li>';
}
echo '</ul>';


$sql2 = "SELECT regions.*,
    COUNT(shops.id) AS shop_count
    FROM regions
    JOIN shops ON regions.id = shops.region_id
    GROUP BY regions.title";

$query2 = $dht->prepare($sql2);
$query2->execute();

//echo '<pre>';
//print_r($query2->fetchAll(PDO::FETCH_OBJ));
//echo '</pre>';

echo '---------------------------------------';
echo '<ul>';
foreach ($query2->fetchAll(PDO::FETCH_OBJ) as $row) {
    echo '<li>' . $row->title . '&nbsp; &copy; turi ' . $row->shop_count . '</li>';
}
echo '</ul>';
