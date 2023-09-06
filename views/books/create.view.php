<?php require base_path('views/Partials/head.php');?>
<?php require base_path('views/Partials/nav.php');?>
<?php require base_path('views/Partials/banner.php');?>


   <main>
        <div class="mx-auto max-w-2xl py-6 sm:px-6 lg:px-8">


       <form method="POST" action="/books" enctype="multipart/form-data">
           <div class="space-y-12">
               <div class="border-b border-gray-900/10 pb-12">
                   <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <!-- Name-->
                       <div class="col-span-full">
                           <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Book's name</label>
                           <div class="mt-2">
                               <textarea id="title" name="name" rows="2" class="block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder: text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter the title of the book"></textarea>
                               <?php if(isset($errors['name'])) :?>
                                   <p class="text-red-500 text-xs mt-2"> <?= $errors['name'] ?> </p>
                               <?php endif;?>
                           </div>
                       </div>
                        <!-- Author-->
                       <div class="col-span-full">
                           <label for="author" class="block text-sm font-medium leading-6 text-gray-900">Author</label>
                           <div class="mt-2">
                               <textarea id="body" name="author" rows="2" class="block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder: text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter the author's name"
                               ><?= isset($errors['author']) ? $_POST['author'] : '' ?></textarea>
                            <?php if(isset($errors['author'])) :?>
                            <p class="text-red-500 text-xs mt-2"> <?= $errors['author'] ?> </p>
                            <?php endif;?>
                           </div>
                       </div>

                       <!--  Create at -->
                       <div class="col-span-full">
                           <label for="create_at" class="block text-sm font-medium leading-6 text-gray-900">Create at book</label>
                           <div class="mt-2">
                               <input type="date" id="create_at" name="create_at" value="YYYY-MM-DD"  />
                           </div>
                       </div>

                       <!--Upload image file-->
                           <div class="col-span-full">
                               <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Select image upload file:</label>
                               <input type="file" name="image" id="image" value="upload">
                           </div>
                       <?php if(isset($status)) :?>
                           <p class="text-red-500 text-xs mt-2"> <?= $status ?> </p>
                       <?php endif;?>


                       <!--Upload  file books-->
                           <div class="col-span-full">
                               <label for="down" class="block text-sm font-medium leading-6 text-gray-900">Select book upload file:</label>
                               <input type="file" name="down" id="down" value="upload">
                           </div>
                       <?php if(isset($status)) :?>
                           <p class="text-red-500 text-xs mt-2"> <?= $status ?> </p>
                       <?php endif;?>


           </div>
           <div class="mt-6 flex items-center justify-end gap-x-6">
               <input type="submit" name="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
           </div>
       </form>
        </div>

    </main>

<?php require base_path('views/Partials/footer.php'); ?>