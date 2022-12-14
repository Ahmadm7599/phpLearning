<?php
$config = require("config.php");
$db = new Database($config['database']);

$heading = "create new note";

/* first way */
// if(isset($_POST['body']))
// {
//     $db->query("insert into notes (`body` , `user_id`) VALUES (:body , :user_id)" , [
//         'body' => $_POST['body'],
//         'user_id' => 1
//     ]);
// }
// second way
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $db->query("insert into notes (`body` , `user_id`) VALUES (:body , :user_id)" , [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
}

   
require("views/note-create.view.php");