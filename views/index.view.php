
<?php require base_path('views/Partials/head.php');?>
<?php require base_path('views/Partials/nav.php');?>
<?php require base_path('views/Partials/banner.php');?>


   <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

         <h4>Hello, '<?= $_SESSION['user']['email'] ?? 'Guest'?>' welcome to page home</h4>
        </div>
    </main>

<?php require base_path('views/Partials/footer.php'); ?>


