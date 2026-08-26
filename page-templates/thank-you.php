<?php
/**
 * Template Name: Thank You
 * Template Post Type: page
 */
get_header();
?>
<main id="main" class="de-thankyou-page" role="main">
  <section class="de-thankyou">
    <div class="de-container de-thankyou__inner">
      <div class="de-thankyou__icon">✓</div>
      <h1 class="de-thankyou__heading">Thank You for Reaching Out!</h1>
      <p class="de-thankyou__sub">I'll be in touch with you shortly — usually within one business day.</p>
      <div class="de-thankyou__urgent">
        <p>Need to talk sooner?</p>
        <a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-btn de-btn--gold de-btn--large">
          Call <?php echo esc_html( DE_PHONE_DISPLAY ); ?>
        </a>
      </div>
      <a href="/" class="de-thankyou__home">← Back to Home</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>
