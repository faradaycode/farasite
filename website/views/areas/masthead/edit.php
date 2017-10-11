<div class="container">
  <h4>Upload Header Image (+1000px)</h4>
  <?php echo $this->image("head-image-bg"); ?>
  <h4>Write Your Text</h4>
  <?php echo $this->input("head_title",[
    "class" => "form-control",
    "placeholder" => "Your Header Title Here.."
  ]); ?>
  <h4>Write Your Text</h4>
  <?php echo $this->input("head_subtitle",[
    "class" => "form-control",
    "placeholder" => "Your Header Subtitle Here.."
  ]); ?>
</div>
