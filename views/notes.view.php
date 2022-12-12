<?php require("partials/head.view.php") ?>
<?php require("partials/nav.view.php") ?>
<?php require("partials/header.view.php") ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
          <?php foreach($notes as $note): ?>
            <li>
              <a class="text-blue-500 hover:underline" href="/note?id=<?= $note['id'] ?>">
                <?= $note['body'] ?>
              </a>
            </li>
          <?php endforeach; ?> 
        </div>
    </div>
</main>
<?php require("partials/footer.view.php") ?>