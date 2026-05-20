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
		<div class="de-hero__bg" style="background-image:url('https://daliciaemerson.wpenginepowered.com/wp-content/uploads/2026/04/NWA-Most-Dynamic-Metros.jpg');"></div>
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
			<span class="de-trust-item"><span style="color:#C9A84C;">&#10003;</span> NWA Local Expert</span>
			<span class="de-trust-item"><span style="color:#C9A84C;">&#10003;</span> 500+ Families Helped</span>
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
	<section class="de-cities" aria-labelledby="cities-heading">
		<div class="de-container">
			<h2 id="cities-heading" class="de-section-title">Explore NWA Communities</h2>
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
					[ 'slug' => 'eureka-springs-ar-real-estate','name' => 'Eureka Springs', 'sub' => 'Historic District &bull; Arts Scene' ],
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
					<p class="de-testimonial__quote">&ldquo;Dalicia made our relocation from Dallas seamless. She knew every neighborhood, every price point, and had us under contract in two weeks.&rdquo;</p>
					<cite class="de-testimonial__cite">&mdash; Relocating family, Bentonville AR</cite>
				</blockquote>

				<blockquote class="de-testimonial">
					<p class="de-testimonial__quote">&ldquo;We needed a luxury specialist who understood the NWA market. Dalicia delivered — and sold our home above asking price.&rdquo;</p>
					<cite class="de-testimonial__cite">&mdash; Seller, Rogers AR</cite>
				</blockquote>
			</div>

			<div class="de-social-proof__bio">
				<img src="https://daliciaemerson.wpenginepowered.com/wp-content/uploads/2026/04/BB6FBCB7-6C67-42D9-A3EE-C7151EB55A70_1_201_a.jpeg"
				     alt="Dalicia Emerson, Northwest Arkansas REALTOR®"
				     class="de-agent-card__photo"
				     width="240" height="300" loading="lazy">
				<h3 class="de-agent-card__name" style="color:#ffffff;"><?php echo esc_html( DE_AGENT_NAME ); ?></h3>
				<p class="de-agent-card__brokerage" style="color:rgba(255,255,255,0.75);"><?php echo esc_html( DE_BROKERAGE ); ?></p>
				<p class="de-agent-card__note" style="color:var(--de-gold);">Global Luxury Certified &bull; License SA00088247</p>
				<a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-btn de-btn--primary de-btn--full" style="color:#ffffff;">
					<?php echo esc_html( DE_PHONE_DISPLAY ); ?>
				</a>
				<a href="/contact-dalicia-emerson/" style="display:block; margin-top:12px; text-align:center; color:var(--de-gold); font-weight:600; font-size:0.88rem; letter-spacing:0.06em; text-transform:uppercase; text-decoration:none;">
					Send a Message
				</a>
			</div>

		</div>
	</section>

</main>


<?php get_footer(); ?>
