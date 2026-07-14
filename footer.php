<?php
/**
 * Footer — Dalicia Emerson Premium Redesign
 */
?>
<footer class="de-footer" role="contentinfo">

  <div class="de-footer__main">
    <div class="de-footer__inner">

      <!-- Col 1: Brand -->
      <div class="de-footer__col de-footer__col--brand">
        <div class="de-footer__brand">
          <p class="de-footer__brand-name">Dalicia Emerson</p>
          <p class="de-footer__brand-tagline">Luxury Real Estate</p>
          <p class="de-footer__brand-copy">Helping families relocate and find their next home across Northwest Arkansas with a global luxury network behind every deal.</p>
          <div class="de-footer__social">
            <a href="https://www.instagram.com/dalicia_emersonnwarealtor/" target="_blank" rel="noopener" class="de-footer__social-btn" aria-label="Instagram">IG</a>
            <a href="https://www.facebook.com/watch/?v=2108780623329518" target="_blank" rel="noopener" class="de-footer__social-btn" aria-label="Facebook">FB</a>
            <a href="https://www.linkedin.com/in/dalicia-emerson-482ab2a3/" target="_blank" rel="noopener" class="de-footer__social-btn" aria-label="LinkedIn">IN</a>
          </div>
        </div>
      </div>

      <!-- Col 2: Quick Links -->
      <div class="de-footer__col de-footer__col--links">
        <h3 class="de-footer__col-heading">Quick Links</h3>
        <ul class="de-footer__nav">
          <li><a href="/about-dalicia-emerson/" class="de-footer__link">About</a></li>
          <li><a href="/contact-dalicia-emerson/" class="de-footer__link">Contact</a></li>
          <li><a href="/reviews/" class="de-footer__link">Client Reviews</a></li>
          <li><a href="/properties/" class="de-footer__link">Search Homes</a></li>
          <li><a href="/luxury-homes-northwest-arkansas/" class="de-footer__link">Luxury Homes</a></li>
          <li><a href="/relocation-guide/" class="de-footer__link">Relocation Guide</a></li>
          <li><a href="/home-valuation-nwa/" class="de-footer__link">Home Valuation</a></li>
          <li><a href="/walmart-supplier-relocation-nwa/" class="de-footer__link">Walmart Relocation</a></li>
        </ul>
      </div>

      <!-- Col 3: Contact -->
      <div class="de-footer__col de-footer__col--contact">
        <h3 class="de-footer__col-heading">Contact</h3>
        <a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-footer__phone">
          <?php echo esc_html( DE_PHONE_DISPLAY ); ?>
        </a>
        <a href="mailto:<?php echo esc_attr( DE_EMAIL ); ?>" class="de-footer__email">
          <?php echo esc_html( DE_EMAIL ); ?>
        </a>
        <a href="/contact-dalicia-emerson/" class="de-footer__cta">
          Schedule a Consultation
        </a>
        <ul class="de-footer__credentials">
          <li>REALTOR&reg;</li>
          <li>Global Luxury Certified&reg;</li>
          <li>AR License #<?php echo esc_html( DE_LICENSE ); ?></li>
        </ul>
      </div>

      <!-- Col 4: Office -->
      <div class="de-footer__col de-footer__col--office">
        <h3 class="de-footer__col-heading">Office</h3>
        <p class="de-footer__office-brokerage">
          <a href="https://www.coldwellbankernwa.com" target="_blank" rel="noopener" class="de-footer__office-link">
            Coldwell Banker Harris McHaney &amp; Faucette
          </a>
        </p>
        <p class="de-footer__office-address">
          3589 N College Ave<br>
          Fayetteville, AR 72703
        </p>
        <div class="de-footer__office-logo-placeholder" aria-label="Coldwell Banker Equal Housing">
          <span>CB</span>
        </div>
      </div>

    </div>

    <div class="de-footer__divider"></div>
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
    </div>
  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
