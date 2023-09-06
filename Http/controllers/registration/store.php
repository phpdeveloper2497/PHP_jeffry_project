<?php

use Core\App;
use Core\Database;
use Core\Validator;


$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs
$errors = [];

if(! Validator::email($email)){
   $errors['email'] = 'Please provide a valid email address';
}
if(! Validator::string($password, 8,255)){
   $errors['password'] = 'Please provide a password of a least eight characters';
}
if(! empty($errors)){
    view('registration/create.view.php',[
        'errors' =>$errors
    ]);
    exit();
}

/** @var Database $db */
$db = App::resolve(Database::class);
// check if the account already exist
$user = $db->query('SELECT * FROM user where email =:email',[
    'email' =>$email
])->find();
if($user) {
    // If yes, redirect to a login page
    header('location: /');
    exit();
}else {
        // If not,  save one to the database, and than log the user in, and redirect.
      $id = $db->query('INSERT INTO user(email,password) values(:email, :password)',[
        'email' =>$email,
        'password' => password_hash($password, PASSWORD_BCRYPT
        )
        ])->connection->lastInsertId();
    $_SESSION['user'] = [
        'email' => $email,
        'user_id'=> $id
    ];

    header('location: /');
    exit();
}
