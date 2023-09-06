

<?php require base_path('views/Partials/head.php');?>
<?php require base_path('views/Partials/nav.php');?>
<?php require base_path('views/Partials/banner.php');?>
   <main>

        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <h5 class="mb-3 text-blue-700"><a href="/books">go back ...</a></h5>
<!--            <img  src="images/1.jpg" alt="here is photo">-->
<!--            <img src="/the_second_section/images/1.jpg" class="img-fluid" alt="...">-->
            <img src="<?= htmlspecialchars($book['image_path']); ?>">
            <br>
            <p> <?= htmlspecialchars($book['name']); ?> </p>
            <p> <?= htmlspecialchars($book['author']); ?> (Author)</p>
            <p> <?= htmlspecialchars($book['create_at']); ?> </p>

            <a href="<?= $book['image_path'] ?>" download >
                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><style>svg{fill:#1f3151} </style><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>            </a>

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