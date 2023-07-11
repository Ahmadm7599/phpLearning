<?php
require('Validator.php');
$config = require("config.php");
$heading = "create new note";

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $db = new Database($config['database']);
    $errors = [];
    if(Validator::string($_POST['body']))
    {
        $errors['body'] = 'body is incorrect!';
    }
    if(empty($errors)){
    $db->query("insert into notes (`body` , `user_id`) VALUES (:body , :user_id)" , [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
}
}

require("views/note-create.view.php");