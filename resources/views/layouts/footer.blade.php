

	<footer id="footer">
		<div class="container">

			<div class="row">

				<div class="col-md-8">

					<!-- Footer Logo -->
					<img class="footer-logo footer-2" src="assets/images/miette/logo_web.png" alt="" />

					<!-- Small Description -->
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

					<hr />

					<div class="row">
						<div class="col-md-6 col-sm-6">

							<!-- Newsletter Form -->
							<p class="margin-bottom-10">Subscribe to Our <strong>Newsletter</strong></p>

							<form id="newsletterForm" action="php/newsletter.php" role="form" method="post">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email" required="required">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<!-- /Newsletter Form -->
						</div>

						<div class="col-md-6 col-sm-6 hidden-xs">

							<!-- Social Icons -->
							<div class="margin-left-50 clearfix">

								<p class="margin-bottom-10">Follow Us</p>
								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>

							</div>
							<!-- /Social Icons -->

						</div>

					</div>



				</div>

				<div class="col-md-4" id="contacto">

					<h4 class="letter-spacing-1">CONTACTANOS</h4>

					<!-- CONTACT MESSAGES -->
					<p id="alert_success" class="alert alert-success alert-mini">Message sent! Thank You!</p>
					<p id="alert_failed" class="alert alert-danger alert-mini">Message not sent!</p>
					<p id="alert_mandatory" class="alert alert-danger alert-mini">Please, complete all mandatory fields</p>

					<!-- CONTACT FORM -->
					<form class="validate" method="post" action="php/contact.php">

						<input type="text" value="" placeholder="Nombre*" maxlength="100" class="form-control required" name="contact[name]" />
						<input type="email" value="" placeholder="Email*" data-msg-email="Por favor Ingresar una dirección de correo válida." class="form-control required" name="contact[email]" />
						<textarea maxlength="5000" placeholder="Mensaje*" rows="3" class="form-control required" name="contact[message]"></textarea>
						<input type="submit" value="ENVIAR MENSAJE" class="btn btn-success" />

					</form>
					<!-- /CONTACT FORM -->

				</div>

			</div>

		</div>

		<div class="copyright">
			<div class="container">
				<ul class="list-inline inline-links mobile-block pull-right nomargin">
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Pricing</a></li>
					<li><a href="#">Contact</a></li>
				</ul>

				&copy; All Rights Reserved, Company LTD
			</div>
		</div>
	</footer>