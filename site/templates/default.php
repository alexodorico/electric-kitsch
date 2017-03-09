<?php snippet('header') ?>

 
      <h1><?= $page->title()->html() ?></h1>
      <div >
        <?= $page->intro()->kirbytext() ?>
      </div>
     
      
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>