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
        <div class="de-agent-bio-card__body">
          <h2 class="de-agent-bio-card__name"><?php echo esc_html( DE_AGENT_NAME ); ?></h2>
          <p class="de-agent-bio-card__title">REALTOR® &bull; Coldwell Banker Global Luxury®</p>
          <p class="de-agent-bio-card__brokerage"><?php echo esc_html( DE_BROKERAGE ); ?></p>
          <ul class="de-agent-bio-card__contact">
            <li>
              <a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-agent-bio-card__contact-link">
                <span class="screen-reader-text">Phone: </span>
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
          <p class="de-agent-bio-card__license">
            AR License #<?php echo esc_html( DE_LICENSE ); ?>
          </p>
        </div>
      </div>
    </aside>

  </div>

</main>

<?php get_footer(); ?>
