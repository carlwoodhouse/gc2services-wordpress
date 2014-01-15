<?php
/**
 * Template Name: Services Page
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
					<div class="boxStyle">
						<h2>Remote Access</h2>
						<img src="<?php blogInfo('template_directory')?>/images/hosted.jpg" class="alignleft" />
						<p>GC&#178; has the power to take the management and setup costs of an electronic security system away from you. We offer a totally hosted and managed solution to configure and commission your electronic access control system within your environment. GC&#178; provides a secure connection to the your network using a variety of trusted protocols and enables the system servers to be hosted in a secure, safe environment and monitored 24 hours a day.</p>

<p>There are a many options when implementing GC&#178;, whereby you can specify the level of control that you wish to undertake. For example, the access control server can be commissioned by our personnel and then access is granted back to the you to remotely “dial-into” your server on an ad hoc basis, as and when access changes need to be made. Alternatively, one of our people can be assigned as your liaison, responsible for the entire system and all changes can be managed via this route.</p>

<p>The GC&#178; remote access service offers a robust, secure and efficient way to manage your electronic access control system.</p>
					</div>
					<br><br>
					<div class="boxStyle">
						<h2>Factory Acceptance Testing</h2>
						<img src="<?php blogInfo('template_directory')?>/images/cameras.jpg" class="alignright" />

						<p>Time and time again we at GC&#178; come across situations where an installation or just individual products don’t perform as they should. Whether the problem is a mechanical failure due to an individual component not being up to the mark or whether it is a performance issue that does not make the grade, the result is that the customer is not satisfied and the project delivery team is ultimately responsible for any shortcomings. this can be avoided with a factory acceptance test prior to deployment.</p>
						
						<p>A factory acceptance test is a documented procedure that is carried out to determine whether a product or a system will operate to its specification. The test procedure covers all aspects of the subject’s functionality under all possible scenarios. It is particularly important for integrated systems where unexpected issues may arise.
						
						<p>This procedure, although a summary, will allow for the system or product to be fully tested to its performance specification. Any discrepancies or non-compliance issues will be documented and put into a program for rectification.
						
						<p>Every factory acceptance test will be different dependent on the product or system but the process must always be the same to ensure quality throughout and ensure that the product is fit for purpose meeting its performance specification. A factory acceptance test is critical in the development of any product or integrated electronic system and if not carried out correctly could result in major financial or political consequences.
						
						<h3>Within the first-in-class GC&#178; FAT environment we have:-</h3>
						<div class="halfWidth">
						<ul>
							<li>Cross manufacturer management</li>
							
							<li>Deep functionality verification utilising:</li>
							
							<ul>
								<li>Specialised, comprehensive, software suites</li>
								<li>Purpose made testing hardware</li>
							</ul>
						</ul>
						</div>
						
						<div class="halfWidth">
							<ul>
							<li>Full documentation packages, complete with:</li>
							
								<ul>
									<li>Detailed circuit diagrams</li>
									<li>Software configurations</li>
									<li>Integration matrices</li>
									<li>Tailored system training</li>
								</ul>
							</ul>
						
						</div>
						
						<div class="clearfix"></div>
						
					</div>
					<br><br>
					<div class="boxStyle">
						<h2>Design Service</h2>
						<img src="<?php blogInfo('template_directory')?>/images/testRoom.jpg" class="alignright" />
						<p>GC&#178; Design House services allow individuals and businesses alike to develop device or system designs from concept to delivery. Our managed approach ensures that every step of the way is coordinated with the wider team, controlled and documented to provide efficient design development and change control.</p>

<p>Our bespoke facility and leading engineers offers the ideal location and resource to develop your design. Our Design Leaders will support the process from end to end allowing your creative ideas to come through in the finish product.</p>

<p>GC&#178; Design Leaders are responsible for the leadership, team coordination, technical performance, constructability, safety, quality and cost effectiveness of your design. Our in-house team has many years of system design experience and are considered as thought leaders within the electronic security industry.</p>

<p>From concept through prototyping and on to a full documented system design, GC&#178; can offer an all inclusive service.</p>
					</div>
					<br><br>
					
					<div class="boxStyle">
						<h2>Training</h2>
						<img src="<?php blogInfo('template_directory')?>/images/training.jpg" class="alignleft" />
						<p>The GC&#178; facility offers a unique learning environment in that it has the ability to set up demonstration equipment within its own workshops and data centre. This exceptional arrangement allows for classroom and hands-on access to working equipment within the same learning environment.</p>

<p>The facility is ideal as a client hosted training setting were you can construct and use the facility to meet your own needs or you can take part in one of the many specialised training courses.</p>

<p>The training room has integrated multimedia projection systems as well as a fully operational security control room operator’s console. The GC&#178; facility is second to none for bespoke and specialised training</p>
					</div>
					<br><br>
				</div>
				
				<?php the_content(); ?>
				<?php endwhile; ?>

<?php get_footer(); ?>