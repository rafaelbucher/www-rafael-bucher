<?php snippet('header') ?>

<main class="w-screen h-screen pt-44 pb-16 pl-32 pr-16 relative">

  <div class="wrapper grid grid-flow-col grid-rows-1 gap-4">

    <div class="section-left">
      <h1 class="uppercase"><?= $page->subtitle() ?></h1>
      <?= $page->description()->kirbytext() ?>
    </div>

    <div class="section-right">
      <?php snippet('nav') ?>
    </div>

  </div>

  <div class="absolute bottom-4 left-32">
    <?php snippet('nav-languages') ?> 
  </div>

  <div class="absolute bottom-4 right-4">
    <?= $page->copyright()->kirbytext() ?>
  </div>

</main>

<?php snippet('footer') ?>
