<?php snippet('header') ?>

<main class="w-screen h-screen p-8 md:pt-44 md:pb-16 md:pl-32 md:pr-16" data-barba="wrapper">

  <artile class="wrapper grid grid-flow-row md:grid-flow-col md:grid-rows-1 md:gap-4" data-barba="container" data-barba-namespace="work">
  
    <div class="rb-description section-left md:-mt-16">
      <div class="heading-containe is-animatedr">
        <h1 class="uppercase"><?= $page->subtitle() ?></h1>
        <div class="green-heading-bg">
          <?= $page->description()->kirbytext() ?>
        </div>
      </div>
    </div>

    <?php snippet('nav') ?>

  </article>

</main>

<?php snippet('footer') ?>
