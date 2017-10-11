<div class="container">
  <h4>News Title</h4>
  <?php echo $this->input("op-news-title",[
    "class" => "form-control"
  ]); ?>
  <h4>News Content</h4>
  <?php echo $this->wysiwyg("op-news-cont"); ?>
  <h4>Author</h4>
  <?php echo $this->input("op-news-author",[
    "class" => "form-control"
  ]); ?>
</div>
