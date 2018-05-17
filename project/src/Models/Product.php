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
     * @return bool|\PDOStatement
     */
    public function getProducts()
    {
        $sql = "SELECT * FROM products";

        $result = $this->connection->query($sql);

        return $result;
    }
}
