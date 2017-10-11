<?php if($this->editmode) { ?>
  <link href="/website/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <div class="container">
    <div class="row">
      <div class="form-group" style="padding-top: 15px;">
        <label>Your Copyright Here..</label>
        <?php echo $this->input("op-copyright", [
          "class" => "form-control",
          "placeholder" => "Your Copyright Here.."
        ]);?>
        <label>Your Copyright Years Here..</label>
        <?php echo $this->input("op-copyright-years", [
          "class" => "form-control",
          "placeholder" => "Your Copyright Years Here.."
        ]);?>
      </div>
    </div>
  </div>
<?php } else { ?>
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright <i class="fa fa-copyright"></i> <?php echo $this->input("op-copyright")." ".$this->input("op-copyright-years"); ?></p>
  </div>
</footer>
<?php } ?>
