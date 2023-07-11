<?php
$config = require base_path('config.php');
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $db = new Database($config['database']);

    if(!Validator::string($_POST['body'],1,1000))
    {
        $errors['body'] = 'body is incorrect!';
    }
    if(empty($errors)){
    $db->query("insert into notes (`body` , `user_id`) VALUES (:body , :user_id)" , [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
        header('Location:/notes');
}
}

view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);