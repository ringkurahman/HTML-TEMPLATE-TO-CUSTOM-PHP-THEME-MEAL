;(function ($) {
  $(document).ready(function () {
    $("#reservenow").on("click", function () {
      $.post( mealurl.ajaxurl, {

          action: "reservation", // Custom Post Id
          name: $("#name").val(),
          email: $("#email").val(),
          phone: $("#phone").val(),
          persons: $("#persons").val(),
          date: $("#date").val(),
          time: $("#time").val(),
          rn: $("#rn").val(), // Nonce
        },
        function (data) {
          console.log(data)
          if ("Duplicate" == data) {
            alert(
              "You have already placed a request for this reservation. No need to submit again"
            )
          } else {
            $("#paynow").attr("href", data) // Target Link ID
            $("#reservenow").hide() // Input Button ID
            $("#paynow").show()
          }
        }
      )
      return false
    })
  })
})(jQuery)
