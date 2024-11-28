<?php
include 'header.php';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
								class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i
							class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-0 bread">Contact us</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="row mb-5">
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon bg-primary d-flex align-items-center justify-content-center">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="text">
									<p><span>Address:</span>
									<p style="color:red;">LiftyFoundation<br> Hyderabad-500 013</p>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon bg-secondary d-flex align-items-center justify-content-center">
									<span class="fa fa-phone"></span>
								</div>
								<div class="text">
									<p><span>Phone:</span> <a href="tel://##">+91 9014475756</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon bg-tertiary d-flex align-items-center justify-content-center">
									<span class="fa fa-paper-plane"></span>
								</div>
								<div class="text">
									<p><span>Email:</span> <a
											href="mailto:info@yoursite.com">info@LiftlyFoundation.org</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon bg-quarternary d-flex align-items-center justify-content-center">
									<span class="fa fa-globe"></span>
								</div>
								<div class="text">
									<p><span>Website</span> <a href="#">LiftlyFoundation.com</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row no-gutters">
						<div class="col-md-7">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<h3 class="mb-4">Contact Us</h3>
								<form method="POST" id="contactForm" name="contactForm" class="contactForm">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">Full Name</label>
												<input type="text" class="form-control" name="name" id="name"
													placeholder="Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="email">Email Address</label>
												<input type="email" class="form-control" name="email" id="email"
													placeholder="Email">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="subject">Subject</label>
												<input type="text" class="form-control" name="subject" id="subject"
													placeholder="Subject">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="#">Message</label>
												<textarea name="message" class="form-control" id="message" cols="30"
													rows="4" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Send Message" class="btn btn-primary">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-5 d-flex align-items-stretch">
							<div class="info-wrap w-100 p-5 img" style="background-image: url(images/causes-1.jpg);">
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php
include 'footer.php';
?>