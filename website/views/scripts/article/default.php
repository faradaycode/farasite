<section id="article">
  <div class="container">
    <div class="row pb-3">
      <?php foreach($this->articles as $data) { ?>
        <?php
        $linker = preg_replace("/\s+/","-",$data->getTitle());
        $linker = strtolower($linker);
        ?>
      <div class="col-lg-3 col-md-12">
        <div class="card">
          <img class="card-img-top" src="<?php echo $data->getContentimage(); ?>" style="height: 150px;" alt="<?php echo $data->getTitle(); ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data->getTitle(); ?></h5>
            <span class="card-subtitle mb-2 text-primary"><?php echo $data->getAuthor().", ".$data->getCreated(); ?></span>
            <p class="card-text text-muted"><?php echo substr($data->getContent(),0,200)."....."; ?></p>
            <a href="<?php echo Pimcore\Tool::getHostUrl()."/articles/".$linker; ?>" class="btn btn-info"><i class="fa fa-eye"></i> Read More</a>
          </div>
        </div>
        <div class="pb-3">

        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</section>
