<section id="<?php echo $this->document->getName(); ?>" class="animated fadeInRightBig">
  <?php if($this->editmode) { ?>
    <link href="/website/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <div class="pt-5">
    </div>
    <div class="container" style="padding: 25px 0;">
      <div class="form-group">
        <label>Place Your Address Here..</label>
        <?php echo $this->input("addr", ["placeholder" => "Place your Address here", "class" => "form-control"]); ?>
      </div>
      <div class="form-group">
        <label>Place Your Phone Here..</label>
        <?php echo $this->input("phone", ["placeholder" => "Place your Phone Number here", "class" => "form-control"]); ?>
      </div>
      <div class="form-group">
        <label>Place Your Email Here..</label>
        <?php echo $this->input("email", ["placeholder" => "Place your email here", "class" => "form-control"]); ?>
      </div>
    </div>
    <?php } else { ?>
  <div class="container">
    <div class="row">
      <div class="card" id="contact-card">
        <div class="card-header">
          <div class="contact-title">
            <h4><span>Any Question</span></h4>
          </div>
        </div>
        <div class="card-body">
          <div class="card-block">
            <div class="container">
              <div class="row">
              <div class="col-lg-6" "col-sm-12">
                <div class="form-group">
                  <h5>Address</h5>
                  <span><?php echo $this->input("addr"); ?></span>
                </div>
                <div class="form-group">
                  <h5>Phone Number</h5>
                  <span><?php echo $this->input("phone"); ?></span>
                </div>
                <div class="form-group">
                  <h5>Email</h5>
                  <span><?php echo $this->input("email"); ?></span>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                  <input type="text" name="fs-name" placeholder="Your First Name" class="form-control"  />
                </div>
                <div class="form-group">
                  <input type="text" name="fs-name" placeholder="Your Last Name" class="form-control"  />
                </div>
                <div class="form-group">
                  <input type="text" name="fs-name" placeholder="Your Email" class="form-control"  />
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="" placeholder="What You Want To Ask" rows="5"></textarea>
                </div>
                <div class="form-group">
                  <button disabled="disabled" class="btn btn-primary btn-block">Send email</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</section>
