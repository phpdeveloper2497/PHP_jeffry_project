<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);



$errors=[];


if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    /* // CHECK  VALIDATOR for email
    dump(Validator::email('alkfnadkfinalkfnlsk'));
    dump(Validator::email('php2404@mail.ru')); */

    if(! Validator::string($_POST['name'],1,255)){
        $errors['name'] = "the table must be filled in and cannot exceed 255 characters.";
    }
    if(! Validator::string($_POST['author'],1,1000)){
        $errors['author'] = "the table must be filled in and cannot exceed 1000 characters.";
    }

    if(! empty($errors))
    {
       return view("books/create.view.php",[
            'head_name' => 'Add a new book',
            'errors' => $errors
           ]);
    }

    $db->query('INSERT INTO books(name,author, user_id) VALUES(:name,:author,:user_id)', [
        'name' => $_POST['name'],
        'author' =>$_POST['author'],
        'user_id' => 1
    ]);


    header('location: /books');
    die();

}
