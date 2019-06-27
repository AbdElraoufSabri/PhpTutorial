<?php


class Connection
{
    /**
     * @param $config
     * @return PDO object to the connection instance
     */
    public static function init($config)
    {
        try {
            return new PDO(
                $config['db_type'] . ':host=' . $config['db_host'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOException $exception) {
            var_dump($exception->getMessage());
        }
    }

}