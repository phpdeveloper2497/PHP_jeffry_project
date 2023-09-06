<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

//$currentUserId = 28;

$book = $db->query('select * from books where id = :id',['id' => $_GET['id']])->FindOrFail();


authorize($book['user_id'] == $_SESSION['user']['user_id'] ?? '');




view("books/show.view.php",[
'head_name' => 'Book',
'book' => $book
]);
















