<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$books = $db->query('select * from books')->getAll();


view("books/index.view.php",[
    'head_name' => 'Books world',
    'books' =>$books
]);

?>


