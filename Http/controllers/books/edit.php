<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id',['id' => $_GET['id']])->FindOrFail();

authorize($note['user_id'] == $currentUserId);

view("notes/edit.view.php",[
    'head_name' => 'Note',
//    'errors' => [],
    'note' => $note
]);
















