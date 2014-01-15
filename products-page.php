<?php
/**
 * Template Name: Products Page
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
					<div class="column productContainer">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/equestricam.png" alt=""/>
						<p>We are currently creating developing tailored packages that are suitable for your business</p>
						<p>If you would like more information on a solution for your business, please do not hesitate to get in contact</p>
						<!--p>Welcome to <span class="green">Equestricam</span>, the remote stables monitoring solution from GC&#178;. With the need to remotely monitor activity in your stable and the desire to be able to check in at a moment’s notice from anywhere in the world using smart-phone technology, <span class="green">Equestricam</span> is the solution that enables you to protect your investment.</p>
						<p>With wireless remotely controlled cameras, the option to record footage on-site and even email alerts to advise you of unexpected activity, <span class="green">Equestricam</span> can cater for any level of security. Whether you require a large, multiple building installation or if you have private surveillance needs, you can build up or omit the elements which are relevant for you.</p-->
						<a class="button greenBack" href="/contact">Coming Soon</a>&nbsp;&nbsp;<a class="button" href="/contact">Get in contact</a>
					</div>
					<div class="column productContainer">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/autocam.png" alt=""/>
						<p>We are currently creating developing tailored packages that are suitable for your business</p>
						<p>If you would like more information on a solution for your business, please do not hesitate to get in contact</p>
						<!--p>Welcome to <span class="blue">Autocam</span>, the remote automobile monitoring solution from GC&#178;. There are plenty of in-car alarm systems which may send you a text message if you car is being stolen and even cut the engine so it cannot be driven away, but for those who really care about the security of their car, there is nothing that can give you the peace of mind that a live image of your vehicle brings.</p>
<p>With wireless remotely controlled cameras available from anywhere in the world – using smart phone technology, the option to record footage and even email alerts to advise you of unexpected activity, <span class="blue">Autocam</span> can cater for any level of security. Whether you have a large warehouse that needs covering or simply the garage at home, you can build up or omit the elements which are relevant for you.</p-->
						<a class="button blueBack" href="/contact">Coming Soon</a>&nbsp;&nbsp;<a class="button" href="/contact">Get in contact</a>
					</div>
					<div class="column productContainer">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/holidaycam.png" alt=""/>
						<p>We are currently creating developing tailored packages that are suitable for your business</p>
						<p>If you would like more information on a solution for your business, please do not hesitate to get in contact</p>
						<!--p>Welcome to <span class="purple">Holidaycam</span>, the remote residence monitoring solution from GC&#178;. For those who have experienced it, there is only 1 thing more distressing than having your home broken into; worrying about it being unoccupied while you are away. You could always employ a house sitter or have someone pop-in every day, but these options are often difficult to orchestrate and costly. The ideal solution would be able to look into your house from anywhere in the world and with <span class="purple">Holidaycam</span>, that’s exactly what you can do.</p>
<p>With wireless remotely controlled cameras available from anywhere in the world – using smart phone technology, the option to record footage and even email alerts to advise you of unexpected activity, <span class="purple">Holidaycam</span> can cater for any level of security. Whether you wish to monitor every room, or just the front door, you can build up or omit the elements which are relevant for you.</p-->
						<a class="button purpleBack" href="/contact">Coming Soon</a>&nbsp;&nbsp;<a class="button" href="/contact">Get in contact</a>
					</div>
				</div>
				
				<?php the_content(); ?>
				<?php endwhile; ?>

<?php get_footer(); ?>