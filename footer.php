<?php
/**
 * Footer — Dalicia Emerson Luxury Redesign
 */
?>
<footer class="de-footer" role="contentinfo">

  <div class="de-footer__main">
    <div class="de-footer__inner">

      <!-- Col 1: Brand -->
      <div class="de-footer__col de-footer__col--brand">
        <div class="de-footer__brand">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/de-monogram.png' ); ?>" alt="Dalicia Emerson monogram" class="de-footer__monogram" width="72" height="72">
          <p class="de-footer__brand-name">Dalicia Emerson</p>
          <p class="de-footer__brand-tagline">Luxury Real Estate</p>
          <p class="de-footer__brand-copy">Helping families relocate and find their next home across Northwest Arkansas with a global luxury network behind every deal.</p>
          <hr class="de-footer__brand-divider" aria-hidden="true">
          <ul class="de-footer__credentials">
            <li>REALTOR&reg;</li>
            <li>Global Luxury Certified&reg;</li>
            <li>AR License #<?php echo esc_html( DE_LICENSE ); ?></li>
          </ul>
          <div class="de-footer__social">
            <a href="https://www.instagram.com/dalicia_emersonnwarealtor/" target="_blank" rel="noopener" class="de-footer__social-btn" aria-label="Instagram">
              <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/social-media-icons/icons8-instagram-48.png' ) ); ?>" alt="" width="24" height="24">
            </a>
            <a href="https://www.facebook.com/watch/?v=2108780623329518" target="_blank" rel="noopener" class="de-footer__social-btn" aria-label="Facebook">
              <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/social-media-icons/icons8-facebook-48.png' ) ); ?>" alt="" width="24" height="24">
            </a>
            <a href="https://www.linkedin.com/in/dalicia-emerson-482ab2a3/" target="_blank" rel="noopener" class="de-footer__social-btn" aria-label="LinkedIn">
              <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/social-media-icons/icons8-linkedin-48.png' ) ); ?>" alt="" width="24" height="24">
            </a>
          </div>
        </div>
      </div>

      <!-- Col 2: Quick Links -->
      <div class="de-footer__col de-footer__col--links">
        <h3 class="de-footer__col-heading">Quick Links</h3>
        <div class="de-footer__col-bar" aria-hidden="true"></div>
        <ul class="de-footer__nav">
          <li><a href="/about-dalicia-emerson/" class="de-footer__link">About<span class="de-footer__chevron" aria-hidden="true">&#8250;</span></a></li>
          <li><a href="/contact-dalicia-emerson/" class="de-footer__link">Contact<span class="de-footer__chevron" aria-hidden="true">&#8250;</span></a></li>
          <li><a href="/reviews/" class="de-footer__link">Client Reviews<span class="de-footer__chevron" aria-hidden="true">&#8250;</span></a></li>
          <li><a href="/properties/" class="de-footer__link">Search Homes<span class="de-footer__chevron" aria-hidden="true">&#8250;</span></a></li>
          <li><a href="/luxury-homes-northwest-arkansas/" class="de-footer__link">Luxury Homes<span class="de-footer__chevron" aria-hidden="true">&#8250;</span></a></li>
          <li><a href="/relocation-guide/" class="de-footer__link">Relocation Guide<span class="de-footer__chevron" aria-hidden="true">&#8250;</span></a></li>
          <li><a href="/home-valuation-nwa/" class="de-footer__link">Home Valuation<span class="de-footer__chevron" aria-hidden="true">&#8250;</span></a></li>
          <li><a href="/walmart-supplier-relocation-nwa/" class="de-footer__link">Walmart Relocation<span class="de-footer__chevron" aria-hidden="true">&#8250;</span></a></li>
        </ul>
      </div>

      <!-- Col 3: Contact + Office -->
      <div class="de-footer__col de-footer__col--contact">
        <h3 class="de-footer__col-heading">Contact</h3>
        <div class="de-footer__col-bar" aria-hidden="true"></div>
        <ul class="de-footer__contact-list">
          <li class="de-footer__contact-item">
            <span class="de-footer__contact-icon" aria-hidden="true">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.07 2.18 2 2 0 012.03 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            </span>
            <a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-footer__contact-link de-footer__phone"><?php echo esc_html( DE_PHONE_DISPLAY ); ?></a>
          </li>
          <li class="de-footer__contact-item">
            <span class="de-footer__contact-icon" aria-hidden="true">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </span>
            <a href="mailto:<?php echo esc_attr( DE_EMAIL ); ?>" class="de-footer__contact-link de-footer__email"><?php echo esc_html( DE_EMAIL ); ?></a>
          </li>
          <li class="de-footer__contact-item">
            <span class="de-footer__contact-icon" aria-hidden="true">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </span>
            <a href="/contact-dalicia-emerson/" class="de-footer__contact-link de-footer__cta-link">Schedule a Consultation</a>
          </li>
        </ul>
        <hr class="de-footer__col-divider" aria-hidden="true">

        <!-- Office sub-section -->
        <h4 class="de-footer__office-heading">Office</h4>
        <div class="de-footer__office-bar" aria-hidden="true"></div>
        <p class="de-footer__office-brokerage">
          <a href="https://www.coldwellbankernwa.com" target="_blank" rel="noopener" class="de-footer__office-link">
            Coldwell Banker Harris McHaney &amp; Faucette
          </a>
        </p>
        <p class="de-footer__office-address">
          <span class="de-footer__map-pin" aria-hidden="true">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </span>
          3589 N College Ave<br>
          Fayetteville, AR 72703
        </p>
      </div>

    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="de-footer__bottom">
    <div class="de-footer__bottom-inner">
      <p class="de-footer__copyright">
        &copy; <?php echo date('Y'); ?> <?php echo esc_html( DE_AGENT_NAME ); ?>. All rights reserved.
      </p>
      <ul class="de-footer__legal">
        <li><a href="/privacy-policy/">Privacy Policy</a></li>
        <li><a href="/terms-of-use/">Terms of Use</a></li>
        <li><a href="/accessibility/">Accessibility</a></li>
        <li><a href="https://www.nar.realtor/fair-housing" target="_blank" rel="noopener">Fair Housing</a></li>
      </ul>
      <p class="de-footer__brokerage-credit">
        Coldwell Banker Harris McHaney &amp; Faucette
      </p>
    </div>
  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
