<?php
/**
 * Template Name: Relocation Hub
 * Template Post Type: page
 *
 * Target keyword: "moving to Northwest Arkansas"
 * Secondary:      "relocating to NWA", "living in Bentonville AR"
 */

get_header();
?>

<main id="main" class="de-relocation-hub" role="main">

	<!-- ── Hero ──────────────────────────────────────────────────────────── -->
	<?php
	$hero_img = get_the_post_thumbnail_url( get_the_ID(), 'full' )
	            ?: get_stylesheet_directory_uri() . '/assets/images/nwa-relocation-hero.jpg';
	?>
	<section class="de-hero de-hero--relocation" aria-labelledby="relocation-hero-heading">
		<div class="de-hero__bg" style="background-image:url('<?php echo esc_url( $hero_img ); ?>');"></div>
		<div class="de-hero__overlay"></div>
		<div class="de-container">
			<h1 id="relocation-hero-heading" class="de-hero__headline">
				Moving to Northwest Arkansas?<br>
				<em>Here's Everything You Need to Know.</em>
			</h1>
			<p class="de-hero__subheadline">
				Written by Dalicia Emerson &mdash; NWA Luxury REALTOR®, Coldwell Banker
			</p>
			<a href="#relocation-contact" class="de-btn de-btn--primary de-btn--lg">
				Get a Free Relocation Consultation
			</a>
		</div>
	</section>

	<!-- ── Table of Contents ─────────────────────────────────────────────── -->
	<nav class="de-toc" aria-label="Page contents">
		<div class="de-container">
			<p class="de-toc__label">In This Guide:</p>
			<ol class="de-toc__list">
				<li><a href="#why-nwa-is-growing">Why NWA Is Growing So Fast</a></li>
				<li><a href="#cost-of-living">Cost of Living</a></li>
				<li><a href="#neighborhoods">Best Neighborhoods by Lifestyle</a></li>
				<li><a href="#life-in-nwa">What Life in NWA Actually Looks Like</a></li>
				<li><a href="#how-i-help">How I Help Relocating Buyers</a></li>
				<li><a href="#relocation-contact">Start Your NWA Search</a></li>
			</ol>
		</div>
	</nav>

	<!-- ── Main Content ──────────────────────────────────────────────────── -->
	<article class="de-article de-container" itemscope itemtype="https://schema.org/Article">
		<meta itemprop="author" content="<?php echo esc_attr( DE_AGENT_NAME ); ?>">

		<?php include get_theme_file_path( '/content/relocation-hub.php' ); ?>

	</article>

	<!-- ── Lead Capture ──────────────────────────────────────────────────── -->
	<section id="relocation-contact" class="de-cta-section" aria-labelledby="relocation-cta-heading">
		<div class="de-container de-cta-section__inner">

			<div class="de-cta-section__copy">
				<h2 id="relocation-cta-heading">Ready to Start Your NWA Search?</h2>
				<p>
					Whether your move is six weeks away or six months out, the best time to
					start the conversation is now. NWA&rsquo;s best neighborhoods move quickly,
					and knowing which areas fit your life &mdash; before you fly in for a
					house-hunting trip &mdash; puts you in a completely different position than
					buyers who show up without a plan.
				</p>
				<p>
					I offer free relocation consultations by phone or video call. We&rsquo;ll
					talk through your timeline, your priorities, and what I&rsquo;m seeing in
					the market right now. No pressure, no pitch &mdash; just honest information
					from someone who lives and works here.
				</p>
				<ul class="de-contact-list">
					<li>
						<a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-contact-list__link">
							Call <?php echo esc_html( DE_PHONE_DISPLAY ); ?>
						</a>
					</li>
					<li>
						<a href="#de-lead-form-relocation-hub" class="de-contact-list__link">
							Send a Message
						</a>
					</li>
				</ul>
				<p class="de-cta-section__byline">
					Dalicia Emerson &bull; Coldwell Banker Harris McHaney &amp; Faucette &bull; AR License #SA00088247
				</p>
			</div>

			<div class="de-cta-section__form">
				<?php get_template_part( 'template-parts/lead-form', null, [ 'source' => 'relocation-hub' ] ); ?>
			</div>

		</div>
	</section>

</main>

<?php get_footer(); ?>
