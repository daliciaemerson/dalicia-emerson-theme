<?php
/**
 * Template Name: About Dalicia
 * Template Post Type: page
 */
get_header();
?>

<main id="main" class="de-about-page" role="main">

  <!-- ── Hero ──────────────────────────────────────────────────────────── -->
  <section class="de-hero de-hero--about" aria-labelledby="about-hero-heading">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'full', [ 'class' => 'de-hero__bg-image', 'alt' => 'Dalicia Emerson, NWA REALTOR' ] ); ?>
    <?php endif; ?>
    <div class="de-hero__overlay de-hero__overlay--dark"></div>
    <div class="de-container">
      <p class="de-hero__eyebrow">About Dalicia Emerson</p>
      <h1 id="about-hero-heading" class="de-hero__title">
        NWA Native.<br>
        <span style="color:var(--de-gold);">Your Trusted REALTOR®.</span>
      </h1>
      <p class="de-hero__subtitle">30+ years in Northwest Arkansas. Local knowledge you can trust.</p>
    </div>
  </section>

  <!-- ── Main Content ──────────────────────────────────────────────────── -->
  <div class="de-container de-about-page__layout">

    <article class="de-about-page__content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="de-about-page__body entry-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; endif; ?>
    </article>

    <!-- ── Sidebar ───────────────────────────────────────────────────── -->
    <aside class="de-about-page__sidebar" role="complementary">
      <div class="de-agent-contact-card">

        <!-- 1. Headshot -->
        <div class="de-agent-contact-card__photo-wrap">
          <img
            src="<?php echo esc_url( get_theme_file_uri( '/assets/images/headshot/dalicia-headshot.jpg' ) ); ?>"
            alt="Dalicia Emerson, REALTOR® — Northwest Arkansas"
            class="de-agent-contact-card__photo"
            loading="eager">
        </div>

        <!-- 2. Identity -->
        <div class="de-agent-contact-card__identity">
          <img
            src="<?php echo esc_url( get_theme_file_uri( '/assets/images/de-monogram.png' ) ); ?>"
            alt="Dalicia Emerson monogram"
            class="de-agent-contact-card__monogram"
            width="72" height="72">
          <h2 class="de-agent-contact-card__name">Dalicia Emerson</h2>
          <p class="de-agent-contact-card__title-tag">Luxury Real Estate</p>
        </div>

        <!-- 3. Contact Information -->
        <div class="de-agent-contact-card__contact">
          <a href="tel:+14794223060" class="de-agent-contact-card__row">
            <span class="de-agent-contact-card__row-icon" aria-hidden="true">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.07 2.18 2 2 0 012.03 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            </span>
            (479) 422-3060
          </a>
          <a href="mailto:daliciaemerson@coldwellbankerhmf.com" class="de-agent-contact-card__row">
            <span class="de-agent-contact-card__row-icon" aria-hidden="true">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </span>
            daliciaemerson@coldwellbankerhmf.com
          </a>
          <div class="de-agent-contact-card__row de-agent-contact-card__row--static">
            <span class="de-agent-contact-card__row-icon" aria-hidden="true">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
            </span>
            <span>Coldwell Banker Harris McHaney &amp; Faucette</span>
          </div>
        </div>

        <div class="de-agent-contact-card__divider" aria-hidden="true"></div>

        <!-- 4. Lead Button -->
        <div class="de-agent-contact-card__cta">
          <a href="/contact-dalicia-emerson/" class="de-agent-contact-card__cta-btn">
            Or leave your info and<br>I'll reach out to you.
          </a>
        </div>

        <!-- 5. Social Links -->
        <div class="de-agent-contact-card__social">
          <a href="https://www.instagram.com/dalicia_emersonnwarealtor/" target="_blank" rel="noopener" class="de-agent-contact-card__social-btn" aria-label="Follow Dalicia Emerson on Instagram">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/social-media-icons/icons8-instagram-48.png' ) ); ?>" alt="" width="20" height="20">
          </a>
          <a href="https://www.facebook.com/watch/?v=2108780623329518" target="_blank" rel="noopener" class="de-agent-contact-card__social-btn" aria-label="Follow Dalicia Emerson on Facebook">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/social-media-icons/icons8-facebook-48.png' ) ); ?>" alt="" width="20" height="20">
          </a>
          <a href="https://www.linkedin.com/in/dalicia-emerson-482ab2a3/" target="_blank" rel="noopener" class="de-agent-contact-card__social-btn" aria-label="Connect with Dalicia Emerson on LinkedIn">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/social-media-icons/icons8-linkedin-48.png' ) ); ?>" alt="" width="20" height="20">
          </a>
        </div>

      </div>
    </aside>

  </div>

</main>

<?php get_footer(); ?>
