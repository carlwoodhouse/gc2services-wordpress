<?php
/**
 * Template Name: About Page
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
							<h2>About GC&#178;</h2>
							<img src="<?php blogInfo('template_directory')?>/images/controlRoom.jpg" class="alignright" />
							<p>GC&#178; delivers electronic security solutions to help protect your business from unforeseen events. Operating as an independent company, GC&#178; is free from external bias and commercial pressure.</p>

<p>GC&#178; works alongside private and Government organisations to provide you with the best skill sets needed to support your business. This includes the Centre for Applied Science and Technology (CAST), the Association of Chief Police Officers (ACPO), the Centre for the Protection of National Infrastructure (CPNI), the British Security Industry Association (BSIA) amongst many others. GC&#178; personnel bring real life experience of securing facilities for both the public and private sectors.</p>

<p>Our range of experience offers a second to none, integrated approach to physical, electronic and logical security. This includes expertise in Perimeter Intruder Detection Systems (PIDS), property Intruder Detection Systems (IDS), Closed Circuit Television (CCTV) systems, Electronic Access Control Systems (EACS), Intercoms, Public Address (PA), Physical Security Information Management Systems (PSIM), Gates, Barriers, Bollards, Turnstiles, Locks etc. This list goes on.</p>
							
					</div>
					<div class="content noTopBorder">
						<div class="column">
							<h3>We have a Security and IT industry certified team that is used for:</h3>
							<ul>
								<li>Mission critical security system deployments</li>
								<li>Creation of bespoke software & hardware solutions</li>
								<li>Consultation services between IT and Security parties</li>
								<li>Fast track project acceleration</li>
								<li>Provision of cost effective services</li>
							</ul>
						</div>
						<div class="column">
							<h3>Within the first-in-class FAT environment GC&#178; can offer:</h3>
							<ul>
								<li>Cross manufacturer management</li>
								<li>Deep functionality verification utilising:</li>
								<ul>
									<li>Specialised, comprehensive, software suites</li>
									<li>Purpose made testing hardware</li>
								</ul>
								<li>Full documentation packages, complete with:Tailored system training</li>
								<ul>
									<li>Detailed circuit diagrams</li>
									<li>Software configurations</li>
									<li>Integration matrices</li>
								</ul>
							</ul>
						</div>
						<div class="column">
						
						<h3>As well as all of this GC&#178; offers Advances Services such as:</h3>
						<ul>
							<li>Penetration testing</li>
							<li>Global system deployment & management</li>
							<li>Roadmap development</li>
							<li>PSIM</li>
							<li>ID Management</li>
							<li>Emerging technologies</li>
							<li>Technical training</li>
							<ul>
								<li>IT fundamentals (Networking, Operating Systems, Database Management, Scripting)</li>
								<li>Security Systems (End user, installer, maintainer)</li>
							</ul>
						</ul>
						</div>
					</div>
				</div>
				
				<div class="content noTopBorder">
						<div class="boxStyle">
							<p>Apart from being experienced and qualified engineers, our personnel are trained and certified in a wide range of disciplines from accredited manufacturers training to IT  certification.</p>
							
							<div class="halfWidth">
							<h2>Security Certifications</h2>
								<ul>
									<li>C-Cure 9000</li>
									<li>UTC Picture Perfect</li>
									<li>Honeywell Prowatch</li>
									<li>Vidsys / CNL / Cortech</li>
									<li>DVTEL</li>
								</ul>
							</div>
							
							<div class="halfWidth">
								<h2>IT Certifications</h2>
								<ul>
									<li>Cisco Certified Network Associate Security</li>
									<li>Cisco Certified Design Associate</li>
									<li>Microsoft Certified Technology Specialist: SQL Server</li>
									<li>EC-Council: Certified Ethical Hacker</li>
								</ul>
							</div>
							
							<div class="clearfix"></div>
							
							<p>In addition to this the GC&#178; team  are certified in multiple programming languages including Python, Jython, Ruby, BASH, KSH, SQL, Java, C, C++, C#, HTML, PHP, ASP and JSP</p>
						</div>

							
					</div>
				
				<?php the_content(); ?>
				<?php endwhile; ?>

<?php get_footer(); ?>