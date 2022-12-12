<?php require("partials/head.view.php") ?>
<?php require("partials/nav.view.php") ?>
<?php require("partials/header.view.php") ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <div class="px-4 py-6 sm:px-0">
        <form method="POST" class="flex items-center gap-3">
            <textarea rows="4" name="body"></textarea>
            <button class="bg-blue-400 px-4 py-2 text-white rounded hover:bg-red-400" type="submit">create</button>
        </form>
      </div>
    </div>
</main>
<?php require("partials/footer.view.php") ?>