<div class="container">
    <?php while($this->block("contentblock")->loop()) { ?>
      <h4>Upload Content Image</h4>
      <?php echo $this->image("onep_img",["title" => "Drag your image here"]); ?>
      <h4>Write Your Text</h4>
      <?php echo $this->input("onep_content-title",[
        "class" => "form-control",
        "placeholder" => "Your Content Title Here.."
      ]); ?>
      <h4>Write Your Text</h4>
      <?php echo $this->textarea("onep_content-text",[
        "class" => "form-control",
        "nl2br" => true,
        "height" => 220,
        "placeholder" => "Your Content Describtion Here.."
      ]); ?>
    <?php } ?>
</div>
