<?php if($this->editmode) { ?>
  <link href="/website/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <div class="container">
    <div class="form-group">
      <label>Write Your Site Opening Word Here..</label>
      <?php echo $this->input("siteword", ["placeholder" => "Write Your Site Opening Word Here", "class" => "form-control"]); ?>
    </div>
    <div class="form-group">
      <label>Describe Who You Are</label>
      <?php echo $this->textarea("whoami", ["placeholder" => "Describe Who You Are", "class" => "form-control"]); ?>
    </div>
  </div>
<?php } else { ?>
<header class="masthead">
  <div class="overlay">
    <div class="container site-title">
      <h1 class="text-white"><?php echo ucwords($this->input("siteword")); ?></h1>
      <?php
      $arrwho = explode(",",$this->textarea("whoami"));

      ?>
      <span class="txt-rotate text-white" data-period="2000"
       data-rotate='<?php echo Zend_Json::encode($arrwho); ?>'>
      </span>
    </div>
    <!-- <div class="section-change">
      <a class="btn btn-secondary sec-btn" href="#sec-a"><i class="fa fa-arrow-down"></i></a>
    </div> -->
  </div>
</header>
<?php } ?>
