<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="An intelligent chatbot" name="description">
	<meta name="author" content="dycodes">
	<title>Chat Bot - Group 1</title>
	<link rel="stylesheet" href="./assets/bootstrap.min.css">
	<style>
		.user_text {
			justify-self: right;
			margin: 5px;
			width: 60%;
			border-radius: 15px 0 15px 0;
			padding: 7px;
			font-size: 14px;
			color: #fff;
			text-align: left;
		}

		.agent {
			margin: 5px;
			width: 60%;
			border-radius: 15px 0 15px 0;
			padding: 7px;
			font-size: 14px;
			color: #fff;
		}
	</style>
</head>

<body style="overflow-x: hidden;">
	<div class="row">
		<!-- <div class="col-md-3"></div> -->
		<div class="col-md-6 mx-auto">
			<h1 class="my-4 text-center">A Math Chatbot</h1>

			<div style="border: 1px solid #888; border-radius: 8px; padding: 10px">
				<div style="min-height: 400px;">

					<div class="user" style="display: grid;">
						<div class="agent bg-primary">
							<p>Hello! &#128075; how may I be of help...</p>
						</div>
					</div>
				</div>
				<hr>
				<!-- Input -->
				<div class="form-group d-flex">
					<input type="text" name="message" class="form-control user_message" placeholder="Your message..." required />
					<button type="button" class="btn btn-primary send_button">Send</button>
				</div>
			</div>

		</div>
	</div>
	<script src="./assets/jquery.min.js"></script>

	<!-- JS -->
	<script>
		$(document).ready(function() {

			$("button.send_button").click(function() {
				var user_message = $("input.user_message").val();
				$('div.user').append('<div class="user_text bg-secondary"><p>' + user_message + '</p></div>');

				if (user_message != '') {
					$.ajax({
						type: "POST",
						url: "bot.php",
						data: ({
							message: user_message
						}),
						cache: false,
						success: function(data) {
							$("div.user").append('<div class="agent bg-primary"><p>' + data + '</p></div>');
							// $("div.user").append('<div class="agent bg-primary"><p>Can I help you with anything else?</p></div>');
						}
					});
				}
			});
		});
	</script>
</body>

</html>