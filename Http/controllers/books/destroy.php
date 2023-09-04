<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class );


$currentUserId = 1;

$note = $db->query('select * from books where id = :id',['id' => $_POST['id']])->FindOrFail();
authorize($book['user_id'] == $currentUserId);
 $db->query('delete  from books where id = :id', ['id' => $_POST['id']]);

header("Location:  /books");
exit();








