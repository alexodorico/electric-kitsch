<li class="accordion-item" data-accordion-item>
  <a href="#" class="accordion-title"><?= $data->title()->html() ?></a>
  <div class="accordion-content" data-tab-content>
	<div class="row align-middle">
	  <div class="column small-12 medium-5">
	    <img src="<?php echo $data->image()->url() ?>" class="photo">
	  </div>
	  <div class="column small-12 medium-7">
	    <p><?= $data->text()->kirbytext() ?></p>
	  </div>
    </div>
  </div>
</li>
