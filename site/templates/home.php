<?php snippet('header') ?>

<main class="w-screen h-screen p-8 md:pt-44 md:pb-16 md:pl-32 md:pr-16" data-barba="wrapper">

  <artile class="wrapper grid grid-flow-row md:grid-flow-col md:grid-rows-1 md:gap-4" data-barba="container" data-barba-namespace="home">

    <div class="rb-description section-left md:-mt-16 is-animated">
      <div class="heading-container">
        <h1 class="uppercase heading-container"><?= $page->subtitle() ?></h1>
      </div>
      <div class="green-heading-bg">
        <?= $page->description()->kirbytext() ?>
      </div>
    </div>
    
    <?php snippet('nav') ?>

  </article>

</main>

<?php snippet('footer') ?>
