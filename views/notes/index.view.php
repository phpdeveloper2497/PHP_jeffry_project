<!---->
<?php //header('Content-Type: application/json; charset=utf-8');
//echo json_encode($notes);
//die(); ?>
<?php require base_path('views/Partials/head.php');?>
<?php require base_path('views/Partials/nav.php');?>
<?php require base_path('views/Partials/banner.php');?>

   <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
         <h1 style="font-size: xxx-large">Hello, welcome to page notes</h1>
               <ul>
                   <?php foreach ($notes as $note) : ?>
                       <li class="text-blue-500 hover:underline">
                           <a href="/note?id=<?= $note['id']?>">
                               <?= htmlspecialchars($note['title']); ?>
                           </a>
                       </li>
                   <?php endforeach; ?>
               </ul>
                <p class="mt-6"><a href="notes/create" class="text-green-500 hover:underline">Create notes</a> </p>
        </div>
    </main>

<?php require base_path('views/Partials/footer.php'); ?>