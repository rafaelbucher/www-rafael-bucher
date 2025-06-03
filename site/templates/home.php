<?php snippet('header') ?>

<main class="w-screen h-screen p-8 md:pt-44 md:pb-16 md:pl-32 md:pr-16">

  <div class="wrapper grid grid-flow-row md:grid-flow-col md:grid-rows-1 md:gap-4">

    <div class="rb-description section-left md:-mt-16">
      <h1 class="uppercase"><?= $page->subtitle() ?></h1>
      <?= $page->description()->kirbytext() ?>
    </div>

    <div class="rb-nav section-right">
      <?php snippet('nav') ?>
    </div>

  </div>

</main>

<?php snippet('footer') ?>
