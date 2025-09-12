<?php

class DB
{
    private $db;

    public function __construct($config)
    {
        $dsn = $this->getDns($config);
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';
        $this->db = new PDO($dsn, $user, $password);
    }

    private function getDns($config)
    {
        $driver = $config['driver'];

        if ($driver == 'sqlite') {
            return $driver . ':' . $config['database'];
        }

        if ($driver == 'mysql') {
            return "{$driver}:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
        }

        return '';
    }
    // ...existing code...

    public function query($query, $class = null, $param = [])
    {

        $prepare = $this->db->prepare($query);

        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }

        $prepare->execute($param);

        return $prepare;
    }
}

$database = new DB($config['database']);
