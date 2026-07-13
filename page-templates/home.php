<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 * Target keyword: "Northwest Arkansas real estate"
 * Secondary:      "NWA homes for sale", "Bentonville real estate agent"
 */

get_header();
?>

<main id="main" class="de-homepage" role="main">

	<!-- ── Hero ──────────────────────────────────────────────────────────── -->
	<section class="de-hero de-hero--home" aria-labelledby="home-hero-heading">
		<div class="de-hero__bg" style="background-image:url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>');"></div>
		<div class="de-hero__overlay"></div>
		<div class="de-container de-hero__inner">
			<h1 id="home-hero-heading" class="de-hero__headline">
				Northwest Arkansas Real Estate.<br>
				<em>Done Right.</em>
			</h1>
			<p class="de-hero__subheadline">
				Relocation specialist &amp; luxury expert serving Bentonville, Rogers,
				Fayetteville &amp; all of NWA &mdash; Dalicia Emerson, Coldwell Banker
			</p>
			<div class="de-hero__actions">
				<a href="/properties/" class="de-btn de-btn--primary de-btn--lg">
					Search Homes
				</a>
				<a href="/moving-to-northwest-arkansas/" class="de-btn-hero de-btn-hero--outline">
					Free Relocation Guide
				</a>
			</div>
		</div>
	</section>

	<!-- ── Trust Bar ─────────────────────────────────────────────────────── -->
	<div class="de-trust-bar" role="region" aria-label="Credentials">
		<div class="de-trust-bar__inner">
			<span class="de-trust-item"><span style="color:#C9A84C;">&#10003;</span> Global Luxury Certified</span>
			<span class="de-trust-item"><span style="color:#C9A84C;">&#10003;</span> Coldwell Banker</span>
			<span class="de-trust-item"><span style="color:#C9A84C;">&#10003;</span> 30+ Years in NWA</span>
			<span class="de-trust-item"><span style="color:#C9A84C;">&#10003;</span> Trusted NWA REALTOR®</span>
		</div>
	</div>

	<!-- ── IDX Search ────────────────────────────────────────────────────── -->
	<section class="de-idx-search" aria-label="Search NWA Homes">
		<div class="de-container">
			<?php echo do_shortcode( '[showcaseidx_search]' ); ?>
		</div>
	</section>

	<!-- ── Featured Listings ─────────────────────────────────────────────── -->
	<section class="de-listings" aria-labelledby="featured-listings-heading">
		<div class="de-container">
			<h2 id="featured-listings-heading" class="de-section-title">Homes for Sale in Northwest Arkansas</h2>
			<?php echo do_shortcode( '[showcaseidx_hotsheet name="Featured NWA Listings"]' ); ?>
		</div>
	</section>

	<!-- ── City Grid ─────────────────────────────────────────────────────── -->
	<section class="de-cities" aria-labelledby="communities-heading">
		<div class="de-container">
			<h2 id="communities-heading" class="de-section-title">Explore NWA Communities</h2>
			<div class="de-cities__grid">
				<?php
				$de_cities = [
					[ 'slug' => 'bentonville-ar-real-estate',   'name' => 'Bentonville',    'sub' => 'Walmart HQ &bull; Crystal Bridges' ],
					[ 'slug' => 'rogers-ar-real-estate',        'name' => 'Rogers',         'sub' => 'Pinnacle Hills &bull; Lake Leatherwood' ],
					[ 'slug' => 'fayetteville-ar-real-estate',  'name' => 'Fayetteville',   'sub' => 'U of A &bull; Dickson Street' ],
					[ 'slug' => 'springdale-ar-real-estate',    'name' => 'Springdale',     'sub' => 'Tyson Foods HQ &bull; Arvest Ballpark' ],
					[ 'slug' => 'bella-vista-ar-real-estate',   'name' => 'Bella Vista',    'sub' => 'Lakes &bull; Golf &bull; Trails' ],
					[ 'slug' => 'lowell-ar-real-estate',        'name' => 'Lowell',         'sub' => 'J.B. Hunt HQ &bull; Growing Fast' ],
					[ 'slug' => 'siloam-springs-ar-real-estate','name' => 'Siloam Springs', 'sub' => 'Illinois River &bull; John Brown Univ.' ],
					];
				foreach ( $de_cities as $de_city ) :
					$de_page = get_page_by_path( $de_city['slug'] );
					$de_img  = $de_page ? get_the_post_thumbnail_url( $de_page->ID, 'large' ) : '';
					$de_bg   = $de_img ? ' style="background-image:url(' . esc_url( $de_img ) . ');"' : '';
				?>
				<a href="/<?php echo esc_attr( $de_city['slug'] ); ?>/" class="de-city-card">
					<div class="de-city-card__bg"<?php echo $de_bg; ?>></div>
					<div class="de-city-card__content">
						<span class="de-city-card__name"><?php echo esc_html( $de_city['name'] ); ?></span>
						<span class="de-city-card__tags"><?php echo $de_city['sub']; ?></span>
					</div>
				</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ── Social Proof ──────────────────────────────────────────────────── -->
	<section class="de-social-proof" aria-labelledby="social-proof-heading">
		<div class="de-container de-social-proof__inner">

			<div class="de-social-proof__testimonials">
				<h2 id="social-proof-heading" class="de-section-title">What Clients Say</h2>

				<blockquote class="de-testimonial">
					<p class="de-testimonial__quote">"Dalicia has been keeping an eye on the market for a while for us. We knew we were relocating to the area but were not sure exactly when, where, and what our situation would be. When we found the place, she made quick work of the offer, negotiations, and everything needed to get the ball rolling!"</p>
					<cite class="de-testimonial__cite">— Jason L., Relocating Family</cite>
				</blockquote>

				<blockquote class="de-testimonial">
					<p class="de-testimonial__quote">"Dalicia sold my house in less than two weeks and that is huge for me. She communicates daily and does not leave me hanging. She made the process as stress free as possible."</p>
					<cite class="de-testimonial__cite">— Linda S., Home Seller</cite>
				</blockquote>

				<blockquote class="de-testimonial">
					<p class="de-testimonial__quote">"Dalicia is deeply knowledgeable, diligent, and supportive. She had our best interest in mind from beginning to end. Thank you for helping us secure the home of our dreams!"</p>
					<cite class="de-testimonial__cite">— Madison S., First-Time Buyer</cite>
				</blockquote>

				<a href="/reviews/" class="de-btn de-btn--outline-white" style="margin-top:24px; display:inline-block;">
					Read All 28 Reviews →
				</a>
			</div>

			<div class="de-social-proof__bio">
				<div class="de-agent-bio-card">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/headshot/dalicia-headshot.jpg' ) ); ?>"
					     alt="Dalicia Emerson, REALTOR® — Northwest Arkansas"
					     class="de-agent-bio-card__photo"
					     width="300" height="375" loading="eager">
				</div>
			</div>

		</div>
	</section>

</main>


<?php get_footer(); ?>
