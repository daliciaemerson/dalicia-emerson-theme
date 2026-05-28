<?php
/**
 * Template Name: Luxury Homes
 * Template Post Type: page
 *
 * Target keyword:  "luxury homes Bentonville AR"
 * Secondary:       "luxury real estate Northwest Arkansas", "NWA luxury REALTOR"
 *                  "Coldwell Banker Global Luxury NWA"
 */

get_header();
?>

<main id="main" class="de-luxury-page" role="main">

	<!-- ── Hero ──────────────────────────────────────────────────────────── -->
	<section class="de-hero de-hero--luxury" aria-labelledby="luxury-hero-heading">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'de-hero', [ 'class' => 'de-hero__bg-image', 'alt' => 'Luxury home in Northwest Arkansas' ] ); ?>
		<?php endif; ?>
		<div class="de-hero__overlay de-hero__overlay--dark"></div>
		<div class="de-container">
			<p class="de-hero__eyebrow">Coldwell Banker Global Luxury®</p>
			<h1 id="luxury-hero-heading" class="de-hero__title">
				Luxury Homes for Sale in<br>
				Northwest Arkansas
			</h1>
			<p class="de-hero__subtitle">
				Bentonville &bull; Rogers &bull; Fayetteville &bull; Springdale
			</p>
			<div class="de-hero__actions">
				<a href="#luxury-listings" class="de-btn de-btn--gold de-btn--large">
					Browse Luxury Listings
				</a>
				<a href="#luxury-contact" class="de-btn de-btn--outline-white de-btn--large">
					Private Showing
				</a>
			</div>
		</div>
	</section>

	<!-- ── Luxury Credentials Bar ────────────────────────────────────────── -->
	<div class="de-credentials-bar" role="region" aria-label="Agent credentials">
		<div class="de-container de-credentials-bar__inner">
			<div class="de-credential">
				<span class="de-credential__icon" aria-hidden="true">★</span>
				<span>Coldwell Banker Global Luxury® Certified</span>
			</div>
			<div class="de-credential">
				<span class="de-credential__icon" aria-hidden="true">◉</span>
				<span>Specializing in $800K+ Properties</span>
			</div>
			<div class="de-credential">
				<span class="de-credential__icon" aria-hidden="true">◎</span>
				<span>Global Marketing Network</span>
			</div>
		</div>
	</div>

	<!-- ── Listing Search ────────────────────────────────────────────────── -->
	<section id="luxury-listings" class="de-section de-container" aria-labelledby="luxury-listings-heading">
		<h2 id="luxury-listings-heading">Featured Luxury Listings in NWA</h2>
		<p class="de-section__intro">
			Browse current luxury homes for sale across Northwest Arkansas. Every property below
			has been personally reviewed by Dalicia Emerson.
		</p>

		<!-- ── IDX Luxury Search ─────────────────────────────────────────────
		     Replace with your IDX plugin shortcode filtered by min price.
		     Showcase IDX example:
		       [showcaseidx_search minprice="500000" state="AR" counties="Benton,Washington"]
		     iHomeFinder example:
		       [ihf_search_form min_price="500000"]
		────────────────────────────────────────────────────────────────────── -->
		<div class="de-luxury-idx-wrap">
			<?php echo do_shortcode( '[showcaseidx_hotsheet name="Luxury NWA Listings"]' ); ?>
		</div>

	</section>

	<!-- ── Why Global Luxury ─────────────────────────────────────────────── -->
	<section class="de-section de-section--alt" aria-labelledby="global-luxury-heading">
		<div class="de-container de-feature-grid">

			<div class="de-feature-grid__text">
				<h2 id="global-luxury-heading">
					What Coldwell Banker Global Luxury® Means for You
				</h2>
				<p>
					The Global Luxury designation is a network and a standard.
					Your property reaches <strong>affluent buyers from over 40 countries</strong>
					through premium print, digital, and social channels most agents
					simply don't have access to.
				</p>
				<ul class="de-feature-list">
					<li>International marketing through CB Global Luxury® network</li>
					<li>Professional photography, video, and 3D Matterport tours</li>
					<li>Targeted digital advertising to high-net-worth buyers</li>
					<li>White-glove negotiation and transaction management</li>
					<li>Relocation network from Walmart, Tyson, and J.B. Hunt</li>
				</ul>
			</div>

			<div class="de-feature-grid__image">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/luxury-living-nwa.jpg' ) ); ?>"
				     alt="Luxury home interior in Bentonville, Arkansas"
				     width="640" height="480" loading="lazy">
			</div>

		</div>
	</section>

	<!-- ── Luxury Market Areas ───────────────────────────────────────────── -->
	<section class="de-section de-container" aria-labelledby="luxury-areas-heading">
		<h2 id="luxury-areas-heading">Northwest Arkansas Luxury Markets</h2>

		<div class="de-city-cards">
			<?php
			$luxury_cities = [
				[
					'city'  => 'Bentonville',
					'desc'  => 'The cultural epicenter of NWA. Gated communities, estate homes near Crystal Bridges, and new construction in the $700K–$3M range.',
					'slug'  => 'bentonville',
				],
				[
					'city'  => 'Rogers',
					'desc'  => 'Lake Leatherwood estates, Pinnacle Hills corridor, and executive homes drawing corporate relocatees.',
					'slug'  => 'rogers',
				],
				[
					'city'  => 'Fayetteville',
					'desc'  => 'Historic estate properties, custom builds in the $600K+ range, and proximity to the University of Arkansas.',
					'slug'  => 'fayetteville',
				],
				[
					'city'  => 'Bella Vista',
					'desc'  => 'Lake-front estates, golf course communities, and private acreage in the Ozark hills.',
					'slug'  => 'bella-vista',
				],
			];

			foreach ( $luxury_cities as $lc ) :
				$city_page = get_posts( [
					'post_type'      => 'page',
					'meta_key'       => '_de_city_name',
					'meta_value'     => $lc['city'],
					'posts_per_page' => 1,
				] );
				$city_url  = $city_page ? get_permalink( $city_page[0] ) : '#';
			?>
			<article class="de-city-card" itemscope itemtype="https://schema.org/City">
				<h3 class="de-city-card__name" itemprop="name"><?php echo esc_html( $lc['city'] ); ?>, AR</h3>
				<p class="de-city-card__desc"><?php echo esc_html( $lc['desc'] ); ?></p>
				<a href="<?php echo esc_url( $city_url ); ?>" class="de-city-card__link">
					Homes in <?php echo esc_html( $lc['city'] ); ?> &rarr;
				</a>
			</article>
			<?php endforeach; ?>
		</div>

	</section>

	<!-- ── Seller CTA ────────────────────────────────────────────────────── -->
	<section class="de-section de-section--luxury-dark" aria-labelledby="seller-cta-heading">
		<div class="de-container de-text-center">
			<h2 id="seller-cta-heading">Selling a Luxury Home in NWA?</h2>
			<p class="de-section__intro de-text-light">
				My marketing approach is built for properties that deserve more than a yard sign
				and an MLS entry. Let&rsquo;s talk about what your home is worth and how I&rsquo;d
				position it in the current market.
			</p>
			<a href="#luxury-contact" class="de-btn de-btn--gold de-btn--large">
				Request a Private Valuation
			</a>
		</div>
	</section>

	<!-- ── Contact Section ───────────────────────────────────────────────── -->
	<section id="luxury-contact" class="de-cta-section" aria-labelledby="luxury-contact-heading">
		<div class="de-container de-cta-section__inner">
			<div class="de-cta-section__copy">
				<h2 id="luxury-contact-heading">Let&rsquo;s Talk Luxury Real Estate</h2>
				<p>
					Whether you&rsquo;re buying or selling, I&rsquo;d love a conversation.
					Reach me directly:
				</p>
				<ul class="de-contact-list">
					<li><a href="tel:<?php echo esc_attr( DE_PHONE ); ?>"><?php echo esc_html( DE_PHONE_DISPLAY ); ?></a></li>
					<li><a href="mailto:<?php echo esc_attr( DE_EMAIL ); ?>"><?php echo esc_html( DE_EMAIL ); ?></a></li>
				</ul>
			</div>
			<div class="de-cta-section__form">
				<?php get_template_part( 'template-parts/lead-form', null, [ 'source' => 'luxury-homes' ] ); ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
