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
      <div class="de-agent-bio-card">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dalicia-headshot.jpg' ) ); ?>"
             alt="Dalicia Emerson, REALTOR® — Northwest Arkansas"
             class="de-agent-bio-card__photo"
             width="300" height="375" loading="eager">
      </div>
    </aside>

  </div>

</main>

<?php get_footer(); ?>
