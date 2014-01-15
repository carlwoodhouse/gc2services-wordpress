<?php
/**
 * Template Name: Home Page
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

				<div class="sliderContainer">
					<div>
						<h1>Welcome to peace of mind</h1>
						<h2>GC&#178; Services put you and your business first</h2>
						<a class="button" href="/services">Feel protected today</a>
					</div>
				</div>
				<div class="content">
					<div class="column">
						<h2>Who we are</h2>
						<p>Our UK facility has been hardened both physically and logically to provide a range of professional services to the security industry and private individuals alike. The GC2 team offer integrated perfection by combining a wide range of skill sets from industry people with robust planning procedures. Our expertise is in making the complicated simple.</p>
					</div>
					<div class="column">
						<h2>Services</h2>
						<p>We design, manage and install your custom security solution. See what we can do for you in our <a href="/services">services</a> section.</p>
					</div>
					<div class="column">
						<h2>Products</h2>
						<p>We love what we do! We're passionate about taking your problem and creating a bespoke solution that is tailored to you and your budget.</p>
					</div>
				</div>
				
				<?php the_content(); ?>
				<?php endwhile; ?>

<?php get_footer(); ?>