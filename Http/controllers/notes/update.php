<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

//find the corresponding note
$note = $db->query('select * from notes where id = :id',['id' => $_POST['id']])->FindOrFail();


// authorize that the current user can edit the note
authorize($note['user_id'] == $currentUserId);

// validate the form
$errors = [];

// if no validation errors, update the record in the notes database table.
    if(! Validator::string($_POST['title'],1,255)){
        $errors['title'] = "the table must be filled in and cannot exceed 255 characters.";
    }
    if(! Validator::string($_POST['body'],1,1000)){
        $errors['body'] = "the table must be filled in and cannot exceed 1000 characters.";
    }

    if(count($errors)){
       $_SESSION['errors'] = $errors;
//        return view('notes/edit.view.php',[
//        'head_name' => 'Edit Note',
////        'errors' => $errors,
//        'note' => $note
//    ]);
        header('location: /note/edit?id='.$_POST['id']);
        die();
    }

/**
 * @var Database $db
 */
$db->query('update notes set title =:title, body =:body where id = :id',[
    'id' => $_POST['id'],
    'title' => $_POST['title'],
    'body' => $_POST['body']
    ])->getAll();
    
    header('location: /notes');
    die();














