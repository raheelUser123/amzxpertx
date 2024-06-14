<!DOCTYPE HTML>
<html>
	<?php include_once("includes/head.php")?>
	<?php include_once("includes/header.php")?>

					<!-- Service Logo first section -->
					<!-- <div class="service-logosection" >
						<div class="container">
							<div class="row">
								
									<div class="first-inner-section-text social" style="text-align: center;">
										<h2 style="text-align: center;">CONTACT US</h2>
										<p style="text-align: center;">FEEL FREE TO TOUCH ME</p>
										<div class="about-banner-buttons animate__animated animate__bounce" style="padding-top: 30px; text-align: center;">
											<ul style="text-align: center;">
												<li><div class="brand-button">
													<h6><a class="open-popup" href="javascript:;">Get Started</a></h6>
												</div></li>
												<li><div class="brand-button">
													<h6><a href="javascript:void(Tawk_API.toggle())"><i class="fa fa-message my-float"></i> Live Chat</a></h6>
												</div></li>
											</ul>
										</div>
									</div>
								
							
							</div>
						</div>
					</div>
					
				</section> -->
				<section id="home-sec1">
    <div class="container">
      <div class="row align-items-center">
      <div class="col-6 col-12-medium">
          <div class="side-image">
            <img width="100%" style="	-webkit-animation: mover 1s infinite alternate;
	animation: mover 1s infinite alternate;" src="../images/SERVICE - SOCIAL MEDIA PAGE_Artboard 1 copy.png" />
          </div>
        </div>
        <div class="col-6 col-12-medium">
          <div class="headings-home" data-aos="fade-left" data-aos-duration="5000">
            <h1>CONTACT <b>US </b>
            </h1>
            <p>FEEL FREE TO TOUCH ME</p>

          </div>
          <div class="buttons">
            <ul>
              <!-- <li>
                <a href="#">Read More</a>
              </li> -->
              <li>
                <a href="#">Get a quote</a>
              </li>
            </ul>
          </div> 
        </div>
        
      </div>
    </div>
  </section>
				


				<!-- LOGO CONTACT FORM START -->
				<section id="logo-contact-form" style="padding: 210px 0px;">
					<div class="container">
						<div class="row contact-inner">
							<div class="col-6 col-12-medium">
								<div class="logo-conactfomrinner">
									<form class="animate__animated animate__pulse" id="contact" action="/leads/" method="POST">
										<fieldset>
										  <input placeholder="Full Name" type="text" tabindex="1" name="name" required>
										</fieldset>
										<fieldset>
										  <input placeholder="Email Address" type="email" tabindex="2" name="email" required>
										</fieldset>
										<fieldset>
										  <input placeholder="Phone" type="tel" tabindex="3" name="phone" required>
										</fieldset>
									
										<fieldset>
										  <textarea placeholder="Project description" tabindex="5" name="brief" required></textarea>
										</fieldset>
										<fieldset>
										  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
										</fieldset>
									  <input type="hidden" name="route" value="form/">
                            <input type="hidden" name="brand" value="Ecommonks">
                            <input type="hidden" name="token" value="<?= $token; ?>">
                            <input type="hidden" name="tag" value="sidepanel form in landing-page">
                            <input type="hidden" name="price" value="null">
                            <input type="hidden" name="news" value="1">
                            <input type="text" class="jun" name="gender">
</form>
								</div>
							</div>

							<div class="col-6 col-12-medium">
								<div class="heading-text" data-aos="fade-up" data-aos-duration="500">
									<h2>If You Like What You See 
										<br><b>Let’s Connect Than!</b></h2>
										<p style="color: #fff;">Our experienced and skilled designers are waiting for your response, 
											so, we can talk business and let the magic happen. Don’t hassle 
											around and partner with the award-winning design agency in US –
											 before your competitor do so.</p>
											 <div class="about-banner-buttons animate__animated animate__bounce" style="padding-top: 30px;">
												<ul>
													<li><div class="brand-button">
														<h6><a class="open-popup" href="javascript:;">Get Started</a></h6>
													</div></li>
													<li><div class="brand-button">
														<h6><a href="javascript:void(Tawk_API.toggle())"><i class="fa fa-message my-float"></i> Live Chat</a></h6>
													</div></li>
												</ul>
											</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- LOGO CONTACT FORM END -->

			

			<!-- FOOTER START -->

			<?php include_once("includes/footer.php")?>
			
	</body>
</html>