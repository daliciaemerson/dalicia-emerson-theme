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
      <div class="de-agent-card">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dalicia-headshot.jpg' ) ); ?>"
             alt="Dalicia Emerson, Northwest Arkansas REALTOR®"
             class="de-agent-card__photo">
        <h3 class="de-agent-card__name"><?php echo esc_html( DE_AGENT_NAME ); ?></h3>
        <p class="de-agent-card__brokerage"><?php echo esc_html( DE_BROKERAGE ); ?></p>
        <p class="de-agent-card__note" style="color:var(--de-gold);">Global Luxury Certified®</p>
        <a href="tel:<?php echo esc_attr( DE_PHONE ); ?>"
           class="de-btn de-btn--primary de-btn--full">
          Call <?php echo esc_html( DE_PHONE_DISPLAY ); ?>
        </a>
        <a href="/reviews/" class="de-btn de-btn--outline-navy de-btn--full" style="margin-top:12px; display:block; text-align:center; padding:12px; border:2px solid var(--de-navy); color:var(--de-navy); border-radius:var(--de-radius); font-weight:700; font-size:0.88rem;">
          Read Client Reviews
        </a>
      </div>
    </aside>

  </div>

</main>

<?php get_footer(); ?>
