<!---->
<?php //header('Content-Type: application/json; charset=utf-8');
//echo json_encode($notes);
//die(); ?>
<?php require base_path('views/Partials/head.php');?>
<?php require base_path('views/Partials/nav.php');?>
<?php require base_path('views/Partials/banner.php');?>

   <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
         <h1 style="font-size: xxx-large">Hello, welcome to page books</h1>
               <ul>
                   <?php foreach ($books as $book) : ?>
                       <li class="text-blue-500 hover:underline">
                           <a href="/book?id=<?= $book['id']?>">
                               <?= htmlspecialchars($book['name']); ?>
                           </a>
                       </li>
                   <?php endforeach; ?>
               </ul>
                <p class="mt-6"><a href="books/create" class="text-green-500 hover:underline">Add a new book</a> </p>
        </div>
    </main>

<?php require base_path('views/Partials/footer.php'); ?>