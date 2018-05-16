<?php


try {
    $username = 'homestead';
    $pass = 'secret';

    $dht = new PDO(
        'mysql:host=localhost:3306;dbname=php_mysql',
        $username,
        $pass
    );

    echo "Connected!";
} catch (PDOException $exception) {
    echo 'Error!: ' . $exception->getMessage();
}

$sql = "SELECT * FROM users";

$query = $dht->prepare($sql);
$query->execute();

echo '<pre>';
print_r($query->fetchAll(PDO::FETCH_OBJ));
echo '</pre>';

$userId = 1;

$query1 = $dht->prepare("
    SELECT * 
    FROM users 
    WHERE id = :user_id
");

$query1->bindValue(
    ':user_id',
    $userId,
    PDO::PARAM_INT
);

$query1->execute();
echo '<pre>';
print_r($query1->fetch(PDO::FETCH_OBJ));
echo '<pre>';

$email = 'new@email.com';

$query2 = $dht->prepare("
    SELECT users.*, user_addresses.address
    FROM users
    LEFT JOIN user_addresses 
      ON users.id = user_addresses.user_id
    WHERE users.id = :user_id
      AND users.email = :email
");

$query2->bindValue(
    ':user_id',
    $userId,
    PDO::PARAM_INT
);

$query2->bindValue(
    ':email',
    $email
);

$query2->execute();

echo '<pre>';
print_r($query2->fetchAll(PDO::FETCH_OBJ));
echo '</pre>';

// ORDER BY field_name ASC/DESC

$query3 = $dht->prepare("
    SELECT * 
    FROM towns 
    ORDER BY title ASC
");

$query3->execute();

echo '<pre>';

print_r($query3->fetchAll(PDO::FETCH_OBJ));

echo '</pre>';
