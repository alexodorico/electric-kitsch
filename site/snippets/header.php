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

  <ul class="accordion" data-accordion data-allow-all-closed="true">