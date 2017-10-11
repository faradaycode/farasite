<?php //dump($this->getParam("paramnav")); ?>
<nav class="navbar navbar-expand-lg <?php if($this->getParam("paramnav") == 1){ echo " navbar-light op-nav"; } else { echo " navbar-dark bg-dark";} ?> fixed-top">
  <div class="container">
    <div class="site-logo">
      <?php if($this->editmode) { ?>
        <h5>Your Site Name</h5>
        <?php echo $this->input("sitename",[
          "class" => "form-control",
          "placeholder" => "Your Site Name Here.."
        ]); ?>
      <?php }  else { ?>
      <a class="navbar-brand" href="/"><?php echo strtoupper($this->input("sitename")); ?></a>
    <?php } ?>
    </div>
    <button class="navbar-toggler menu-toggle" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
