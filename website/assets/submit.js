$("#contactform").submit(function(e) {
  $('#err_firstname').html("");
  $('#err_lastname').html("");
  $('#err_mail').html("");
  $('#err_message').html("");

  $('.bt-send').attr("disabled",true);

  e.preventDefault();
  $.ajax({
     type: "POST",
     url: "/?controller=contact&action=sendmail",
     data: $(this).serialize(),

     success: function(rsp) {
       console.log(rsp);
        if(rsp.status == false){
       $.each(rsp.error,function(i,val) {
         string = "#err_" + i;
         //console.log(string);
         $(string).html(val);
         $('.bt-send').attr("disabled",false);
       });
     }


      //  console.log(rsp.message);
      //  console.log(rsp.status);
      //  alert(rsp.error);
       //alert(rsp['error_arr']);
     },
     error: function(err) {
       alert(err);
     }
   });
});
