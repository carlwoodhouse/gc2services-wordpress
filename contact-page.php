<?php
/**
 * Template Name: Contact Page
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div class="content noTopBorder">
					<div class="halfWidth">
						<div class="boxStyle">
							<h2>Get in touch</h2>
							<p>Please feel free to contact or for a more general enquiry please use the form below.</p>
							<p><strong>Phone</strong>: +44 (0)1638 669 950<br><strong>Email</strong>: <a href="info@gc2services.com">info@gc2services.com</a></p>
							<form method="post" id="contactForm" action="<?php bloginfo( 'template_directory' ); ?>/send_form_email.php">
								<div class="row">
									<label>First name</label>
									<input type="text" name="fName" required="required" />
								</div>
								<div class="row">
									<label>Surname</label>
									<input type="text" name="sName" required="required" />
								</div>
								<div class="row">
									<label>Email Address</label>
									<input type="text" name="email" required="required" />
								</div>
								<div class="row">
									<label>Contact Telephone</label>
									<input type="text" name="tel" required="required" />
								</div>
								<div class="row">
									<label>Query</label>
									<br><br>
									<textarea name="query" rows="10" cols="50" required="required"></textarea>
								</div>
								<input type="submit" class="button submit-contactform" value="Submit query"/>
							</form>
							<div id="contact-sending" style="display:none;">
								<p>Sending Message...</p>
							</div>
							<div id="contact-success" class="green" style="display:none;">
								<p>Thanks for sending your message! We'll get back to you shortly.</p>
							</div>
							<div id="contact-failed" style="display:none;">
								<p>There was a problem sending your message. Please try again.</p>
							</div>
						</div>
					</div>
					<div class="halfWidth">
						<div class="boxStyle">
							<a class="twitter-timeline" href="https://twitter.com/GC2Security" data-widget-id="331415228292145154">Tweets by @GC2Security</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</div>
				</div>
				
				<?php the_content(); ?>
				<?php endwhile; ?>

<?php get_footer(); ?>