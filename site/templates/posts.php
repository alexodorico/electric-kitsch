<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link href="https://fonts.googleapis.com/css?family=Arimo:700|News+Cycle:700|Work+Sans:600" rel="stylesheet">

  <?= css('assets/css/index.css') ?>

</head>
<body>

  <div class="wrapper">  
    <img id="logo" src="<?= $site->image()->url() ?>">
  </div>

  <div class="blog-wrapper">

  <h1 class="title">Blog</h1>

  <?php $articles = $page->children()->visible()->flip()->paginate(2) ?>

  <?php foreach($articles as $article): ?>

  <article>
    <h2 class="article-title"><?php echo $article->title()->html() ?></h2>
    <h3 class="article-time">Posted on: <?php echo strftime('%m/%d/%Y', $article->date()) ?></h3>
    <?php echo $article->text()->kirbytext() ?>
  </article>

<?php endforeach ?>

<?php if($articles->pagination()->hasPages()): ?>
  <nav class="pagination wrap cf">

    
      <a class="pagination-item left" href="<?= $articles->pagination()->prevPageURL() ?>" rel="prev" title="newer articles">
        <?= (new Asset("assets/images/arrow-left.svg"))->content() ?>
      </a>
    
      <a class="pagination-item right" href="<?= $articles->pagination()->nextPageURL() ?>" rel="next" title="older articles">
        <?= (new Asset("assets/images/arrow-right.svg"))->content() ?>
      </a>
    

  </nav>
  </div>
<?php endif ?>
