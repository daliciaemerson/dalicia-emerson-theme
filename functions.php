<?php
/**
 * Dalicia Emerson — Kadence Child Theme Functions
 * daliciaemerson.com | Coldwell Banker Harris McHaney & Faucette
 */

// ─── Enqueue parent + child stylesheets ──────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {
	// Kadence parent stylesheet
	wp_enqueue_style(
		'kadence-style',
		get_template_directory_uri() . '/style.css',
		[],
		wp_get_theme( 'kadence' )->get( 'Version' )
	);

	// Child theme stylesheet (style.css in this directory)
	wp_enqueue_style(
		'daliciaemerson-child-style',
		get_stylesheet_uri(),
		[ 'kadence-style' ],
		wp_get_theme()->get( 'Version' )
	);

	// Main JS — create /assets/js/main.js before going live
	if ( file_exists( get_stylesheet_directory() . '/assets/js/main.js' ) ) {
		wp_enqueue_script(
			'daliciaemerson-main',
			get_stylesheet_directory_uri() . '/assets/js/main.js',
			[],
			wp_get_theme()->get( 'Version' ),
			true
		);

		wp_localize_script( 'daliciaemerson-main', 'DE', [
			'phone'   => DE_PHONE_DISPLAY,
			'email'   => DE_EMAIL,
			'nonce'   => wp_create_nonce( 'de_lead_nonce' ),
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		] );
	}
}, 20 );


// ─── Agent Identity ───────────────────────────────────────────────────────────

define( 'DE_AGENT_NAME',    'Dalicia Emerson' );
define( 'DE_BROKERAGE',     'Coldwell Banker Harris McHaney & Faucette' );
define( 'DE_PHONE',         '+14794223060' );
define( 'DE_PHONE_DISPLAY', '(479) 422-3060' );
define( 'DE_EMAIL',         'daliciaemerson@coldwellbankerhmf.com' );
define( 'DE_LICENSE',       'SA00088247' );
define( 'DE_LICENSE_STATE', 'AR' );
define( 'DE_WEBSITE',       'https://daliciaemerson.com' );
define( 'DE_CITY',          'Bentonville' );
define( 'DE_STATE',         'AR' );
define( 'DE_REGION',        'Northwest Arkansas' );

$de_service_areas = [
	'Bentonville', 'Rogers', 'Fayetteville', 'Springdale',
	'Bella Vista', 'Lowell', 'Siloam Springs', 'Eureka Springs',
];


// ─── Image Sizes ─────────────────────────────────────────────────────────────

add_action( 'after_setup_theme', function () {
	add_image_size( 'de-hero',         1920, 960,  true );
	add_image_size( 'de-listing-card',  640, 480,  true );
	add_image_size( 'de-neighborhood',  800, 533,  true );
	add_image_size( 'de-headshot',      400, 500,  true );

	register_nav_menus( [
		'primary' => 'Primary Navigation',
		'cities'  => 'Cities Dropdown',
	] );
} );


// ─── Schema: RealEstateAgent + LocalBusiness ──────────────────────────────────

function de_agent_schema(): array {
	global $de_service_areas;

	$area_served = array_map( function ( $city ) {
		return [
			'@type'            => 'City',
			'name'             => $city,
			'containedInPlace' => [
				'@type'  => 'State',
				'name'   => 'Arkansas',
				'sameAs' => 'https://www.wikidata.org/wiki/Q1612',
			],
		];
	}, $de_service_areas );

	return [
		'@context'  => 'https://schema.org',
		'@type'     => [ 'RealEstateAgent', 'LocalBusiness' ],
		'@id'       => DE_WEBSITE . '/#agent',
		'name'      => DE_AGENT_NAME,
		'url'       => DE_WEBSITE,
		'telephone' => DE_PHONE,
		'email'     => DE_EMAIL,
		'logo'      => [
			'@type' => 'ImageObject',
			'url'   => get_stylesheet_directory_uri() . '/assets/images/logo.png',
		],
		'image' => [
			'@type' => 'ImageObject',
			'url'   => get_stylesheet_directory_uri() . '/assets/images/dalicia-headshot.jpg',
		],
		'hasCredential' => [
			'@type'              => 'EducationalOccupationalCredential',
			'credentialCategory' => 'Real Estate License',
			'name'               => 'Arkansas Real Estate Salesperson License ' . DE_LICENSE,
			'recognizedBy'       => [
				'@type' => 'Organization',
				'name'  => 'Arkansas Real Estate Commission',
				'url'   => 'https://www.arec.arkansas.gov',
			],
		],
		'memberOf' => [
			'@type' => 'Organization',
			'name'  => DE_BROKERAGE,
			'url'   => 'https://www.coldwellbankerhmf.com',
		],
		'address' => [
			'@type'           => 'PostalAddress',
			'addressLocality' => DE_CITY,
			'addressRegion'   => DE_STATE,
			'addressCountry'  => 'US',
		],
		'areaServed' => $area_served,
		'knowsAbout' => [
			'Luxury real estate in Northwest Arkansas',
			'Bentonville AR homes for sale',
			'NWA relocation',
			'Coldwell Banker Global Luxury',
		],
		'sameAs' => [],
	];
}

// Merge into RankMath's JSON-LD graph when RankMath is active
add_filter( 'rank_math/json_ld', function ( $data ) {
	$data['DaliciaEmersonAgent'] = de_agent_schema();
	return $data;
}, 11 );

// Direct fallback when RankMath is not yet active
add_action( 'wp_head', function () {
	if ( class_exists( 'RankMath' ) ) {
		return;
	}
	$schema = de_agent_schema();
	echo '<script type="application/ld+json">'
		. wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT )
		. '</script>' . "\n";
}, 5 );


// ─── Open Graph Meta Tags (fallback when RankMath not active) ─────────────────

add_action( 'wp_head', function () {
	if ( class_exists( 'RankMath' ) ) {
		return;
	}

	global $post;

	$og_title       = is_singular() && $post
		? get_the_title( $post ) . ' | ' . DE_AGENT_NAME . ' | ' . DE_REGION . ' REALTOR®'
		: get_bloginfo( 'name' ) . ' | ' . DE_REGION . ' Luxury REALTOR®';

	$og_description = is_singular() && $post && has_excerpt( $post )
		? get_the_excerpt( $post )
		: 'Dalicia Emerson is a Coldwell Banker Global Luxury REALTOR® specializing in luxury homes for sale in Northwest Arkansas — Bentonville, Rogers, Fayetteville, Springdale, and beyond.';

	$og_url   = is_singular() && $post ? get_permalink( $post ) : home_url( '/' );
	$og_image = is_singular() && $post && has_post_thumbnail( $post )
		? get_the_post_thumbnail_url( $post, 'de-hero' )
		: get_stylesheet_directory_uri() . '/assets/images/og-default.jpg';

	$tags = [
		'og:type'        => is_singular() ? 'article' : 'website',
		'og:title'       => esc_attr( $og_title ),
		'og:description' => esc_attr( $og_description ),
		'og:url'         => esc_url( $og_url ),
		'og:image'       => esc_url( $og_image ),
		'og:image:width' => '1920',
		'og:image:height'=> '960',
		'og:site_name'   => esc_attr( DE_AGENT_NAME . ' | ' . DE_BROKERAGE ),
		'og:locale'      => 'en_US',
		'twitter:card'   => 'summary_large_image',
		'twitter:title'  => esc_attr( $og_title ),
		'twitter:description' => esc_attr( $og_description ),
		'twitter:image'  => esc_url( $og_image ),
	];

	foreach ( $tags as $property => $content ) {
		$attr = str_starts_with( $property, 'twitter:' ) ? 'name' : 'property';
		printf( '<meta %s="%s" content="%s" />' . "\n", $attr, $property, $content );
	}
}, 10 );


// ─── RankMath: OG defaults for custom templates ───────────────────────────────

add_filter( 'rank_math/opengraph/description', function ( $desc ) {
	if ( ! $desc && is_page_template( 'page-templates/relocation-hub.php' ) ) {
		return 'Thinking about moving to Northwest Arkansas? Dalicia Emerson, NWA Luxury REALTOR®, covers neighborhoods, cost of living, lifestyle, and how she helps relocating buyers.';
	}
	if ( ! $desc && is_page_template( 'page-templates/luxury-homes.php' ) ) {
		return 'Browse luxury homes for sale in Bentonville, Rogers, and Fayetteville, AR. Dalicia Emerson — Coldwell Banker Global Luxury® certified REALTOR®.';
	}
	if ( ! $desc && is_page_template( 'page-templates/walmart-relocation.php' ) ) {
		return 'Relocating to Bentonville for Walmart or a supplier company? Dalicia Emerson specializes in fast, corporate-relocation home searches in Northwest Arkansas.';
	}
	return $desc;
} );


// ─── RankMath: Breadcrumb home label ─────────────────────────────────────────

add_filter( 'rank_math/frontend/breadcrumb/items', function ( $crumbs ) {
	if ( isset( $crumbs[0] ) ) {
		$crumbs[0][0] = 'Home';
	}
	return $crumbs;
} );


// ─── Per-page schema: City pages ─────────────────────────────────────────────

add_filter( 'rank_math/json_ld', function ( $data ) {
	if ( ! is_page_template( 'page-templates/city-page.php' ) ) {
		return $data;
	}
	$city = get_post_meta( get_the_ID(), '_de_city_name', true );
	if ( ! $city ) {
		return $data;
	}
	$data['CityPage'] = [
		'@context'    => 'https://schema.org',
		'@type'       => 'WebPage',
		'name'        => 'Homes for Sale in ' . $city . ', AR | ' . DE_AGENT_NAME,
		'description' => 'Search homes for sale in ' . $city . ', Arkansas with ' . DE_AGENT_NAME . ', ' . DE_REGION . ' luxury REALTOR®.',
		'about'       => [ '@type' => 'City', 'name' => $city . ', Arkansas' ],
		'author'      => [ '@id' => DE_WEBSITE . '/#agent' ],
	];
	return $data;
}, 12 );


// ─── Per-page schema: Relocation hub ─────────────────────────────────────────

add_filter( 'rank_math/json_ld', function ( $data ) {
	if ( ! is_page_template( 'page-templates/relocation-hub.php' ) ) {
		return $data;
	}
	$data['RelocationPage'] = [
		'@context'    => 'https://schema.org',
		'@type'       => 'WebPage',
		'name'        => 'Moving to Northwest Arkansas — Complete Relocation Guide',
		'description' => 'Everything you need to know about moving to Northwest Arkansas: neighborhoods, cost of living, Walmart relocation, lifestyle, and how to find the right home.',
		'author'      => [ '@id' => DE_WEBSITE . '/#agent' ],
		'about'       => [ '@type' => 'Place', 'name' => 'Northwest Arkansas' ],
	];
	return $data;
}, 12 );


// ─── Lead form AJAX handler ───────────────────────────────────────────────────

add_action( 'wp_ajax_de_submit_lead',        'de_handle_lead_submission' );
add_action( 'wp_ajax_nopriv_de_submit_lead', 'de_handle_lead_submission' );

function de_handle_lead_submission(): void {
	check_ajax_referer( 'de_lead_nonce', 'nonce' );

	// Reject honeypot
	if ( ! empty( $_POST['website'] ) ) {
		wp_send_json_error( [] );
	}

	$name    = sanitize_text_field( $_POST['name']    ?? '' );
	$email   = sanitize_email( $_POST['email']        ?? '' );
	$phone   = sanitize_text_field( $_POST['phone']   ?? '' );
	$message = sanitize_textarea_field( $_POST['message'] ?? '' );
	$source  = sanitize_text_field( $_POST['source']  ?? 'contact-form' );

	if ( ! $name || ! $email || ! is_email( $email ) ) {
		wp_send_json_error( [ 'message' => 'Please provide your name and a valid email address.' ] );
	}

	$subject = sprintf( '[New Lead] %s — %s', $source, $name );
	$body    = sprintf(
		"Name: %s\nEmail: %s\nPhone: %s\nSource: %s\n\nMessage:\n%s",
		$name, $email, $phone, $source, $message
	);

	$sent = wp_mail(
		DE_EMAIL,
		$subject,
		$body,
		[
			'Content-Type: text/plain; charset=UTF-8',
			'From: ' . DE_AGENT_NAME . ' Website <noreply@daliciaemerson.com>',
		]
	);

	if ( $sent ) {
		wp_send_json_success( [ 'message' => 'Thanks, ' . esc_html( $name ) . '! I\'ll be in touch within one business day.' ] );
	} else {
		wp_send_json_error( [ 'message' => 'Something went wrong. Please email me directly at ' . DE_EMAIL ] );
	}
}


// ─── City page meta box ───────────────────────────────────────────────────────

add_action( 'add_meta_boxes', function () {
	add_meta_box( 'de_city_fields', 'City Page Settings', 'de_city_meta_box_html', 'page', 'side', 'high' );
} );

function de_city_meta_box_html( WP_Post $post ): void {
	wp_nonce_field( 'de_city_meta', 'de_city_nonce' );
	$city         = get_post_meta( $post->ID, '_de_city_name',         true );
	$population   = get_post_meta( $post->ID, '_de_city_population',   true );
	$median_price = get_post_meta( $post->ID, '_de_city_median_price', true );
	?>
	<p>
		<label for="de_city_name"><strong>City Name</strong></label><br>
		<input type="text" id="de_city_name" name="de_city_name" value="<?php echo esc_attr( $city ); ?>" style="width:100%">
	</p>
	<p>
		<label for="de_city_population"><strong>Approx. Population</strong></label><br>
		<input type="text" id="de_city_population" name="de_city_population" value="<?php echo esc_attr( $population ); ?>" style="width:100%">
	</p>
	<p>
		<label for="de_city_median_price"><strong>Median Home Price</strong></label><br>
		<input type="text" id="de_city_median_price" name="de_city_median_price" value="<?php echo esc_attr( $median_price ); ?>" placeholder="e.g. $485,000" style="width:100%">
	</p>
	<?php
}

add_action( 'save_post_page', function ( int $post_id ) {
	if ( ! isset( $_POST['de_city_nonce'] ) || ! wp_verify_nonce( $_POST['de_city_nonce'], 'de_city_meta' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	update_post_meta( $post_id, '_de_city_name',         sanitize_text_field( $_POST['de_city_name']         ?? '' ) );
	update_post_meta( $post_id, '_de_city_population',   sanitize_text_field( $_POST['de_city_population']   ?? '' ) );
	update_post_meta( $post_id, '_de_city_median_price', sanitize_text_field( $_POST['de_city_median_price'] ?? '' ) );
} );


// ─── Nav walker: desktop cities dropdown ─────────────────────────────────────

class DE_Dropdown_Walker extends Walker_Nav_Menu {
	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		$output .= '<li class="de-dropdown__item" role="none">';
		$output .= '<a href="' . esc_url( $data_object->url ) . '" class="de-dropdown__link" role="menuitem">';
		$output .= esc_html( $data_object->title );
		$output .= '</a>';
	}
	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}


// ─── Nav walker: mobile cities submenu ───────────────────────────────────────

class DE_Mobile_Cities_Walker extends Walker_Nav_Menu {
	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		$output .= '<li>';
		$output .= '<a href="' . esc_url( $data_object->url ) . '" class="de-mobile-nav__sublink">';
		$output .= esc_html( $data_object->title );
		$output .= '</a>';
	}
	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}


// ─── Nav walker: desktop primary nav ─────────────────────────────────────────

class DE_Primary_Nav_Walker extends Walker_Nav_Menu {
	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		$is_active = in_array( 'current-menu-item', $data_object->classes ?? [] );

		if ( strtolower( trim( $data_object->title ) ) === 'cities' ) {
			$output .= '<li class="de-nav__item de-nav__item--dropdown" id="cities-nav-item">';
			$output .= '<button class="de-nav__link de-nav__dropdown-trigger" aria-haspopup="true" aria-expanded="false" aria-controls="cities-dropdown" id="cities-dropdown-trigger">';
			$output .= 'Cities <span class="de-nav__chevron" aria-hidden="true">▾</span>';
			$output .= '</button>';
			$output .= wp_nav_menu( [
				'theme_location' => 'cities',
				'items_wrap'     => '<ul class="de-dropdown" id="cities-dropdown" role="menu" aria-labelledby="cities-dropdown-trigger">%3$s</ul>',
				'container'      => false,
				'walker'         => new DE_Dropdown_Walker(),
				'fallback_cb'    => false,
				'echo'           => false,
			] );
		} else {
			$output .= '<li class="de-nav__item">';
			$output .= '<a href="' . esc_url( $data_object->url ) . '" class="de-nav__link' . ( $is_active ? ' de-nav__link--active' : '' ) . '"' . ( $is_active ? ' aria-current="page"' : '' ) . '>';
			$output .= esc_html( $data_object->title );
			$output .= '</a>';
		}
	}
	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}


// ─── Nav walker: mobile primary nav ──────────────────────────────────────────

class DE_Mobile_Primary_Walker extends Walker_Nav_Menu {
	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		$is_active = in_array( 'current-menu-item', $data_object->classes ?? [] );

		if ( strtolower( trim( $data_object->title ) ) === 'cities' ) {
			$output .= '<li class="de-mobile-nav__item--accordion">';
			$output .= '<button class="de-mobile-nav__link de-mobile-nav__accordion-trigger" aria-expanded="false" aria-controls="mobile-cities-list">';
			$output .= 'Cities <span class="de-mobile-nav__chevron" aria-hidden="true">▾</span>';
			$output .= '</button>';
			$output .= wp_nav_menu( [
				'theme_location' => 'cities',
				'items_wrap'     => '<ul class="de-mobile-nav__submenu" id="mobile-cities-list">%3$s</ul>',
				'container'      => false,
				'walker'         => new DE_Mobile_Cities_Walker(),
				'fallback_cb'    => false,
				'echo'           => false,
			] );
		} else {
			$output .= '<li>';
			$output .= '<a href="' . esc_url( $data_object->url ) . '" class="de-mobile-nav__link"' . ( $is_active ? ' aria-current="page"' : '' ) . '>';
			$output .= esc_html( $data_object->title );
			$output .= '</a>';
		}
	}
	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}


// ─── Force correct template by page slug ─────────────────────────────────────

add_filter( 'template_include', function ( $template ) {
	if ( is_page() ) {
$slug = get_post_field( 'post_name', get_the_ID() );
		$city_slugs = [
			'bentonville-ar-real-estate',
			'rogers-ar-real-estate',
			'fayetteville-ar-real-estate',
			'springdale-ar-real-estate',
			'bella-vista-ar-real-estate',
			'lowell-ar-real-estate',
			'siloam-springs-ar-real-estate',
			'eureka-springs-ar-real-estate',
		];
		if ( in_array( $slug, $city_slugs ) ) {
			$t = get_stylesheet_directory() . '/page-templates/city-page.php';
			if ( file_exists( $t ) ) return $t;
		}
	}
	return $template;
} );


// ─── Remove Kadence built-in header (header.php overrides it entirely) ────────

remove_action( 'kadence_header', 'kadence_display_header' );
add_filter( 'kadence_show_header', '__return_false' );


// ─── Properties page: hide title and remove gap above IDX widget ─────────────

add_action( 'wp_head', function () {
	if ( is_page( 'properties' ) ) {
		echo '<style>
.entry-title { display: none !important; }
.entry-content { padding-top: 0 !important; margin-top: 0 !important; }
.site-main { padding-top: 0 !important; margin-top: 0 !important; }
</style>';
	}
} );


// ─── Security hardening ───────────────────────────────────────────────────────

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
add_filter( 'the_generator', '__return_empty_string' );
add_filter( 'xmlrpc_enabled', '__return_false' );
