<?php require base_path('views/Partials/head.php');?>
<?php require base_path('views/Partials/nav.php');?>
<?php require base_path('views/Partials/banner.php');?>

   <main>
        <div class="mx-auto max-w-2xl py-6 sm:px-6 lg:px-8">


       <form method="POST" action="/note">
           <input type="hidden" name="_method" value="PATCH">
           <input type="hidden" name="id" value="<?= $note['id'] ?>">
           <div class="space-y-12">
               <div class="border-b border-gray-900/10 pb-12">
                   <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                       <div class="col-span-full">
                           <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                           <div class="mt-2">
                               <textarea id="title" name="title" rows="2" class="block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder: text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                               ><?= $note['title'] ?></textarea>
                               <?php if(getSessionError('title')) :?>
                                   <p class="text-red-500 text-xs mt-2"> <?= getSessionError('title') ?> </p>
                               <?php endif;?>
                           </div>
                       </div>
                       <div class="col-span-full">
                           <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                           <div class="mt-2">
                               <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder: text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                               ><?= $note['body'] ?></textarea>
                            <?php if(getSessionError('body')) :?>
                            <p class="text-red-500 text-xs mt-2"> <?= getSessionError('body') ?> </p>
                            <?php endif;?>
                           </div>
                       </div>


           </div>
           <div class="px-4 py-4 text-right sm:px-6 flex gap-x-4 justify-end ">

                   <a href="/notes" type="submit" class="inline-flex justify-center rounded-md border bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-grey-700"
                   >Cancel</a>

                   <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                   >Update</button>
           </div>
       </form>
        </div>

    </main>

<?php require base_path('views/Partials/footer.php'); ?>