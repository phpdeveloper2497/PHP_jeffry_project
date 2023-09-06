<?php

use Core\App;
use Core\Database;
use Core\Validator;

/** @var Database $db */
$db = App::resolve(Database::class);

$errors = [];
//Validation for any
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!Validator::string($_POST['name'], 1, 255)) {
        $errors['name'] = "the table must be filled in and cannot exceed 255 characters.";
    }
    if (!Validator::string($_POST['author'], 1, 255)) {
        $errors['author'] = "the table must be filled in and cannot exceed 255 characters.";
    }

    if (!empty($errors)) {
        return view("books/create.view.php", [
            'head_name' => 'Books world',
            'errors' => $errors
        ]);
    }


//Valiation for file images
//    $status = '';
    if (isset($_POST["submit"])) {
//        $status = 'error';
        if (!empty($_FILES["image"]["name"])) {
            // Get file info
            $fileName = basename($_FILES["image"]["name"]);

            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // Allow certain file formats
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType, $allowTypes)) {
                $image = $_FILES['image']['tmp_name'];
                $storage_path = "storage\\"; // publicni ichidagi rasmlar saqlanadigan joy
                $fileName = md5(time());
                $target_file = $storage_path . basename($_FILES["image"]["name"]);
                $real_name = basename($_FILES["image"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $file_address_and_name = $storage_path . $fileName . "." . $imageFileType;
                $file_to_address = $_SERVER['DOCUMENT_ROOT'] . "\\" . $file_address_and_name;
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $file_to_address)) {
                    $insert = $db->query('INSERT INTO books(name,author,create_at, image_path ,image_real_name,  user_id) VALUES(:name,:author,:create_at,:image_path,:image_real_name, :user_id)', [
                        'name' => $_POST['name'],
                        'author' => $_POST['author'],
                        'create_at' => $_POST['create_at'],
                        'image_path' => $file_address_and_name,
                        'image_real_name' => $real_name,
                        'user_id' => $_SESSION['user']['user_id'] ?? ''
                    ]);
                    if (!$insert) {
                        $status = "File upload failed, please try again.";
                    }
                } else {
                    $status = "File upload failed, please try again.";
                }

            } else {
                $status = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            }
        } else {
            $status = 'Please select an image file to upload.';
        }

    }
}



        //Valiation for file books
//    $status = '';
//
//    if (isset($_POST["submit"])) {
////        $status = 'error';
//            if (!empty($_FILES["down"]["name"])) {
//                // Get file info
//                $fileName = basename($_FILES["down"]["name"]);
//
//                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
//
//                // Allow certain file formats
//                $allow_file_Types = 'pdf';
//                if ($fileType === $allow_file_Types) {
//                    $image = $_FILES['down']['tmp_name'];
//                    $file_book_path = "file_book\\"; // publicni ichidagi booklarni saqlanadigan joy
//                    $file_name = md5(time());
//                    $target_file_book = $file_book_path . basename($_FILES["down"]["name"]);
//                    $bookFileType = strtolower(pathinfo($target_file_book, PATHINFO_EXTENSION));
//                    $file_address_and_name_books = $file_book_path . $file_name . "." . $bookFileType;
//                    $file_to_address_book = $_SERVER['DOCUMENT_ROOT'] . "\\" . $file_address_and_name_books;
//                    if (move_uploaded_file($_FILES["down"]["tmp_name"], $file_to_address_book)) {
//                        $insert = $db->query('INSERT INTO books(name,author,create_at, image_path ,image_real_name, $file_book_path, user_id) VALUES(:name,:author,:create_at,:image_path,:image_real_name,: file_book_path, :user_id)', [
//                            'name' => $_POST['name'],
//                            'author' => $_POST['author'],
//                            'create_at' => $_POST['create_at'],
//                            'image_path' => $file_address_and_name,
//                            'image_real_name' => $real_name,
//                            'file_book_path' =>$file_to_address_book,
//                            'user_id' => $_SESSION['user']['user_id'] ?? ''
//                        ]);
//                        if (!$insert) {
//                            $status = "File upload failed, please try again.";
//                        }
//                    } else {
//                        $status = "File upload failed, please try again.";
//                    }
//
//                } else {
//                    $status = 'Sorry, only pdf file is allowed to upload.';
//                }
//            } else {
//                $status = 'Please select an image file to upload.';
//            }
//
//            if (!empty($status)) {
//                return view("books/create.view.php", [
//                    'head_name' => 'Books world',
//                    'status' => $status
//                ]);
//            }
//
//            header('location: /books');
//            die();
//
//        }
//    }