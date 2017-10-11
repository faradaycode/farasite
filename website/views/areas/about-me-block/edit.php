<div class="container">
      <h4>Profile Image</h4>
      <?php echo $this->image("aboutme_img",["title" => "Place your Profile Image Here"]); ?>
      <h4>Write Your Name</h4>
      <?php echo $this->input("aboutme-name",[
        "class" => "form-control",
        "placeholder" => "Your Name Here.."
      ]); ?>
      <h4>Write Your Proffesion</h4>
      <?php echo $this->input("aboutme-proffesion",[
        "class" => "form-control",
        "placeholder" => "Your Profession Here.."
      ]); ?>
      <h4>Describe Yourself</h4>
      <?php echo $this->textarea("aboutme-describe",[
        "class" => "form-control",
        "height" => 220,
        "placeholder" => "Your Describtion Here.."
      ]); ?>
</div>
