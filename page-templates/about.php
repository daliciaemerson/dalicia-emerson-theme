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

  <!-- ── Stats Bar ────────────────────────────────────────────────────── -->
  <div class="de-about-stats">
    <div class="de-about-stats__inner">
      <div class="de-about-stat">
        <span class="de-about-stat__number">30+</span>
        <span class="de-about-stat__label">Years in NWA</span>
      </div>
      <div class="de-about-stat__divider"></div>
      <div class="de-about-stat">
        <span class="de-about-stat__number">$500K–$3M</span>
        <span class="de-about-stat__label">Luxury Specialty</span>
      </div>
      <div class="de-about-stat__divider"></div>
      <div class="de-about-stat">
        <span class="de-about-stat__number">8</span>
        <span class="de-about-stat__label">NWA Communities Served</span>
      </div>
      <div class="de-about-stat__divider"></div>
      <div class="de-about-stat">
        <span class="de-about-stat__number">28</span>
        <span class="de-about-stat__label">5-Star Reviews</span>
      </div>
    </div>
  </div>

  <!-- ── Quote Callout ─────────────────────────────────────────────────── -->
  <div class="de-about-quote">
    <div class="de-container">
      <blockquote class="de-about-quote__text">
        "What I love most is helping people see the potential in a space — and find the home that fits the life they're building."
      </blockquote>
      <cite class="de-about-quote__cite">— Dalicia Emerson, NWA REALTOR®</cite>
    </div>
  </div>

  <!-- ── Main Content ──────────────────────────────────────────────────── -->
  <div class="de-container de-about-page__layout">

    <article class="de-about-page__content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="de-about-page__body entry-content">
          <?php
            ob_start();
            the_content();
            $content = ob_get_clean();

            $float_img = '<img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/family-pictures/E -8158.jpeg' ) . '"'
              . ' alt="Dalicia Emerson with family"'
              . ' class="de-about-float-img"'
              . ' width="320" height="420">';

            echo preg_replace( '/<\/p>/', '</p>' . $float_img, $content, 1 );
          ?>
        </div>
      <?php endwhile; endif; ?>
    </article>

    <!-- ── Sidebar ───────────────────────────────────────────────────── -->
    <aside class="de-about-page__sidebar" role="complementary">
      <?php get_template_part( 'template-parts/agent-contact-card' ); ?>
    </aside>

  </div>

</main>

<?php get_footer(); ?>
