<?php


// Theme Internal File Load
require_once get_theme_file_path( '/lib/csf/cs-framework.php' );
require_once get_theme_file_path( '/inc/metaboxes/section.php' );
require_once get_theme_file_path( "/inc/metaboxes/page.php" );
require_once get_theme_file_path( "/inc/metaboxes/pricing.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-banner.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-featured.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-gallery.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-chef.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-services.php" );
require_once get_theme_file_path( "/inc/metaboxes/taxonomy-featured-menu.php" );
require_once get_theme_file_path( "/inc/metaboxes/recipe-price.php" );



// For Development Avoid Caching
if ( site_url() == "http://meal.loca.com" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}


// Codestar Framework
define( 'CS_ACTIVE_FRAMEWORK', true ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', true ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', false ); // default true


// After Theme Setup Start
function meal_theme_setup() {
	load_theme_textdomain( 'meal', get_template_directory() . "/languages" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tags' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'comment-list'
	) );
	add_theme_support( 'custom-logo' );
	register_nav_menu( 'primary', __( 'Main Menu', 'meal' ) );
}

add_action( 'after_setup_theme', 'meal_theme_setup' );
// After Theme Setup End



// Load CSS and JavaScript Files Start
function meal_assets() {
  // CSS Files
	wp_enqueue_style( 'meal-fonts', '//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700"' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', null, VERSION );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', null, VERSION );
	wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', null, VERSION );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', null, VERSION );
	wp_enqueue_style( 'aos-css', get_template_directory_uri() . '/assets/css/aos.css', null, VERSION );
	wp_enqueue_style( 'bootstrap-datepicker-css', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css', null, VERSION );
	wp_enqueue_style( 'jquery.timepicker-css', get_template_directory_uri() . '/assets/css/jquery.timepicker.css', null, VERSION );
	wp_enqueue_style( 'ionicons-css', get_theme_file_uri( '/assets/fonts/ionicons/css/ionicons.min.css' ) );
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/fonts/fontawesome/css/font-awesome.min.css' ) );
	wp_enqueue_style( 'flaticon-css', get_theme_file_uri( '/assets/fonts/flaticon/font/flaticon.css' ) );
	wp_enqueue_style( 'meal-portfolio-css', get_template_directory_uri() . '/assets/css/portfolio.css', null, VERSION );
	wp_enqueue_style( 'meal-style-css', get_template_directory_uri() . '/assets/css/style.css', null, VERSION );
	wp_enqueue_style( 'meal-style', get_stylesheet_uri() );

  // JavaScript Files
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery.waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'bootstrap-datepicker.js', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-timepicker-js', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-stellar-js', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-isotope-js', get_template_directory_uri() . '/assets/js/jquery.isotope.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'google-map-js', '//maps.googleapis.com/maps/api/js?key=AIzaSyBH5lIq7TNpkFrDCcUt5DlsLSIVF25O8Q4', null, '1.0', true );
	wp_enqueue_script( 'meal-loadmore-js', get_template_directory_uri() . '/assets/js/loadmore.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'meal-portfolio-js', get_template_directory_uri() . '/assets/js/portfolio.js', array(
		'jquery',
		'jquery-magnific-popup-js',
		'imagesloaded-js',
		'isotope-js'
	), VERSION, true );


  // Mailchimp Integration
	if ( is_page_template( 'page-templates/mailchimp.php' ) ) {
		wp_enqueue_style( 'mailchimp-css', '//cdn-images.mailchimp.com/embedcode/classic-10_7.css' );
		$style = <<<EOD
#mc_embed_signup {
    background: #fff;
    clear: left;
    font: 14px Helvetica, Arial, sans-serif;
}
EOD;
		wp_add_inline_style( 'mailchimp-css', $style );

		wp_enqueue_script( 'mailchimp-js', '//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', array( 'jquery' ), '1.0', true );
		$script = <<<EOD
(function ($) {
    window.fnames = new Array();
    window.ftypes = new Array();
    fnames[0] = 'EMAIL';
    ftypes[0] = 'email';
    fnames[1] = 'FNAME';
    ftypes[1] = 'text';
    fnames[2] = 'LNAME';
    ftypes[2] = 'text';
    fnames[3] = 'ADDRESS';
    ftypes[3] = 'address';
    fnames[4] = 'PHONE';
    ftypes[4] = 'phone';
}(jQuery));
var \$mcj = jQuery.noConflict(true);
EOD;

		wp_add_inline_script( 'mailchimp-js', $script );
	}

	wp_enqueue_script( 'meal-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), VERSION, true );

// Conditionally Load Files on landing.php Template
	if ( is_page_template( 'page-templates/landing.php' ) ) {
		wp_enqueue_script( 'meal-reservation-js', get_template_directory_uri() . '/assets/js/reservation.js', array( 'jquery' ), VERSION, true );
		wp_enqueue_script( 'meal-contact-js', get_template_directory_uri() . '/assets/js/contact.js', array( 'jquery' ), VERSION, true );
		$ajaxurl = admin_url( 'admin-ajax.php' );
    // Send Data Throw Ajax URL
		wp_localize_script( 'meal-reservation-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
		wp_localize_script( 'meal-contact-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
		wp_localize_script( 'meal-portfolio-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
	}
}

add_action( 'wp_enqueue_scripts', 'meal_assets' );
// Load CSS and JavaScript Files End



// Codestar Framework Initialization
function meal_codestar_init() {
	CSFramework_Metabox::instance( array() );
	CSFramework_Taxonomy::instance( array() );

}

add_action( 'init', 'meal_codestar_init' );



// Function for Recipe Category
function get_recipe_category( $recipe_id ) {
	$terms = wp_get_post_terms( $recipe_id, "category" );
	if ( $terms ) {
		$first_term = array_shift( $terms );

		return $first_term->name;
	}

	return "Food";
}



// Reservation Hook
function meal_process_reservation() {

	if ( check_ajax_referer( 'reservation', 'rn' ) ) {
		$name    = sanitize_text_field( $_POST['name'] );
		$email   = sanitize_text_field( $_POST['email'] );
		$persons = sanitize_text_field( $_POST['persons'] );
		$phone   = sanitize_text_field( $_POST['phone'] );
		$date    = sanitize_text_field( $_POST['date'] );
		$time    = sanitize_text_field( $_POST['time'] );

		$data = array(
			'name'    => $name,
			'email'   => $email,
			'phone'   => $phone,
			'persons' => $persons,
			'date'    => $date,
			'time'    => $time
		);
		//print_r( $data );

		$reservation_arguments = array(
			'post_type'   => 'reservation',
			'post_author' => 1,
			'post_date'   => date( 'Y-m-d H:i:s' ),
			'post_status' => 'publish',
			'post_title'  => sprintf( '%s - Reservation for %s persons on %s - %s', $name, $persons, $date . " : " . $time, $email ),
			'meta_input'  => $data
		);

		$reservations = new WP_Query( array(
			'post_type'   => 'reservation',
			'post_status' => 'publish',
			'meta_query'  => array(
				'relation'    => 'AND',
				'email_check' => array(
					'key'   => 'email',
					'value' => $email
				),
				'date_check'  => array(
					'key'   => 'date',
					'value' => $date
				),
				'time_check'  => array(
					'key'   => 'time',
					'value' => $time
				),
			)
		) );
		if ( $reservations->found_posts > 0 ) {
			echo 'Duplicate';
		} else {
			$wp_error       = '';
			$reservation_id = wp_insert_post( $reservation_arguments, $wp_error );

			//transient check
			$reservation_count = get_transient( 'res_count' ) ? get_transient( 'res_count' ) : 0;
			//transient check end

			if ( ! $wp_error ) {

				$reservation_count ++;
				set_transient( 'res_count', $reservation_count, 0 );

				$_name      = explode( " ", $name );
				$order_data = array(
					'first_name' => $_name[0],
					'last_name'  => isset( $_name[1] ) ? $_name[1] : '',
					'email'      => $email,
					'phone'      => $phone,
				);
				$order      = wc_create_order();
				$order->set_address( $order_data );
				$order->add_product( wc_get_product( 42 ), 1 );  // Booking Product ID 42
				$order->set_customer_note( $reservation_id );
				$order->calculate_totals();

				add_post_meta( $reservation_id, 'order_id', $order->get_id() );

				echo $order->get_checkout_payment_url();
			}
		}

	} else {
		echo 'Not allowed';
	}
	die();
}

add_action( 'wp_ajax_reservation', 'meal_process_reservation' );
add_action( 'wp_ajax_nopriv_reservation', 'meal_process_reservation' );




// Remove WooCommerce Plugin Fields
function meal_checkout_fields( $fields ) {

	// remove billing fields
	unset( $fields['billing']['billing_company'] );
	unset( $fields['billing']['billing_address_1'] );
	unset( $fields['billing']['billing_address_2'] );
	unset( $fields['billing']['billing_city'] );
	unset( $fields['billing']['billing_postcode'] );
	unset( $fields['billing']['billing_country'] );
	unset( $fields['billing']['billing_state'] );

	// remove shipping fields
	unset( $fields['shipping']['shipping_first_name'] );
	unset( $fields['shipping']['shipping_last_name'] );
	unset( $fields['shipping']['shipping_company'] );
	unset( $fields['shipping']['shipping_address_1'] );
	unset( $fields['shipping']['shipping_address_2'] );
	unset( $fields['shipping']['shipping_city'] );
	unset( $fields['shipping']['shipping_postcode'] );
	unset( $fields['shipping']['shipping_country'] );
	unset( $fields['shipping']['shipping_state'] );

	// remove order comment fields
	unset( $fields['order']['order_comments'] );

	return $fields;
}

add_filter( 'woocommerce_checkout_fields', 'meal_checkout_fields' );




// Get Order status
function meal_order_status_processing( $order_id ) {
	$order          = wc_get_order( $order_id );
	$reservation_id = $order->get_customer_note();
	if ( $reservation_id ) {
		$reservation = get_post( $reservation_id );
		wp_update_post( array(
			'ID'         => $reservation_id,
			'post_title' => "[Paid] - " . $reservation->post_title
		) );

		add_post_meta( $reservation_id, 'paid', 1 );
	}
}

add_filter( 'woocommerce_order_status_processing', 'meal_order_status_processing' );




// Show Transient Count in Admin Reservation Menu
function meal_change_menu( $menu ) {
	$reservation_count = get_transient( 'res_count' ) ? get_transient( 'res_count' ) : 0;
	if ( $reservation_count > 0 ) {
		$menu[4][0] = "Reservation <span class='awaiting-mod'>{$reservation_count}</span> "; // Menu Position 4[0]
	}

	return $menu;
}

add_filter( 'add_menu_classes', 'meal_change_menu' );



// Delete Transient After Visit
function meal_admin_scripts( $screen ) {
	$_screen = get_current_screen();
	if ( 'edit.php' == $screen && 'reservation' == $_screen->post_type ) {      // Custom Post ID = reservation
		delete_transient( 'res_count' );
	}
}

add_action( 'admin_enqueue_scripts', 'meal_admin_scripts' );



// Contact Mail Setup
function meal_contact_email() {
	if ( check_ajax_referer( 'contact', 'cn' ) ) {
		$name    = isset( $_POST['name'] ) ? $_POST['name'] : '';
		$email   = isset( $_POST['email'] ) ? $_POST['email'] : '';
		$phone   = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
		$message = isset( $_POST['message'] ) ? $_POST['message'] : '';

		$_message    = sprintf( "%s \nFrom: %s\nEmail: %s\nPhone: %s", $message, $name, $email, $phone );
		$admin_email = get_option( 'admin_email' );

		//postfix

		wp_mail( 'contact@howtomycar.com', __( 'Someone tried to contact you', 'meal' ), $_message, "From: SALT Restaurant\r\n" );
		die( 'successful' );
	}
	die( 'error' );
}

add_action( 'wp_ajax_contact', 'meal_contact_email' );
add_action( 'wp_ajax_nopriv_contact', 'meal_contact_email' );



// Conditionally Load Menu on front-page
function meal_change_nav_menu( $menus ) {
	$string_to_replace = home_url( "/" ) . "section/";
	if ( is_front_page() ) {
		foreach ( $menus as $menu ) {
			$new_url = str_replace( $string_to_replace, "#", $menu->url );

			if ( $new_url != $menu->url ) {
				$new_url = rtrim( $new_url, "/" );
			}

			$menu->url = $new_url;
		}
	}

	return $menus;
}

add_filter( 'wp_nav_menu_objects', 'meal_change_nav_menu' );



// Unset Comment field textarea and Register Again
function meal_comment_form_fields( $fields ) {
	/*echo "<pre>";
	print_r($fields);
	echo "</pre>";*/

	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}

add_filter( 'comment_form_fields', 'meal_comment_form_fields' );



// Pricing Table 1=Tik 0=null
function meal_process_pricing_item( $item ) {
	if ( trim( $item ) == '1' ) {
		return '<i class="fa fa-check plan-active-color fa-2x">';
	}else if ( trim( $item ) == '0' ) {
		return '<i class="fa fa-ellipsis-h plan-inactive-color fa-2x">';
	}

	return $item;
}

add_filter( 'meal_pricing_item', 'meal_process_pricing_item' );



// Load More Page Function
function get_max_page_number() {
	global $wp_query;

	return $wp_query->max_num_pages;
}
