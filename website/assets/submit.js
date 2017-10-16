$("#contactform").submit(function(e) {
  $('#err_firstname').html("");
  $('#err_lastname').html("");
  $('#err_mail').html("");
  $('#err_message').html("");

  $('.bt-send').attr("disabled", true);
  $('.bt-send').val("Sending.....");
  $('.bt-send').addClass("btn-warning").removeClass("btn-primary");
  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "/?controller=contact&action=sendmail",
    data: $(this).serialize(),
    success: function(rsp) {
      console.log(rsp);
      if (rsp.status == false) {
        $.each(rsp.error, function(i, val) {
          string = "#err_" + i;
          //console.log(string);
          $(string).html(val);
          $('.bt-send').val("Send");
          $('.bt-send').attr("disabled", false);
        });
      } else {
        $('.modal-title').html("Email Terkirim");
        $('.modal-body').html("Thanks For Email");
        $('#exampleModal').modal("show");
      }

      $('#contactform')[0].reset();
      $('.bt-send').val("Send");
      $('.bt-send').addClass("btn-primary").removeClass("btn-warning");
      $('.bt-send').attr("disabled", false);
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(xhr+" | "+ajaxOptions+" | "+thrownError);
      $('.bt-send').attr("disabled", false);
    }
  });
});
