
$(document).ready(function () {

  $("button#send").click(function () {
    var user_message = $("input#message").val();

    if (user_message != '') {
      $('div.chat').append('<div class="user-box"><div class="user"><p>' + user_message + '</p></div></div>');

      $.ajax({
        type: "POST",
        url: "bot.php",
        data: ({
          message: user_message
        }),
        cache: false,
        success: function (data) {
          $("div.chat").append('<div class="chat-box"><div class="chat-box-image"><img src="./assets/images/lexa_2.png" alt="" /></div><div class="chat-box-inner-text"><p>' + data + '</p></div></div>');

          // Scroll to reply
          $(".chat").scrollTop($(".chat")[0].scrollHeight);

          // Clear input
          $("input#message").val("");
        }
      });
    }
  });
});
