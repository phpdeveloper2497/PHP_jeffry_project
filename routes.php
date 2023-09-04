<?php



$router->get('/','index.php');
$router->get('/about','about.php');
$router->get('/contact','contact.php');

$router->get('/notes','notes/index.php')->only('auth');
$router->get('/note','notes/show.php');
$router->delete('/note','notes/destroy.php');

$router->get('/notes/create','notes/create.php');
$router->post('/notes','notes/store.php');

$router->get('/note/edit','notes/edit.php');
$router->patch('/note','notes/update.php');

$router->get('/books','books/index.php')->only('auth');
$router->get('/book','books/show.php');
$router->get('/books/create','books/create.php');
$router->post('/books','books/store.php');

$router->get('/register','registration/create.php')->only('guest');
$router->post('/register','registration/store.php')->only('guest');

$router->get('/login','session/create.php')->only('guest');
$router->post('/session','session/store.php')->only('guest');
$router->delete('/session','session/destroy.php')->only('auth');

