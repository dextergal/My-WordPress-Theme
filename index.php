<?php get_header(); ?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo home_url(); ?>">DEXG</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
				<?php
					// Check if the primary menu location has an assigned menu
					$locations = get_nav_menu_locations();
					$menu_id = $locations['primary']; // Replace 'primary' if using a different location name

					if (isset($menu_id)) {
						$menu_items = wp_get_nav_menu_items($menu_id);

						if (!empty($menu_items)) {
							foreach ($menu_items as $item) {
								// Get the label (title) and classes
								$label = $item->title;
								$classes = implode(' ', $item->classes); // Convert classes array to string

								// Output the HTML structure
								echo '<li class="nav-item">';
								echo '<a href="#' . esc_attr($classes) . '" class="nav-link">';
								echo '<span>' . esc_html($label) . '</span>';
								echo '</a>';
								echo '</li>';
							}
						}
					} else {
						echo 'Primary menu not found.';
					}
				?>

	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="about-section" class="hero">
	  	 <h1 style="display: none;" class="mb-4 mt-3">I'm <span>Dexter Gal</span></h1>
		  <div class="home-slider  owl-carousel" id="ftco-nav">
	      <div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/dex.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h2 class="mb-4 mt-3">I'm <span>Dexter Gal</span></h2>
			            <h3 class="mb-4">A Web | PHP | Wordpress Developer</h3>
			            <p><a href="#contact-section" class="btn btn-primary py-3 px-4"><span>Hire me</span></a> <a  href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/dex.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
                        <h2 class="mb-4 mt-3"><span>About Me</span></h2>
			            <h5 class="mb-4 mt-3">A passionate Web and WordPress Developer with a keen eye for creating sleek, responsive, and performance-driven websites. With 7 years of experience in front-end and back-end development, I specialize in building custom WordPress solutions that not only look great but also deliver seamless user experiences.</h5>
			            <p><a href="#contact-section" class="btn btn-primary py-3 px-4">Hire me</a> <a  href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

	<section class="" id="services-section">
    	<div class="container">
    		<div class="row justify-content-center py-5 ">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h2 class="big big-2">What I Do</h2>
            <h3 class="mb-4">What I Do</h3>
            <p>From development to optimization, I offer services that ensure your website stands out and performs flawlessly</p>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-code"></i></span>
							<div class="desc">
								<h3 class="mb-5">WordPress Development</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-paint-roller"></i></span>
							<div class="desc">
								<h3 class="mb-5">Theme Customization</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-cogs"></i></span>
							<div class="desc">
								<h3 class="mb-5">Plugin Development
								</h3>
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-shopping-cart"></i></span>
							<div class="desc">
								<h3 class="mb-5">E-commerce Solutions</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-tools"></i></span>
							<div class="desc">
								<h3 class="mb-5">Website Maintenance and Support</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-tachometer-alt"></i></span>
							<div class="desc">
								<h3 class="mb-5">Performance Optimization</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-search"></i></span>
							<div class="desc">
								<h3 class="mb-5">SEO Optimization</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-network-wired"></i></span>
							<div class="desc">
								<h3 class="mb-5">API Integrations</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-clipboard-check"></i></span>
							<div class="desc">
								<h3 class="mb-5">Website Audits</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-file-alt"></i></span>
							<div class="desc">
								<h3 class="mb-5">Content Management</h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon"><i class="fas fa-cogs"></i></span>
							<div class="desc">
								<h3 class="mb-5">Website Administrator</h3>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>
	<section class="ftco-section ftco-no-pb" id="portfolio-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h2 class="big big-2">Portfolio</h2>
            <h3 class="mb-4">Portfolio</h3>
          </div>
		  <br>
        </div>
    		<div class="row">
    			<div class="col-md-12">
					<?php echo do_shortcode('[foogallery id="1659"]'); ?>
    			</div>
    		</div>
    	</div>
    </section>
	<section class="ftco-section ftco-no-pb" id="skills-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
	  <div class="col-md-12 heading-section text-center ftco-animate">
		  <h2 class="big big-2">Skills</h2>
		<h3 class="mb-4">My Skills</h3>
	  </div>
	</div><br>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3><i class="fa fa-code"></i> Front-End Development</h3>
						<div class="progress">
							<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
							 aria-valuemin="0" aria-valuemax="100" style="width:90%">
						   <span>95%</span>
							 </div>
					   </div>
					   <br>
						<ul>
							<li>Languages & Tools: HTML, HTML5, CSS, SCSS, SASS, JavaScript, jQuery, AJAX, Bootstrap, VS Code, Tailwind CSS, Bootstrap</li>
							<li>Key Expertise: Creating responsive and user-friendly web interfaces, optimizing performance for scalability, ensuring cross-browser compatibility, and collaborating with designers to implement UI/UX designs.</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3><i class="fa fa-server"></i> Back-End Development</h3>
						<div class="progress">
							<div class="progress-bar color-1" role="progressbar" aria-valuenow="92"
							 aria-valuemin="0" aria-valuemax="100" style="width:92%">
						   <span>92%</span>
							 </div>
					   </div>
					   <br>
						<ul>
							<li>Languages & Tools: PHP, Node.js, MySQL, RESTful APIs, XML, JSON, XAMPP, FTP, phpMyAdmin</li>
							<li>Key Expertise: REST API development, backend performance optimization, database management, API integration with external services, and developing robust eCommerce solutions.</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3><i class="fa fa-tasks"></i> Content Management Systems (CMS)</h3>
						<div class="progress">
							<div class="progress-bar color-1" role="progressbar" aria-valuenow="94"
							 aria-valuemin="0" aria-valuemax="100" style="width:94%">
						   <span>94%</span>
							 </div>
					   </div>
					   <br>
						<ul>
							<li>WordPress: Expertise in theme development (Divi, Elementor, custom themes), plugin customization, multisite management, and PHP-level customizations.</li>
							<li>WooCommerce: Intermediate level proficiency in developing and maintaining eCommerce websites with product catalogs, payment gateways, and custom features.</li>
							<li>OpenCart: Intermediate experience integrating payment gateways and customizing themes for eCommerce websites.</li>
							<li>Shopify: Beginner to Intermediate experience in theme customization and eCommerce setup.
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3><i class="fa fa-cogs"></i> Other Tools & Platforms</h3>
						<div class="progress">
							<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
							 aria-valuemin="0" aria-valuemax="100" style="width:90%">
						   <span>90%</span>
							 </div>
					   </div>
					   <br>
						<ul>
							<li>Version Control: Git</li>
							<li>Server Management: Plesk, cPanel, FTP</li>
							<li>Analytics & SEO: Google Analytics, Search Console, Ahrefs, SEO/SEM best practices</li>
							<li>API Integrations: Custom PHP-based API integrations, Mailchimp, and various third-party APIs</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pb" id="experience-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h2 class="big big-2">Experience</h2>
            <h3 class="mb-4">Experience</h3>
            <p>With a proven track record as a WordPress Developer, I bring creativity and technical expertise to the table. My experience spans crafting stunning websites, optimizing user experiences, and implementing robust e-commerce solutions that drive engagement and conversions. Dive into my professional journey and discover how my unique skill set can elevate your projects and help your business thrive!</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="resume-wrap ftco-animate">
    					<span class="date"><i class="fa fa-calendar"></i> September 2023 - August 2024</span>
    					<h2><i class="fa fa-building"></i> User Experience Researchers Pte Ltd</h2>
    					<h5><i class="fa fa-briefcase"></i> WEB | PHP | Wordpress DEVELOPER</h5>
    					<span class="position"><i class="fa fa-map-marker"></i> Singapore - Remote</span>
    					<p class="mt-4">As a key contributor, I collaborated closely with clients to define their e-commerce and CMS needs, leveraging my expertise in WordPress and PHP to create custom solutions. I ensured seamless functionality and exceptional user experiences by developing and enhancing websites, optimizing themes, and implementing effective plugins tailored to client requirements.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date"><i class="fa fa-calendar"></i> April 2017 - February 2018 </span>
    					<h2><i class="fa fa-building"></i> Mindblow Internet Ideas</h2>
						<h5><i class="fa fa-briefcase"></i> WEB | PHP | Wordpress DEVELOPER</h5>
    					<span class="position"><i class="fa fa-map-marker"></i> Mandaluyong City, Philippines</span>
    					<p class="mt-4">As my first role in the industry, I transformed client requirements into functional WordPress websites by implementing effective PHP solutions. I integrated APIs, including Mailchimp, to enhance user engagement and lead management. My contributions included optimizing database performance through MySQL, ensuring fast and reliable data handling, and creating dynamic front-end interfaces using jQuery for an enhanced user experience.						</p>
    				</div>
    				
    			</div>

    			<div class="col-md-6">
    				<div class="resume-wrap ftco-animate">
    					<span class="date"><i class="fa fa-calendar"></i> February 2018 - August 2023</span>
    					<h2><i class="fa fa-building"></i> Firstcom Solutions Pte Ltd</h2>
						<h5><i class="fa fa-briefcase"></i> WEB | PHP | Wordpress DEVELOPER</h5>
    					<span class="position"><i class="fa fa-map-marker"></i> Singapore - Remote</span>
    					<p class="mt-4">At Firstcom Solutions, I specialized in developing and customizing WordPress and WooCommerce websites, delivering high-quality solutions for diverse clientele. My role involved implementing robust e-commerce functionalities, including product catalogs and payment gateways, while utilizing PHP for backend development. I developed responsive and functional websites using Divi and Elementor, ensuring seamless performance and a great user experience.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date"><i class="fa fa-calendar"></i>January 2017 - March 2017</span>
    					<h2><i class="fa fa-building"></i> Mindblow Internet Ideas</h2>
						<h5><i class="fa fa-briefcase"></i> WEB | PHP | Wordpress DEVELOPER - Internship</h5>
    					<span class="position"><i class="fa fa-map-marker"></i> Mandaluyong City, Philippines</span>
    					<p class="mt-4">During my internship, I gained valuable hands-on experience in web development, primarily focusing on WordPress. I assisted in transforming client requirements into functional websites by implementing basic PHP solutions and working closely with the development team. This role allowed me to learn about API integrations, including Mailchimp, and provided me with insights into optimizing database performance through MySQL.</p>
    				</div>
    				
    			</div>
    		</div>
    		<div class="row justify-content-center mt-5">
    			<div class="col-md-6 text-center ftco-animate">
    				<p><a download href="https://dextergal.online/wp-content/uploads/2024/10/Dexter-Gal-CV.pdf" class="btn btn-primary py-4 px-5">Download CV</a></p>
    			</div>
    		</div>
    	</div>
    </section>
	
    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="big big-2">Projects</h2>
					<h3 class="mb-4">Completed Projects</h3>
					<p>Throughout my career, I have had the privilege of collaborating with diverse companies to deliver exceptional web solutions. My expertise in WordPress and E-commerce development has allowed me to create a wide range of websites tailored to meet specific client needs. Below, you’ll find a selection of projects that showcase my commitment to quality, functionality, and user experience. Each project reflects my dedication to turning ideas into reality, ensuring that every website not only looks great but performs seamlessly.</p>
				</div>
			</div>
    		<?php echo do_shortcode('[foogallery id="1662"]'); ?>
            <span class="ftco-hireme">
                <h2>And <span>MORE</span> ++</h2>
            </span>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container">
				<div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="10">10</strong>
                <span>Certifications</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="160">0</strong>
                <span>Completed Projects</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="60">0</strong>
                <span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="600">0</strong>
                <span>Cups of coffee</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/web-dev-hire-me.png)">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 ftco-animate text-center">
						<h2>Let's <span>collaborate</span> and turn your ideas into stunning digital realities</h2>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="big big-2">Contact</h2>
            <h3 class="mb-4">Contact Me</h3>
            <p>Interested in working together or learning more about my services? Contact me, and let’s explore how I can help your business succeed.

			</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Mandaluyong City Philippines</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://+639284971371"><i class="fas fa-phone"></i>
 					+639284971371</a><br><a href="https://wa.me/639284971371"> <i class="fab fa-whatsapp"></i>
 					+639284971371</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:contact@dextergal.online">contact@dextergal.online</a><br>
					<a href="mailto:galdexter@gmail.com">galdexter@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
					<span class="fab fa-linkedin"></span>
          		</div>
          		<h3 class="mb-4">LinkedIn</h3>
	            <p><a href="https://www.linkedin.com/in/dexter-gal-6aab93178/">https://www.linkedin.com/in/dexter-gal-6aab93178/</a></p>
	          </div>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <?php echo do_shortcode('[wpforms id="4"]'); ?>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/about.jpg);"></div>
          </div>
        </div>
      </div>
    </section>
	<script>
  fetch('https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,thumbnail_url,permalink&access_token=YOUR_ACCESS_TOKEN')
    .then(response => response.json())
    .then(data => {
      let feed = '';
      data.data.forEach(post => {
        feed += `<a href="${post.permalink}" target="_blank"><img src="${post.media_url}" alt="${post.caption}"></a>`;
      });
      document.getElementById('instagram-feed').innerHTML = feed;
    });
</script>
<div id="instagram-feed"></div>


    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">

            <p style="margin: 0;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All rights reserved.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <?php get_footer(); ?>