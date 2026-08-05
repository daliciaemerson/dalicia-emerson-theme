<?php
/**
 * Template Name: Walmart Supplier Relocation
 * Template Post Type: page
 *
 * Target keyword:  "Walmart supplier relocation NWA"
 * Secondary:       "relocating to Bentonville for Walmart",
 *                  "Walmart vendor relocation Bentonville AR",
 *                  "moving to Bentonville for work"
 */

get_header();
?>

<main id="main" class="de-walmart-page" role="main">

	<!-- ── Hero ──────────────────────────────────────────────────────────── -->
	<section class="de-hero de-hero--corporate" aria-labelledby="walmart-hero-heading">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'de-hero', [ 'class' => 'de-hero__bg-image', 'alt' => 'Bentonville Arkansas downtown' ] ); ?>
		<?php endif; ?>
		<div class="de-hero__overlay"></div>
		<div class="de-container">
			<p class="de-hero__eyebrow">Walmart &bull; Tyson &bull; J.B. Hunt &bull; Supplier Companies</p>
			<h1 id="walmart-hero-heading" class="de-hero__title">
				Relocating to Bentonville for Walmart?<br>
				<span>I&rsquo;ve Done This Before.</span>
			</h1>
			<p class="de-hero__subtitle">
				Fast timelines. Corporate relocation packages honored. NWA market expertise
				from a REALTOR® who lives and works here.
			</p>
			<div class="de-hero__actions">
				<a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-btn de-btn--primary de-btn--large">
					Call <?php echo esc_html( DE_PHONE_DISPLAY ); ?>
				</a>
				<a href="#walmart-contact" class="de-btn de-btn--outline-white de-btn--large">
					Free Relocation Consult
				</a>
			</div>
		</div>
	</section>

	<!-- ── Trust Signals ─────────────────────────────────────────────────── -->
	<div class="de-trust-bar" role="region" aria-label="Relocation stats">
		<div class="de-container de-trust-bar__inner">
			<div class="de-trust-item">
				<span class="de-trust-item__number">36</span>
				<span class="de-trust-item__label">New residents per day in NWA</span>
			</div>
			<div class="de-trust-item">
				<span class="de-trust-item__number">500+</span>
				<span class="de-trust-item__label">Walmart supplier companies in the area</span>
			</div>
			<div class="de-trust-item">
				<span class="de-trust-item__number">11%</span>
				<span class="de-trust-item__label">Below national avg. cost of living</span>
			</div>
		</div>
	</div>

	<!-- ── Main Content ──────────────────────────────────────────────────── -->
	<div class="de-container de-walmart-page__layout">

		<article class="de-walmart-page__content">

			<!-- WP editor content goes here -->
			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<!-- ── Corporate Employer Section ─────────────────────────────── -->
			<section class="de-section" aria-labelledby="employers-heading">
				<h2 id="employers-heading">Who&rsquo;s Bringing Talent to NWA</h2>
				<p>
					Northwest Arkansas is home to some of the most consequential companies in American
					business. If you&rsquo;ve been asked to relocate here, you&rsquo;re joining a
					professional community that&rsquo;s growing faster than almost anywhere in the country.
				</p>

				<div class="de-employer-grid">
					<div class="de-employer-card">
						<h3>Walmart Inc.</h3>
						<p>Headquartered in Bentonville. Draws hundreds of buyer representatives, category
						managers, and suppliers to the area annually. Many relocatees come from Dallas,
						Chicago, New York, and the coasts.</p>
					</div>
					<div class="de-employer-card">
						<h3>Tyson Foods</h3>
						<p>World headquarters in Springdale, AR. One of the world&rsquo;s largest protein
						producers and a major regional employer pulling talent from across the country.</p>
					</div>
					<div class="de-employer-card">
						<h3>J.B. Hunt Transport</h3>
						<p>Fortune 500 logistics company headquartered in Lowell, AR. Consistent driver of
						professional relocations into the Rogers/Lowell corridor.</p>
					</div>
					<div class="de-employer-card">
						<h3>Supplier &amp; Vendor Companies</h3>
						<p>More than 500 companies maintain a Bentonville-area presence specifically to serve
						Walmart buyers. P&amp;G, Unilever, General Mills, PepsiCo, and hundreds of smaller
						suppliers have offices here.</p>
					</div>
				</div>
			</section>

			<!-- ── Timeline Section ───────────────────────────────────────── -->
			<section class="de-section" aria-labelledby="timeline-heading">
				<h2 id="timeline-heading">Your Relocation Timeline</h2>
				<p>
					Most corporate relocations to NWA operate on tight timelines &mdash; four to
					eight weeks is common. Here&rsquo;s how I structure the process to make sure
					you&rsquo;re in contract before your start date:
				</p>

				<ol class="de-timeline">
					<li class="de-timeline__step">
						<span class="de-timeline__marker">1</span>
						<div>
							<h3>Virtual Strategy Call (Week 1)</h3>
							<p>We talk through your timeline, relocation package details, must-haves,
							and which neighborhoods fit your lifestyle before you fly in.</p>
						</div>
					</li>
					<li class="de-timeline__step">
						<span class="de-timeline__marker">2</span>
						<div>
							<h3>Curated Home Tour (Week 2&ndash;3)</h3>
							<p>I build a focused itinerary: typically 8&ndash;12 homes over two days
							in the neighborhoods that match your criteria. No wasted time.</p>
						</div>
					</li>
					<li class="de-timeline__step">
						<span class="de-timeline__marker">3</span>
						<div>
							<h3>Offer &amp; Negotiation (Week 3&ndash;4)</h3>
							<p>NWA moves fast. I&rsquo;ll advise you on competitive offer strategy and
							manage the negotiation so you don&rsquo;t overpay or lose the house.</p>
						</div>
					</li>
					<li class="de-timeline__step">
						<span class="de-timeline__marker">4</span>
						<div>
							<h3>Closing &amp; Settlement (Week 5&ndash;8)</h3>
							<p>I coordinate with lenders, inspectors, and title companies &mdash;
							and yes, I work with all major corporate relocation management companies
							(Cartus, SIRVA, Altair, etc.).</p>
						</div>
					</li>
				</ol>
			</section>

			<!-- ── Best Areas for Corporate Relocatees ────────────────────── -->
			<section class="de-section" aria-labelledby="walmart-areas-heading">
				<h2 id="walmart-areas-heading">Best Neighborhoods for Walmart Relocatees</h2>
				<p>
					Where you land depends on where you work, your family situation, and your
					budget. Here&rsquo;s my quick-reference guide:
				</p>

				<div class="de-relocation-grid">
					<div class="de-relocation-option">
						<h3>Bentonville</h3>
						<p><strong>Best for:</strong> Walmart HQ employees, executives, luxury buyers</p>
						<p><strong>Commute to WMT:</strong> 5&ndash;15 min</p>
						<p><strong>Price range:</strong> $350K&ndash;$3M+</p>
					</div>
					<div class="de-relocation-option">
						<h3>Rogers</h3>
						<p><strong>Best for:</strong> Families, lake lifestyle, balanced commute</p>
						<p><strong>Commute to WMT:</strong> 15&ndash;20 min</p>
						<p><strong>Price range:</strong> $300K&ndash;$1.5M</p>
					</div>
					<div class="de-relocation-option">
						<h3>Bella Vista</h3>
						<p><strong>Best for:</strong> More space, nature, golf courses, budget-conscious</p>
						<p><strong>Commute to WMT:</strong> 20&ndash;30 min</p>
						<p><strong>Price range:</strong> $275K&ndash;$900K</p>
					</div>
					<div class="de-relocation-option">
						<h3>Lowell / Springdale</h3>
						<p><strong>Best for:</strong> J.B. Hunt employees, value buyers</p>
						<p><strong>Commute to WMT:</strong> 20&ndash;35 min</p>
						<p><strong>Price range:</strong> $250K&ndash;$650K</p>
					</div>
				</div>
			</section>

		</article>

		<!-- ── Sidebar ───────────────────────────────────────────────────── -->
		<aside class="de-walmart-page__sidebar" role="complementary" aria-label="Quick contact">

			<?php get_template_part( 'template-parts/agent-contact-card' ); ?>

			<div id="walmart-sidebar-form" class="de-sidebar-form">
				<h3>Start Your Relocation</h3>
				<?php get_template_part( 'template-parts/lead-form', null, [ 'source' => 'walmart-relocation' ] ); ?>
			</div>

		</aside>

	</div>

	<!-- ── Full-width CTA ────────────────────────────────────────────────── -->
	<section id="walmart-contact" class="de-cta-section" aria-labelledby="walmart-cta-heading">
		<div class="de-container de-cta-section__inner">
			<div class="de-cta-section__copy">
				<h2 id="walmart-cta-heading">Let&rsquo;s Get Ahead of Your Timeline</h2>
				<p>
					The earlier we connect, the more options you&rsquo;ll have. Even if your
					start date is months out, knowing the market now means you&rsquo;ll be
					ready to move fast when the right house comes up.
				</p>
				<ul class="de-contact-list">
					<li><a href="tel:<?php echo esc_attr( DE_PHONE ); ?>"><?php echo esc_html( DE_PHONE_DISPLAY ); ?></a></li>
					<li><a href="mailto:<?php echo esc_attr( DE_EMAIL ); ?>"><?php echo esc_html( DE_EMAIL ); ?></a></li>
				</ul>
			</div>
			<div class="de-cta-section__form">
				<?php get_template_part( 'template-parts/lead-form', null, [ 'source' => 'walmart-relocation-bottom' ] ); ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
