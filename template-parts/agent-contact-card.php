<?php
/**
 * Agent Contact Card — reusable component
 * Usage: get_template_part( 'template-parts/agent-contact-card' )
 */
?>
<div class="de-agent-contact-card">

  <!-- Headshot -->
  <div class="de-agent-contact-card__photo-wrap">
    <img
      src="<?php echo esc_url( get_theme_file_uri( '/assets/images/headshot/dalicia-headshot.jpg' ) ); ?>"
      alt="Dalicia Emerson, REALTOR® — Northwest Arkansas"
      class="de-agent-contact-card__photo"
      loading="eager">
  </div>

  <!-- Identity -->
  <div class="de-agent-contact-card__identity">
    <img
      src="<?php echo esc_url( get_theme_file_uri( '/assets/images/de-monogram.png' ) ); ?>"
      alt="Dalicia Emerson monogram"
      class="de-agent-contact-card__monogram"
      width="72" height="72">
    <h2 class="de-agent-contact-card__name">Dalicia Emerson</h2>
    <p class="de-agent-contact-card__title-tag">Luxury Real Estate</p>
  </div>

  <!-- Contact Information -->
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

  <!-- Lead Button -->
  <div class="de-agent-contact-card__cta">
    <a href="/contact-dalicia-emerson/" class="de-agent-contact-card__cta-btn">
      <span class="de-agent-contact-card__cta-main">Have Dalicia Contact Me</span>
      <span class="de-agent-contact-card__cta-sub">Leave your information and I'll reach out shortly.</span>
    </a>
  </div>

  <!-- Social Links -->
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
