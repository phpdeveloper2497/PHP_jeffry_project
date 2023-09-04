
<?php require base_path('views/Partials/head.php');?>
<?php require base_path('views/Partials/nav.php');?>

   <main>
<?php //dump($_SESSION['errors']); ?>
       <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
           <div class="sm:mx-auto sm:w-full sm:max-w-sm">
               <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
               <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login in !</h2>
           </div>

           <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
               <form class="space-y-6" action="/session" method="POST">
                   <div>
                       <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                       <div class="mt-0.5">
                           <input
                                   id="email"
                                   name="email"
                                   type="email"
                                   autocomplete="email"
                                   value="<?= old('email')?>"
                                   class="block w-full rounded-md border-0 px-1 py-0.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                       </div>
                   </div>
                   <?php if(isset($errors['email'])) :?>
                       <p class="text-red-500 text-xs mt-2"> <?= $errors['email'] ?> </p>
                   <?php endif;?>
                   <div>
                       <div class="flex items-center justify-between">
                           <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                       </div>
                       <div class="mt-0.5">
                           <input
                                   id="password"
                                   name="password"
                                   type="password"
                                   autocomplete="current-password"
                                   class="block w-full rounded-md border-0 px-1 py-0.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                       </div>
                   </div>
                   <?php if(isset($errors['password'])) :?>
                       <p class="text-red-500 text-xs mt-2"> <?= $errors['password'] ?> </p>
                   <?php endif;?>
                   <div>
                       <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-0.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                       >Login in</button>
                   </div>
               </form>

           </div>
       </div>

   </main>

<?php require base_path('views/Partials/footer.php'); ?>


