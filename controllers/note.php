<?php
$config = require("config.php");
$db = new Database($config['database']);

$currentUserId = 1;
$heading = "note";

$note = $db->query("select * from notes where id = :id" ,['id' => $_GET['id']])->findOrFail();
autorized($note['user_id']==$currentUserId);
require("views/note.view.php");