<?php
class Database {
    public $connection;
    public function __construct($config)
    {
        // mysql connection with pdo
        $dsn = 'mysql:'.http_build_query($config ,'',';');
        // $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

        // $this->connection = new PDO($dsn, 'root' , '' , [
        //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSO
        // ]);

        // sqlite connection with pdo
        $this->connection = new PDO("sqlite:database/database.sqlite", 'root' , '' , [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        // $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function query($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt;
    }

}