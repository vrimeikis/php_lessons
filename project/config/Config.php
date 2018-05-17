<?php

namespace Config;


class Config
{
    /**
     * @var array
     */
    private $conf = [
        'db' => [
            'type' => 'mysql',
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'php_mysql',
            'username' => 'homestead',
            'password' => 'secret',
        ]
    ];

    /**
     * @param null $index
     * @return array|mixed
     */
    public function getConfig($index = NULL)
    {
        if ($index != NULL) {
            return $this->conf[$index];
        }

        return $this->conf;
    }
}
