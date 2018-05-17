<?php

namespace Shop;


class Database
{
    private $_conn;

    public function __construct($params)
    {
        try {
            $this->_conn = new \PDO(
                sprintf(
                    '%s:host=%s:%d;dbname=%s',
                    $params['type'],
                    $params['host'],
                    $params['port'],
                    $params['dbname']
                ),
                $params['username'],
                $params['password']
            );
            $this->_conn->setAttribute(
                \PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION
            );
        } catch (\PDOException $exception) {
            die('Error: ' . $exception->getMessage());
        }
    }

    public function query($sql)
    {
        $stmt = $this->_conn->query($sql);

        return $stmt;
    }
}
