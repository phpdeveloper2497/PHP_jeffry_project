
   <?php
   require 'Partials/head.php';
   require 'Partials/nav.php';
//   require 'Router.php';
   ?>

   <?php
   $errors = [
       '403' => 'Forbidden', // ruxsat yoq // You are not authorized to  view this page
       '404' => '| Not Found', // topilmadi
       '400' => 'Bad Request ',
       '408' => 'Request Timeout',
       '500' => 'Internal Server Error '

   ];
   ?>

   <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
         <h1 style="font-size: xxx-large; font-weight: bold">
             <?php

             if(array_key_exists($code,$errors))
             {
                    echo $code." ".$errors[$code];
             }
             ?>
         </h1>
        </div>
       <h4><a href="/" class="text-blue underline" </a> Go back home.</h4>
    </main>

   <?php require 'Partials/footer.php'; ?>