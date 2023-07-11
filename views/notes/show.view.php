<?php require base_path('views/partials/head.view.php') ?>
<?php require base_path('views/partials/nav.view.php') ?>
<?php require base_path('views/partials/header.view.php') ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
      <a class="text-blue-400 underline" href="/notes">go back</a>
      <p class="mt-4"><?= htmlspecialchars($note['body']) ?></p>
    </div>
  </div>
</main>
<?php require base_path('views/partials/footer.view.php') ?>