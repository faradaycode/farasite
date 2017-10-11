<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>One Page Mine</title>

    <!-- Bootstrap core CSS -->
    <?php
      $this->headLink()->appendStylesheet("/website/assets/bootstrap/css/bootstrap.min.css");
    ?>
    <!-- Custom styles for this template -->
    <?php
      $this->headLink()->appendStylesheet("/website/assets/font-awesome/css/font-awesome.min.css");
      $this->headLink()->appendStylesheet("/website/assets/css/custom.css");
      $this->headLink()->appendStylesheet("/website/assets/css/animate.css");
    ?>
    <?= $this->headLink() ?>
  </head>

  <body>

    <!-- Masthead & Navigation -->
    <div id="wrapper">
      <?php echo $this->inc("/snippet/sidebar"); ?>
      <div class="page-content-wrapper">
        <?php echo $this->inc("/snippet/navigation",["paramnav" => $this->document->getId()]); ?>
        <?php if($this->document->getId() == 1) { ?>
          <?php echo $this->inc("/snippet/masthead"); ?>
        <?php } ?>
        <!--/Masthead & Navigation -->
        <!-- content -->
        <div class="content-op">
          <?php echo $this->layout()->content; ?>
        </div>
        <!-- /content -->
        <!-- Footer -->
        <?php echo $this->inc("/snippet/footer"); ?>
        <!-- /footer-->
        <!-- Bootstrap core JavaScript -->
      </div>
    </div>
    <script src="/website/assets/jquery/jquery.min.js"></script>
    <script src="/website/assets/popper/popper.min.js"></script>
    <script src="/website/assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
    function checkScroll(){
      var startY = $('.navbar').height() * 2; //The point where the navbar changes in px
      if($(window).scrollTop() > startY) {
        $('.navbar').addClass("scrolled");
      } else {
        $('.navbar').removeClass("scrolled");
      }
    }
    if($('.navbar').length > 0){
      $(window).on("scroll load resize", function(){
        checkScroll();
      });
    }
    // $(".sec-btn").click(function() {
    //   $('html,body').animate({
    //     scrollTop: $("#sec-a").offset().top },'slow');
    //   });
    $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    //typewriter js script by codepens
    var TxtRotate = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

      var that = this;
      var delta = 300 - Math.random() * 100;

      if (this.isDeleting) { delta /= 2; }

      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
      }

      setTimeout(function() {
        that.tick();
      }, delta);
    };

    window.onload = function() {
      var elements = document.getElementsByClassName('txt-rotate');
      for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
      }
      // INJECT CSS
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #fff }";
      document.body.appendChild(css);
    };
    </script>
  </body>

</html>
