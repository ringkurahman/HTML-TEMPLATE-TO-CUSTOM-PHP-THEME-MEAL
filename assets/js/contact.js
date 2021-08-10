;(function ($) {
  $(document).ready(function () {
    $("#send-message").on("click", function () {
      $.post(
        mealurl.ajaxurl,
        {
          action: "contact", // Custom Post Id
          cn: $("#contact").val(), // Nonce
          name: $("#cname").val(),
          email: $("#cemail").val(),
          phone: $("#cphone").val(),
          message: $("#cmessage").val(),
        },
        function (data) {
          console.log(data)
        }
      )

      return false
    })
  })
})(jQuery)
