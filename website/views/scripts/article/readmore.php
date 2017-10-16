<section>
  <div class="container">
    <?php
    foreach ($this->readmore as $data) {  ?>
      <div class="readmore" style="padding-top: 90px;">
        <div class="artitle pb-4">
          <h1><?php echo $data->getTitle(); ?></h1>
          <span class="text-info"><?php echo $data->getAuthor()." / ".$data->getCreated(); ?></span>
        </div>
        <div class="artibg pb-5 text-center">
          <img class="img-fluid" src="<?php echo $data->getContentimage(); ?>" />
        </div>
        <div class="artitext">
          <?php echo $data->getContent(); ?>
        </div>
      </div>
    <?php } ?>
  </div>
</section>
