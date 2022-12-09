<?php
require ("functions.php");
// require ("router.php");
require("database/Database.php");

$config = require("config.php");
$db = new Database($config['database']);

// avoid sql injection
// first way
// $id = $_GET['id'];
// $posts = $db->query("select * from posts where id = ?", [$id])->fetchAll();
// dd($posts);
// second way 
$id = $_GET['id'];
$posts = $db->query("select * from posts where id = :id", [':id' => $id])->fetchAll();
dd($posts);