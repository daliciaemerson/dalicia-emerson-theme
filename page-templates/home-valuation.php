<?php
/**
 * Template Name: Home Valuation
 * Template Post Type: page
 *
 * Seller lead page: compact hero (Contact page pattern), editor content in
 * .de-city-page__body, then the lead form with interest preset to "selling".
 * Layout and sidebar reuse the city page patterns.
 */

get_header();

$page_content = get_the_content();
?>

<main id="main" class="de-valuation-page" role="main">

	<!-- ── Hero ──────────────────────────────────────────────────────────── -->
	<section class="de-page-hero de-page-hero--compact" aria-labelledby="valuation-hero-heading">
		<div class="de-container">
			<h1 id="valuation-hero-heading">What&rsquo;s My Home Worth?</h1>
			<p class="de-page-hero__subtitle">
				A free, personal valuation from a local NWA REALTOR&reg;
			</p>
		</div>
	</section>

	<div class="de-container de-city-page__layout">

		<!-- ── Main Column ───────────────────────────────────────────────── -->
		<article class="de-valuation-page__content">

			<!-- ── Page Content (written in WordPress editor) ────────────── -->
			<?php if ( $page_content ) : ?>
			<div class="de-city-page__body entry-content">
				<?php the_content(); ?>
			</div>
			<?php endif; ?>

			<!-- ── Valuation request form ─────────────────────────────────── -->
			<div id="valuation-form" class="de-sidebar-form">
				<h3>Request Your Free Valuation</h3>
				<?php get_template_part( 'template-parts/lead-form', null, [ 'source' => 'home-valuation', 'interest' => 'selling' ] ); ?>
			</div>

		</article>

		<!-- ── Sidebar ───────────────────────────────────────────────────── -->
		<aside class="de-city-page__sidebar" role="complementary" aria-label="Contact information">
			<?php get_template_part( 'template-parts/agent-contact-card' ); ?>
		</aside>

	</div><!-- .de-city-page__layout -->

</main>

<?php get_footer(); ?>
