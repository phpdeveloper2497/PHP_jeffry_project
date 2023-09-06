<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .card {
            padding: 10px;
            margin-top: 20px;
            width: 220px;
        }
    </style>
</head>
<body>

</body>
</html>

<?php require base_path('views/Partials/head.php');?>
<?php require base_path('views/Partials/nav.php');?>
<?php require base_path('views/Partials/banner.php');?>

   <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
         <h1 style="font-size: xxx-large">Hello, welcome to page books</h1>

            <button class="mt-6  "><a href="books/create" class="text-green-500 hover:underline ">Add a new book</a> </button>
               <ul>
                   <?php foreach ($books as $book) : ?>
                       <li >
                           <div class="card">

                               <div  style="height:150px; width: 100px;">
                                   <img src="<?= $book['image_path'] ?>" alt="there is image ">
                               </div>
                               <h2><a class="text-blue-500 hover:underline" href="/book?id=<?= $book['id']?>">
                                       <?= htmlspecialchars($book['name']); ?>
                                   </a></h2>
                               <h5 style="color: #555"><?= htmlspecialchars($book['author']); ?> (Author)</h5>

                           </div>
                       </li>
                   <?php endforeach; ?>
               </ul>
        </div>
    </main>

<?php require base_path('views/Partials/footer.php'); ?>


