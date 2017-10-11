<section id="<?php echo $this->document->getName(); ?>" class="animated bounceInLeft">
  <div class="container">
    <div class="row">
      <div class="card about-card">
      	<div class="card-body">
      		<div class="container">
      		<div class="row">
            <?php if($this->editmode) { ?>
      			<div class="col-lg-4 col-sm-12">
              <div class="img-profile text-center">
                <h4>Profile Image</h4>
                <?php echo $this->image("aboutme_img",["title" => "Place your Profile Image Here"]); ?>
              </div>
              <div class="profile-name text-center pt-2">
                  <h5>Write Your Nickname Here</h5>
                  <?php echo $this->input("about-nickname",[
                    "class" => "form-control",
                    "placeholder" => "Your Name Here..",
                    "validator" => new Zend_Json_Expr('
                    function(value) {
                      return value.match(/^[A-z]{0,10}$/) !== null;
                    }')//regex for nickname only 10 character and only alphabet
                  ]); ?>
                  <h4>Write Your Proffesion</h4>
                  <?php echo $this->input("about-proffesion",[
                    "class" => "form-control",
                    "placeholder" => "Your Profession Here.."
                  ]); ?>
                  <h4>Describe Yourself</h4>
                  <?php echo $this->textarea("about-describe",[
                    "class" => "form-control",
                    "height" => 220,
                    "placeholder" => "Your Describtion Here.."
                  ]); ?>
              </div>
              <div class="socmed-link pt-4 text-center">
                <div class="form-group">
                  <label>Facebook</label>
                  <?php echo $this->input("fb-link",[
                    "class" => "form-control",
                    "placeholder" => "Your Facebook Url Here.."
                  ]); ?>
                </div>
                <div class="form-group">
                  <label>twitter</label>
                  <?php echo $this->input("tw-link",[
                    "class" => "form-control",
                    "placeholder" => "Your Twitter Url Here.."
                  ]); ?>
                </div>
                <div class="form-group">
                  <label>Instagram</label>
                  <?php echo $this->input("ig-link",[
                    "class" => "form-control",
                    "placeholder" => "Your Instagram Url Here.."
                  ]); ?>
                </div>
                <div class="form-group">
                  <label>Google+</label>
                  <?php echo $this->input("gplus-link",[
                    "class" => "form-control",
                    "placeholder" => "Your Google+ Url Here.."
                  ]); ?>
                </div>
                <div class="form-group">
                  <label>Linkedin</label>
                  <?php echo $this->input("ld-link",[
                    "class" => "form-control",
                    "placeholder" => "Your Linkedin Url Here.."
                  ]); ?>
                </div>
                <div class="form-group">
                  <label>Skype</label>
                  <?php echo $this->input("skp-link",[
                    "class" => "form-control",
                    "placeholder" => "Your Skype Url Here.."
                  ]); ?>
                </div>
              </div>
      			</div>
      			<div class="col-lg-4 col-sm-12`">
      				<h5>My Info</h5>
              <div class="form-group">
                <label>Full Name</label>
                <?php echo $this->input("about-fullname",[
                  "class" => "form-control",
                  "placeholder" => "Your Full Name Here.."
                ]); ?>
              </div>
              <div class="form-group">
                <label>Hobby</label>
                <?php echo $this->input("about-hobby",[
                  "class" => "form-control",
                  "placeholder" => "Your Hobby Here.."
                ]); ?>
              </div>
              <div class="form-group">
                <label>Quotes</label>
                <?php echo $this->input("about-quote",[
                  "class" => "form-control",
                  "placeholder" => "Your Quote Here.."
                ]); ?>
              </div>
      			</div>
      			<div class="col-lg-4 col-sm-12`">
              <h5>Skill Info</h5>
              <?php
              $a = 0;
              while($this->block("contentblock")->loop()) { ?>
                <div class="form-group">
                  <div class="pt-4"></div>
                  <?php echo $this->input("skill-name", [
                    "class" => "form-control",
                    "placeholder" => "Skill Name"]);
                    ?>
                  <?php echo $this->input("skill-val", [
                    "class" => "form-control",
                    "placeholder" => "Skill Value 0-100 (example: 80)"]);
                    ?>
                </div>
                <?php $a++; } ?>
            </div>
          <?php } else { ?>
            <div class="col-lg-4 col-sm-12">
              <div class="img-profile text-center">
                <?php echo $this->image("aboutme_img",[
                  "class" => "img-thumbnail rounded-circle"
                ]); ?>
              </div>
              <div class="profile-name text-center pt-2">
                <h5><?php echo $this->input("about-nickname"); ?></h5>
                <span><?php echo $this->input("about-proffesion"); ?></span>
              </div>
              <div class="describe-profile pt-3 text-center">
                <span><?php echo $this->textarea("about-describe"); ?></span>
              </div>
              <div class="socmed-link pt-4 text-center">
                <?php
                //check if FB url not empty
                if ($this->input("fb-link") != "") { ?>
                  <a href="<?php echo $this->input("fb-link"); ?>" class="btn btn-circle btn-lg btn-facebook">
                    <i class="fa fa-facebook"></i>
                  </a>
                <?php } ?>
                <?php
                //check twitter url not empty
                if ($this->input("tw-link")!= "") { ?>
                  <a href="<?php echo $this->input("tw-link"); ?>" class="btn btn-circle btn-lg btn-twitter">
                    <i class="fa fa-twitter"></i>
                  </a>
                <?php } ?>
                <?php
                //check IG url not empty
                if ($this->input("ig-link")!= "") { ?>
                  <a href="<?php echo $this->input("ig-link"); ?>" class="btn btn-circle btn-lg btn-ig">
                    <i class="fa fa-instagram"></i>
                  </a>
                <?php } ?>
                <?php
                //check Google+ url not empty
                if ($this->input("gplus-link")!= "") { ?>
                  <a href="<?php echo $this->input("gplus-link"); ?>" class="btn btn-circle btn-lg btn-google">
                    <i class="fa fa-google-plus"></i>
                  </a>
                <?php } ?>
                <?php
                //check linkedin url not empty
                if ($this->input("ld-link")!= "") { ?>
                  <a href="<?php echo $this->input("ld-link"); ?>" class="btn btn-circle btn-lg btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                  </a>
                <?php } ?>
                <?php
                //check Skype url not empty
                if ($this->input("skp-link")!= "") { ?>
                  <a href="<?php echo $this->input("skp-link"); ?>" class="btn btn-circle btn-lg btn-skype">
                    <i class="fa fa-skype"></i>
                  </a>
                <?php } ?>
              </div>
    				</div>
    				<div class="col-lg-4 col-sm-12">
    					<h5>My Info</h5>
              <div class="pt-4"></div>
              <table class="table table-responsive">
                <tbody>
                  <tr>
                    <th>Fullname</th>
                    <td>
                      <?php echo $this->input("about-fullname"); ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Hobby</th>
                    <td>
                      <?php echo $this->input("about-hobby"); ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Quote</th>
                    <td>
                      <?php echo $this->input("about-quote"); ?>
                    </td>
                  </tr>
                </tbody>
              </table>
    					<!-- <div class="form-group">
    						<span>Full Name</span>
                <span><?php //echo $this->input("about-fullname"); ?></span>
    					</div>
    					<div class="form-group">
    						<span>Hobby</span>
                <span><?php //echo $this->input("about-hobby"); ?></span>
    					</div>
    					<div class="form-group">
    						<span>Quote</span>
                <span><?php //echo $this->input("about-quote"); ?></span>
    					</div> -->
    				</div>
    				<div class="col-lg-4 col-sm-12">
                <h5>Skill Info</h5>
                <?php
                while($this->block("contentblock")->loop()) { ?>
                <div class="pt-3"></div>
                  <div class="form-group">
                    <span><?php echo $this->input("skill-name"); ?></span>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $this->input("skill-val"); ?>%; height: 3px;" aria-valuenow="<?php echo $this->input("skill-val"); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <?php } ?>
                  </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
