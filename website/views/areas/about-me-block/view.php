<div class="col-lg-4 col-sm-12`">
  <div class="img-profile text-center">
    <?php echo $this->image("aboutme_img", ["class"=>"img-thumbnail rounded-circle"]); ?>
  </div>
  <div class="profile-name text-center pt-2">
    <h5><?php echo $this->input("aboutme-name"); ?></h5>
    <span><?php echo $this->input("aboutme-proffesion"); ?></span>
  </div>
  <div class="describe-profile pt-3 text-center">
    <span><?php echo $this->textarea("aboutme-describe"); ?></span>
  </div>
  <!-- <div class="socmed-link pt-4 text-center">
    <a href="#" class="btn btn-circle btn-lg btn-facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="btn btn-circle btn-lg btn-google"><i class="fa fa-google-plus"></i></a>
    <a href="#" class="btn btn-circle btn-lg btn-linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="btn btn-circle btn-lg btn-ig"><i class="fa fa-instagram"></i></a>
    <a href="#" class="btn btn-circle btn-lg btn-twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="btn btn-circle btn-lg btn-youtube"><i class="fa fa-youtube-play"></i></a>
  </div> -->
</div>
