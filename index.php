<?php
require ("functions.php");
// require ("router.php");
require("database/Database.php");

$config = require("config.php");
$db = new Database($config['database']);
$posts = $db->query("select * from posts")->fetchAll();
foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

$post = $db->query("select * from posts where id == 2")->fetch();

dd($post);