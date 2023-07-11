<?php require("partials/head.view.php") ?>
<?php require("partials/nav.view.php") ?>
<?php require("partials/header.view.php") ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <div class="px-4 py-6 sm:px-0">
        <form method="POST">
           <div><textarea rows="4" name="body"><?= isset($_POST['body']) ? $_POST['body'] : ''  ?></textarea></div>
            <?php if(!empty($errors)): ?>
            <div class="text-red-400 text-xs m-2"><?= $errors['body'] ?></div>
            <?php endif; ?>
            <button class="bg-blue-400 px-4 py-2 text-white rounded hover:bg-red-400" type="submit">create</button>
        </form>
      </div>
    </div>
</main>
<?php require("partials/footer.view.php") ?>