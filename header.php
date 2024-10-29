<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target heading-sec" id="ftco-navbar">
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