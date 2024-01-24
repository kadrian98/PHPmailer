$(document).ready(function () {
  $("#sendingForm").submit(function (event) {
    event.preventDefault();

    var form = $(this);
    var actionUrl = form.attr('action');

    $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(),
      dataType: "json"}).done(function(data){
        if (data.message) {
          $("#sendingForm").after("<h1>" + data.message + "</h1>");
          $("#sendingForm").trigger("reset");
          $(".errorPara").remove();
        } else {
          $("#sendingForm").after("<h1>Received an unexpected response</h1>");
        }
      }).fail(function(jqXHR){
        if (jqXHR.responseJSON && jqXHR.responseJSON.errors) {
          var errors = jqXHR.responseJSON.errors;
          $(".errorPara").remove();
          Object.keys(errors).forEach(function(key) {
            var message = errors[key];
            var inputField = $("input[name='" + key + "'], textarea[name='" + key + "']");
            $("<p class='errorPara'>" + message + "</p>").insertAfter(inputField);
                });
              } else {
                var generalErrorMsg = jqXHR.status + ': ' + jqXHR.statusText;
                $("#sendingForm").after("<h1>Error - " + generalErrorMsg + "</h1>");
              }
      })
      
    });
  });    

//       success: function(data) {
//         if (data.message) {
//           $("#sendingForm").after("<h1>" + data.message + "</h1>");
//           $("#sendingForm").trigger("reset");
//           $(".errorPara").remove();
//         } else {
//           $("#sendingForm").after("<h1>Received an unexpected response</h1>");
//         }
//       },

      
//       error: function (jqXHR, textStatus, errorThrown) {
//         if (jqXHR.responseJSON && jqXHR.responseJSON.errors) {
//         var errors = jqXHR.responseJSON.errors;

//         $(".errorPara").remove();

//     Object.keys(errors).forEach(function(key) {
//       var message = errors[key];
//       var inputField = $("input[name='" + key + "'], textarea[name='" + key + "']");
//       $("<p class='errorPara'>" + message + "</p>").insertAfter(inputField);
//     });
//   } else {
//     var generalErrorMsg = jqXHR.status + ': ' + jqXHR.statusText;
//     $("#sendingForm").after("<h1>Error - " + generalErrorMsg + "</h1>");
//   }
// }

    

