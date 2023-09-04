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

    if(! Validator::string($_POST['title'],1,255)){
        $errors['title'] = "the table must be filled in and cannot exceed 255 characters.";
    }
    if(! Validator::string($_POST['body'],1,1000)){
        $errors['body'] = "the table must be filled in and cannot exceed 1000 characters.";
    }

    if(! empty($errors))
    {
       return view("notes/create.view.php",[
            'head_name' => 'Note-create',
            'errors' => $errors
           ]);
    }

    $db->query('INSERT INTO notes(title,body,user_id) VALUES(:title,:body, :user_id)', [
        'title' => $_POST['title'],
        'body' =>$_POST['body'],
        'user_id' => 1
    ]);


    header('location: /notes');
    die();

}
