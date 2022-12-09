<?php
class Database {
    public $connection;
    public function __construct($config)
    {
        // mysql connection with pdo
        $dsn = 'mysql:'.http_build_query($config ,'',';');

        $this->connection = new PDO($dsn, 'root' , '' , [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        // sqlite connection with pdo
        // $this->connection = new PDO("sqlite:database/database.sqlite", 'root' , '' , [
        //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        //     ]);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function query($query , $params=[])
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }

}