<?php

namespace Shop\Models;

use Shop\Database;

/**
 * Class Product
 * @package Shop\Models
 */
class Product
{
    /**
     * @var Database
     */
    private $connection;

    /**
     * Product constructor.
     * @param Database $connection
     */
    public function __construct(Database $connection)
    {
        $this->connection = $connection;
    }


    /**
     * @param null $limit
     * @param string $orderBy
     * @param string $orderWay
     * @return bool|\PDOStatement
     */
    public function getProducts(
        $limit = NULL,
        $orderBy = 'id',
        $orderWay = 'ASC'
    ) {
        $sql = "SELECT * FROM products";

        $sql = $sql . ' ORDER BY ' . $orderBy . ' ' . $orderWay;

        if ($limit != NULL) {
            $sql = $sql . ' LIMIT ' . $limit;
        }


        $result = $this->connection->query($sql);

        return $result;
    }

    public function saveProduct($product)
    {
        $sql = sprintf(
            "INSERT INTO products
            (title, description, price, quantity)
            VALUES ('%s', '%s', '%s', '%d')",
            $product['title'],
            $product['description'],
            $product['price'],
            $product['quantity']
            );

        $this->connection->query($sql);
    }
}
