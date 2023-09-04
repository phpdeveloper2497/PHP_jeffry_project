<?php

function dump($date)   // Check var_dum with function
{
    echo "<pre style='color: green;background-color: black;padding: 10px'>";
    var_dump($date);
    echo "</pre>";
}


//function dd($date)   // Check var_dum with function
//{
//    echo "<pre  style='color: green;background-color: black;padding: 10px>";
//    var_dump($date);
//    echo "</pre>";
//    die();
//}
// function for url path

function UrlActive($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}

 function abort($code)
{

    http_response_code($code);
    require base_path("views/errors.php");
    die();
}

 function authorize($condition)
 {
     if(! $condition)
     {
         abort('403');
     }
 }

 function base_path($path)
 {
     return BASE_PATH.$path;
 }

 function view($path,$attributes = [])
 {
     extract($attributes);
     require base_path('views/'.$path);
 }

 // Session

function getSessionError($key)
{
    if(isset($_SESSION['errors']) && isset($_SESSION['errors'][$key])){
        return $_SESSION['errors'][$key];
    }
    return false;
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

function old($key, $default = '')
{
    return \Core\Session::get('old')[$key] ?? $default;
}

