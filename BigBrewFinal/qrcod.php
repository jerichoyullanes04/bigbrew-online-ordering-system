<!doctype html>
<html lang="en">

<head>
	<title>Contact Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Your Order and Payment Form</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">

						<div class="row">
							<div class="col-md-3">
								<div id="qrcode" class="mt-5 text-center">

								</div>
							</div>
							<div class="col-md-9">
								<div class="row no-gutters">
									<div class="col-lg-12 col-md-12 order-md-last d-flex align-items-stretch">
										<div class="contact-wrap w-100 p-md-5 p-4">
											<h3 class="mb-4">Fill up</h3>
											<div id="form-message-warning" class="mb-4"></div>
											<div id="form-message-success" class="mb-4">
												Your message was sent, thank you!
											</div>
											<form method="POST" id="contactForm" name="contactForm" class="contactForm">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="name">Full Name</label>
															<input type="text" class="form-control" name="name"
																id="name" placeholder="Name">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="email">Email Address</label>
															<input type="email" class="form-control" name="email"
																id="email" placeholder="Email">
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label class="label" for="subject">Contact</label>
															<input type="text" class="form-control" name="subject"
																id="subject" placeholder="Contact Number">
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label class="label" for="message">Address</label>
															<textarea name="message" class="form-control" id="message"
																cols="30" rows="4" placeholder="Input your full address"></textarea>
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
														<p><b>Note: Screenshot your QR code</p>
															<input type="submit" value="Send Message"
																class="btn btn-warning" onclick="generateqr()">
															<div class="submitting"></div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		</div>

		</div>
		</div>
		</div>
	</section>


	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/main.js"></script>

	<script>

		function generateqr() {
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var subject = document.getElementById('subject').value;
			var message = document.getElementById('message').value;

			console.log('Name: ' + name + " " + email + " " + subject + " " + message);

			var url = "https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Name:" +
			name + "%0a Email: " + email + " Subject: " + subject + " Address: " + message + " Cash on Delivery ";

			var ifr = `<iframe src="${url}" height="200" width="200"></iframe>`;

			document.getElementById('qrcode').innerHTML = ifr;

			<?php echo '<a class="btn btn-warning btn-lg" href="foodlist.php" role="button" > Order Now </a>;' ?>
		}

	</script>

</body>

</html>