<?php
/**
 * Template Name: City Page
 * Template Post Type: page
 *
 * Reusable for all 8 NWA cities. Set city-specific data in the
 * "City Page Settings" meta box (added in functions.php).
 *
 * Target keyword pattern: "homes for sale in [City] AR"
 * Example: "homes for sale in Bentonville AR"
 *
 * Required custom fields (set per page):
 *   _de_city_name         — e.g. "Bentonville"
 *   _de_city_population   — e.g. "55,000"
 *   _de_city_median_price — e.g. "$485,000"
 */

get_header();

$city          = get_post_meta( get_the_ID(), '_de_city_name', true )         ?: 'Northwest Arkansas';
$population    = get_post_meta( get_the_ID(), '_de_city_population', true )   ?: '';
$median_price  = get_post_meta( get_the_ID(), '_de_city_median_price', true ) ?: '';
$page_content  = get_the_content();
?>

<main id="main" class="de-city-page" role="main" data-city="<?php echo esc_attr( $city ); ?>">

	<!-- ── Hero ──────────────────────────────────────────────────────────── -->
	<?php
	$hero_bg = has_post_thumbnail()
		? ' style="background-image:url(\'' . esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ) . '\');"'
		: '';
	?>
	<section class="de-hero de-hero--city" aria-labelledby="city-hero-heading"<?php echo $hero_bg; ?>>
		<div class="de-hero__overlay"></div>
		<div class="de-container">
			<h1 id="city-hero-heading" class="de-hero__title">
				Homes for Sale in <?php echo esc_html( $city ); ?>, AR
			</h1>
			<p class="de-hero__subtitle">
				Local expertise from Dalicia Emerson &mdash; <?php echo esc_html( DE_REGION ); ?> REALTOR®
			</p>
		</div>
	</section>

	<!-- ── Stats Bar ─────────────────────────────────────────────────────── -->
	<?php if ( $population || $median_price ) : ?>
	<div class="de-stats-bar" role="region" aria-label="<?php echo esc_attr( $city ); ?> market snapshot">
		<div class="de-container de-stats-bar__inner">
			<?php if ( $population ) : ?>
			<div class="de-stat">
				<span class="de-stat__value"><?php echo esc_html( $population ); ?></span>
				<span class="de-stat__label">Population</span>
			</div>
			<?php endif; ?>
			<?php if ( $median_price ) : ?>
			<div class="de-stat">
				<span class="de-stat__value"><?php echo esc_html( $median_price ); ?></span>
				<span class="de-stat__label">Median Home Price</span>
			</div>
			<?php endif; ?>
			<?php
			$city_dom = [
				'Bentonville'    => '59',
				'Rogers'         => '57',
				'Fayetteville'   => '57',
				'Springdale'     => '58',
				'Bella Vista'    => '49',
				'Lowell'         => '42',
				'Siloam Springs' => '67',
			];
			if ( isset( $city_dom[ $city ] ) ) : ?>
			<div class="de-stat">
				<span class="de-stat__value"><?php echo esc_html( $city_dom[ $city ] ); ?></span>
				<span class="de-stat__label">Avg Days on Market</span>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>

	<!-- ── IDX Listings ──────────────────────────────────────────────────── -->
	<section class="de-city-idx">
		<div class="de-city-idx__inner">
			<?php
			$city_hotsheets = [
				'Bentonville'    => 'Bentonville Listings',
				'Rogers'         => 'Rogers Listings',
				'Fayetteville'   => 'Fayetteville Listings',
				'Springdale'     => 'Springdale Listings',
				'Bella Vista'    => 'Bella Vista Listings',
				'Lowell'         => 'Lowell Listings',
				'Siloam Springs' => 'Siloam Springs Listings',
			];
			if ( isset( $city_hotsheets[ $city ] ) ) {
				echo do_shortcode( '[showcaseidx_hotsheet name="' . esc_attr( $city_hotsheets[ $city ] ) . '"]' );
			}
			?>
		</div>
	</section>

	<div class="de-container de-city-page__layout">

		<!-- ── Main Column ───────────────────────────────────────────────── -->
		<article class="de-city-page__content"
		         itemscope itemtype="https://schema.org/WebPage"
		         itemprop="name" content="Homes for Sale in <?php echo esc_attr( $city ); ?>, AR">

			<!-- ── Page Content (written in WordPress editor) ────────────── -->
			<?php if ( $page_content ) : ?>
			<div class="de-city-page__body entry-content">
				<?php the_content(); ?>
			</div>
			<?php endif; ?>

			<!-- ── Neighborhood Sub-sections ─────────────────────────────── -->
			<section class="de-neighborhood-intro" aria-labelledby="city-neighborhood-heading">
				<h2 id="city-neighborhood-heading">Living in <?php echo esc_html( $city ); ?>, Arkansas</h2>
				<p>
					<?php echo esc_html( $city ); ?> is one of the most sought-after communities in
					<?php echo esc_html( DE_REGION ); ?>. Whether you&rsquo;re searching for your first home,
					upgrading to a luxury property, or relocating from out of state, I can help you
					navigate this market with confidence.
				</p>
				<!-- Expand with city-specific content written per page in WP editor -->
			</section>

		</article>

		<!-- ── Sidebar ───────────────────────────────────────────────────── -->
		<aside class="de-city-page__sidebar" role="complementary" aria-label="Contact and resources">

			<!-- Agent contact card -->
			<div class="de-agent-bio-card">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dalicia-headshot.jpg' ) ); ?>"
				     alt="Dalicia Emerson, REALTOR® — Northwest Arkansas"
				     class="de-agent-bio-card__photo"
				     width="300" height="375" loading="eager">
				<div class="de-agent-bio-card__body">
					<h2 class="de-agent-bio-card__name"><?php echo esc_html( DE_AGENT_NAME ); ?></h2>
					<p class="de-agent-bio-card__title">REALTOR® &bull; Coldwell Banker Global Luxury®</p>
					<p class="de-agent-bio-card__brokerage"><?php echo esc_html( DE_BROKERAGE ); ?></p>
					<ul class="de-agent-bio-card__contact">
						<li>
							<a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-agent-bio-card__contact-link">
								<span class="screen-reader-text">Phone: </span>
								<?php echo esc_html( DE_PHONE_DISPLAY ); ?>
							</a>
						</li>
						<li>
							<a href="mailto:<?php echo esc_attr( DE_EMAIL ); ?>" class="de-agent-bio-card__contact-link">
								<span class="screen-reader-text">Email: </span>
								<?php echo esc_html( DE_EMAIL ); ?>
							</a>
						</li>
					</ul>
					<p class="de-agent-bio-card__license">
						AR License #<?php echo esc_html( DE_LICENSE ); ?>
					</p>
				</div>
			</div>

			<!-- Quick contact form -->
			<div id="city-contact-form" class="de-sidebar-form">
				<h3>Ask About <?php echo esc_html( $city ); ?> Homes</h3>
				<?php get_template_part( 'template-parts/lead-form', null, [ 'source' => 'city-' . sanitize_title( $city ) ] ); ?>
			</div>

		</aside>

	</div><!-- .de-city-page__layout -->

</main>

<?php get_footer(); ?>
