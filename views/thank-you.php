<!DOCTYPE HTML>
<html>
	<?php include_once("includes/head.php")?>
	<?php include_once("includes/header.php")?>

					<!-- Service Logo first section -->
					<div class="service-logosection thnnkkk" >
						<div class="container">
							<div class="row align-items-center">
							<div class="col-6 col-12-medium">
							
							<img src="../images/thnkks.png" width="100%" />
</div>
							<div class="col-6 col-12-medium">
									<div class="first-inner-section-text social">
                                    <h1 class="first-color font-80 font-weight-bold text-center"><?php if (isset($_REQUEST['thanksMsg'])) {
                                                                            echo $_REQUEST['thanksMsg'];
                                                                        } ?></h1>
                    <h1 class="first-color font-80 font-weight-bold text-center"><?php if (isset($_REQUEST['successMsg'])) {
                                                                            echo $_REQUEST['successMsg'];
                                                                        } ?></h1>
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
					</div>
					<!-- END LOGO FIRST SECTION -->
				

				


				<!-- LOGO CONTACT FORM START -->
				<!-- <section id="logo-contact-form" style="padding: 210px 0px;">
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
									<h1>If You Like What You See 
										<br><b>Let’s Connect Than!</b></h1>
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
				</section> -->
				<!-- LOGO CONTACT FORM END -->

				<!-- TESTIMONIAL START -->
				<section id="testimonials-sections" style="padding-top: 60px; padding-bottom: 60px;">
    <div class="heading-text" style="text-align: center;">
      <h2>Testimonials</h2>
      <h3>Satisfied <b>Client’s</b>
      </h3>
      <p style="color: #fff;">Solutions to fit every budget and need - our flexible pricing and plans make it easy for you <br> to choose the perfect solution for your brand! </p>
    </div>
    <div class="container">
      <div id="page">
        <div class="row">
          <div class="column small-11 small-centered">
            <!-- <div class="slider slider-nav">
              <div>
                <h3>
                  <span>
                    <img src="../images/testimonialimages/newtestimonial.png" />
                  </span>
                </h3>
              </div>
              <div>
                <h3>
                  <span>
                    <img src="../images/testimonialimages/newtestimonial2.png" />
                  </span>
                </h3>
              </div>
              <div>
                <h3>
                  <span>
                    <img src="../images/testimonialimages/newtestimonial3.png" />
                  </span>
                </h3>
              </div>
              <div><h3><span><img src="../images/testimonialimages/newtestimonial.png"/></span></h3></div><div><h3><span><img src="../images/testimonialimages/newtestimonial2.png"/></span></h3></div><div><h3><span><img src="../images/testimonialimages/newtestimonial3.png"/></span></h3></div><div><h3><span><img src="../images/testimonialimages/newtestimonial.png"/></span></h3></div><div><h3><span><img src="../images/testimonialimages/newtestimonial2.png"/></span></h3></div><div><h3><span><img src="../images/testimonialimages/newtestimonial3.png"/></span></h3></div><div><h3><span><img src="../images/testimonialimages/newtestimonial3.png"/></span></h3></div>
            </div> -->
            <div class="testimonial-quote">
              <img src="../images/testimonialimages/quote.png" />
            </div>
            <div class="slider slider-single">
              <div class="testimonial-text">
                <h3>Kathlee Hood</h3>
                <p>Ecom monks just got a whole lot easier with this service. Listing products seamlessly, and the order management is spot on. Took a bit to figure it out, but it's been a game-changer.</p>
              </div>
              <div class="testimonial-text">
                <h3>Dorthy Myers</h3>
                <p>Ecom Monks excels in e-commerce automation. Unbeatable prices, seamless store management, and a track record of proven results. Elevate your business effortlessly!</p>
              </div>
              <div class="testimonial-text">
                <h3>James Gibson</h3>
                <p>Ecom Monks services for Amazon, Shopify, Walmart, and TikTok Shop are unparalleled. Prices beat the market, and their high-demand product strategies deliver results!</p>
              </div>
              <div class="testimonial-text">
                <h3>Eula Fowler</h3>
                <p>Ecom Monks delivers unbeatable services for Amazon, Shopify, Walmart, and TikTok Shop. Affordable prices, expert store management, and proven success- our go-to partner!</p>
              </div>
              <div class="testimonial-text">
                <h3>Zulma Gowan</h3>
                <p>Ecom Monks services for Amazon, Shopify, Walmart, and TikTok Shop are Unbeatable. Competitive prices, efficient store management, and consistent success. Highly recommended!</p>
              </div>
              <div class="testimonial-text">
                <h3>Nicholas Mojica</h3>
                <p>Ecom Monks sets the standard for excellence. Unbeatable prices, smooth store management, and top-notch results. A must for serious e-commerce success!</p>
              </div>
              <div class="testimonial-text">
                <h3>Donna Hoy</h3>
                <p>Ecom Monk's e-commerce automation is a game-changer. Affordable, efficient, and consistently delivering results. A trusted ally in achieving business goals!</p>
              </div>
              <div class="testimonial-text">
                <h3>William Asher</h3>
                <p>Ecom Monks brings excellence to e-commerce. Unmatched prices, smooth store management, and proven results. A strategic choice for online success!</p>
              </div>
              <div class="testimonial-text">
                <h3>Albert Denise</h3>
                <p>Ecom Monks services for Amazon, Walmart, and TikTok Shop are unparalleled. Prices beat the market, and their high-demand product strategies deliver results!</p>
              </div>
              <div class="testimonial-text">
                <h3>Jose Patel</h3>
                <p>Ecom Monks delivers unbeatable services. Affordable prices, expert store management, and a history of proven results. Exceptional results every time !</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

			<!-- FOOTER START -->

			<?php include_once("includes/footer.php")?>
			
	</body>
</html>