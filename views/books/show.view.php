

<?php require base_path('views/Partials/head.php');?>
<?php require base_path('views/Partials/nav.php');?>
<?php require base_path('views/Partials/banner.php');?>
   <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <h5 class="mb-3 text-blue-700"><a href="/books">go back ...</a></h5>
            <p> <?= htmlspecialchars($book['name']); ?> </p>
            <p> <?= htmlspecialchars($book['author']); ?> (Author)</p>
            <p> <?= htmlspecialchars($book['create_at']); ?> </p>

          <div class=" px-4 py-4 text-right sm:px-1 flex gap-x-2">

<!--                  <a href="/book/edit?id=--><?php //= $book['id'] ?><!--" class="border border-current rounded bg-grey py-1 px-3 text-gray-500 hover:bg-blue-400">Edit</a>-->

<!--                 <form method="POST" >-->
<!--                     <input type="hidden"  name="_method" value="DELETE">-->
<!--                     <input type="hidden" name="id" value="--><?php //= $book['id'] ?><!--">-->
<!--                     <button class="text-red-600 border border-current rounded bg-grey py-1 px-3 text-gray-500 hover:bg-blue-400  ">Delete</button>-->
<!--                 </form>-->

          </div>
        </div>
    </main>

<?php require base_path('views/Partials/footer.php'); ?>