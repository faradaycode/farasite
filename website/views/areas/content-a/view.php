<?php
$i = 1;
while($this->block("contentblock")->loop()) { ?>
  <section id="sec-a">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 <?php echo ($i % 2 == 1) ? "order-2":""; ?>">
          <div class="p-5">
            <?php echo $this->image("onep_img",["class"=>"img-fluid rounded-circle"]); ?>
          </div>
        </div>
        <div class="col-md-6 <?php echo ($i % 2 == 1) ? "order-1":""; ?>">
          <div class="p-5">
            <h2 class="display-4"><?php echo $this->input("onep_content-title"); ?></h2>
            <p><?php echo $this->textarea("onep_content-text"); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $i++; } ?>
