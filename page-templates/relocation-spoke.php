<?php
/**
 * Template Name: Relocation Spoke
 * Template Post Type: page
 */

get_header();

// Page-specific data
$company     = get_post_meta( get_the_ID(), '_de_company_name', true ) ?: 'Your Company';
$city        = get_post_meta( get_the_ID(), '_de_relocation_city', true ) ?: 'Northwest Arkansas';
$eyebrow     = get_post_meta( get_the_ID(), '_de_eyebrow', true ) ?: 'Corporate Relocation';
$subtitle    = get_post_meta( get_the_ID(), '_de_subtitle', true ) ?: 'Fast timelines. NWA market expertise. Relocation packages honored.';
?>

<main id="main" class="de-relocation-spoke-page" role="main">

  <!-- ── Hero ──────────────────────────────────────────────────────────── -->
  <section class="de-hero de-hero--corporate" aria-labelledby="spoke-hero-heading">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'de-hero', [ 'class' => 'de-hero__bg-image', 'alt' => 'Relocating to Northwest Arkansas' ] ); ?>
    <?php endif; ?>
    <div class="de-hero__overlay de-hero__overlay--dark"></div>
    <div class="de-container">
      <p class="de-hero__eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
      <h1 id="spoke-hero-heading" class="de-hero__title">
        Relocating to NWA<br>
        <span style="color:var(--de-gold);">for <?php echo esc_html( $company ); ?>?</span>
      </h1>
      <p class="de-hero__subtitle"><?php echo esc_html( $subtitle ); ?></p>
      <div class="de-hero__actions">
        <a href="#spoke-contact" class="de-btn de-btn--gold de-btn--large">
          Start Your Relocation
        </a>
        <a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-btn de-btn--outline-white de-btn--large">
          Call <?php echo esc_html( DE_PHONE_DISPLAY ); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- ── Main Layout ───────────────────────────────────────────────────── -->
  <div class="de-container de-walmart-page__layout">

    <article class="de-walmart-page__content">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( get_the_content() ) : ?>
          <div class="de-city-page__body entry-content">
            <?php the_content(); ?>
          </div>
        <?php endif; ?>
      <?php endwhile; endif; ?>

      <!-- ── Relocation Timeline ───────────────────────────────────────── -->
      <section class="de-timeline-section" aria-labelledby="timeline-heading">
        <h2 id="timeline-heading">Your Relocation Timeline</h2>
        <p class="de-section__intro">
          Most corporate relocations to NWA operate on tight timelines —
          four to eight weeks is common. Here's how I structure the process.
        </p>
        <div class="de-timeline">
          <div class="de-timeline__step">
            <span class="de-timeline__marker">1</span>
            <div>
              <h3>Virtual Strategy Call (Week 1)</h3>
              <p>We talk through your timeline, relocation package details,
              must-haves, and which neighborhoods fit your lifestyle.</p>
            </div>
          </div>
          <div class="de-timeline__step">
            <span class="de-timeline__marker">2</span>
            <div>
              <h3>Curated Home Tour (Week 2–3)</h3>
              <p>I build a focused itinerary: 8–12 homes over two days
              in neighborhoods that match your criteria. No wasted time.</p>
            </div>
          </div>
          <div class="de-timeline__step">
            <span class="de-timeline__marker">3</span>
            <div>
              <h3>Offer & Negotiation (Week 3–4)</h3>
              <p>NWA moves fast. I'll advise on competitive offer strategy
              and manage negotiation so you don't overpay or lose the house.</p>
            </div>
          </div>
          <div class="de-timeline__step">
            <span class="de-timeline__marker">4</span>
            <div>
              <h3>Closing & Settlement (Week 5–8)</h3>
              <p>I coordinate with lenders, inspectors, and title companies.
              I work with all major relocation management companies
              (Cartus, SIRVA, Altair, etc.).</p>
            </div>
          </div>
        </div>
      </section>

    </article>

    <!-- ── Sidebar ───────────────────────────────────────────────────── -->
    <aside class="de-walmart-page__sidebar" role="complementary">
      <div class="de-agent-bio-card">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dalicia-headshot.jpg' ) ); ?>"
             alt="Dalicia Emerson, REALTOR® — Northwest Arkansas"
             class="de-agent-bio-card__photo"
             width="300" height="375" loading="eager">
        <div class="de-agent-bio-card__body">
          <h2 class="de-agent-bio-card__name"><?php echo esc_html( DE_AGENT_NAME ); ?></h2>
          <p class="de-agent-bio-card__title">REALTOR® &bull; Coldwell Banker Global Luxury®</p>
          <ul class="de-agent-bio-card__contact">
            <li>
              <a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-btn de-btn--primary de-btn--full">
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
        </div>
      </div>
      <?php get_template_part( 'template-parts/lead-form', null, [ 'source' => 'relocation-spoke' ] ); ?>
    </aside>

  </div>

  <!-- ── Contact CTA ───────────────────────────────────────────────────── -->
  <section id="spoke-contact" class="de-cta-section" aria-labelledby="spoke-contact-heading">
    <div class="de-container de-cta-section__inner">
      <div class="de-cta-section__copy">
        <h2 id="spoke-contact-heading">Ready to Start Your NWA Search?</h2>
        <p>I specialize in corporate relocations and know how to work
        within your company's relocation package. Let's talk.</p>
        <ul class="de-contact-list">
          <li><a href="tel:<?php echo esc_attr( DE_PHONE ); ?>"><?php echo esc_html( DE_PHONE_DISPLAY ); ?></a></li>
          <li><a href="mailto:<?php echo esc_attr( DE_EMAIL ); ?>"><?php echo esc_html( DE_EMAIL ); ?></a></li>
        </ul>
      </div>
      <div class="de-cta-section__form">
        <?php get_template_part( 'template-parts/lead-form', null, [ 'source' => 'relocation-spoke' ] ); ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
