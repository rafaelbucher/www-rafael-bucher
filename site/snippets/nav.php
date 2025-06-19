<div class="rb-nav section-right">

<?php if(!$page->isHomePage()): ?>

  <a href="<?= $site->url() ?>">HOME</a
  >
<?php else: ?>

  <?php

  // main menu items
  $items = $pages->listed();

  // only show the menu if items are available
  if($items->isNotEmpty()):

  ?>

  <nav class="rb-menu">
    <ul>
      <?php foreach($items as $item): ?>
      <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
  </nav>
  
  <?php endif ?>

<?php endif ?>

</div>