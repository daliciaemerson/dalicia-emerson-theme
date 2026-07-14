<?php
/**
 * Footer Template — Dalicia Emerson Kadence Child Theme
 */
?>

<footer class="de-footer" role="contentinfo" aria-label="Site footer">

  <!-- MAIN FOOTER — 2 COLUMNS: Quick Links | Contact / Office -->
  <div class="de-footer__main">
    <div class="de-footer__inner">

      <!-- Column 1: Quick Links ──────────────────────────────────────────── -->
      <nav class="de-footer__col de-footer__col--links" aria-label="Footer quick links">
        <h3 class="de-footer__col-heading">Quick Links</h3>
        <ul class="de-footer__links" role="list">
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="de-footer__link">About</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="de-footer__link">Contact</a></li>
          <li><a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>" class="de-footer__link">Client Reviews</a></li>
          <li><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" class="de-footer__link">Search Homes</a></li>
          <li><a href="<?php echo esc_url( home_url( '/luxury-homes-northwest-arkansas/' ) ); ?>" class="de-footer__link">Luxury Homes</a></li>
          <li><a href="<?php echo esc_url( home_url( '/moving-to-northwest-arkansas/' ) ); ?>" class="de-footer__link">Relocation Guide</a></li>
          <li><a href="<?php echo esc_url( home_url( '/nwa-home-valuation/' ) ); ?>" class="de-footer__link">Home Valuation</a></li>
          <li><a href="<?php echo esc_url( home_url( '/walmart-supplier-relocation-nwa/' ) ); ?>" class="de-footer__link">Walmart Relocation</a></li>
        </ul>
      </nav>

      <!-- Column 2: Contact / Office ─────────────────────────────────────── -->
      <div class="de-footer__col de-footer__col--contact">
        <h3 class="de-footer__col-heading">Contact</h3>

        <address class="de-footer__address" itemscope itemtype="https://schema.org/Person">
          <meta itemprop="name" content="<?php echo esc_attr( DE_AGENT_NAME ); ?>">
          <p class="de-footer__contact-name"><?php echo esc_html( DE_AGENT_NAME ); ?></p>
          <p class="de-footer__contact-row">
            <a href="tel:<?php echo esc_attr( DE_PHONE ); ?>"
               class="de-footer__contact-link de-footer__contact-link--phone"
               itemprop="telephone"
               aria-label="Call <?php echo esc_attr( DE_PHONE_DISPLAY ); ?>">
              <?php echo esc_html( DE_PHONE_DISPLAY ); ?>
            </a>
          </p>
          <p class="de-footer__contact-row">
            <a href="mailto:<?php echo esc_attr( DE_EMAIL ); ?>"
               class="de-footer__contact-link"
               itemprop="email">
              <?php echo esc_html( DE_EMAIL ); ?>
            </a>
          </p>
        </address>

        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="de-footer__cta">
          Schedule a Consultation
        </a>

        <p class="de-footer__credentials">
          REALTOR&reg;&nbsp;&middot;&nbsp;Global Luxury Certified&reg;&nbsp;&middot;&nbsp;<?php echo esc_html( DE_LICENSE_STATE ); ?>&nbsp;<?php echo esc_html( DE_LICENSE ); ?>
        </p>

        <!-- Office ───────────────────────────────────────────────────────── -->
        <div class="de-footer__office-section" itemscope itemtype="https://schema.org/RealEstateAgent">
          <p class="de-footer__office-label">Office</p>
          <address class="de-footer__address">
            <p class="de-footer__contact-brokerage" itemprop="name">
              <a href="https://coldwellbankernwa.com/"
                 target="_blank" rel="noopener"
                 class="de-footer__office-link">
                <?php echo esc_html( DE_BROKERAGE ); ?>
              </a>
            </p>
            <p class="de-footer__contact-office-address" itemprop="address">
              <a href="https://maps.google.com/?q=3589+N+College+Ave+Fayetteville+AR+72703"
                 target="_blank" rel="noopener"
                 class="de-footer__office-link">
                3589 N College Ave<br>
                Fayetteville, AR 72703
              </a>
            </p>
          </address>
        </div>

      </div><!-- /.de-footer__col--contact -->

    </div><!-- /.de-footer__inner -->
  </div><!-- /.de-footer__main -->


  <!-- BOTTOM BAR ─────────────────────────────────────────────────────────── -->
  <div class="de-footer__bottom">
    <div class="de-footer__bottom-inner">

      <p class="de-footer__copyright">
        &copy; <?php echo date( 'Y' ); ?> <?php echo esc_html( DE_AGENT_NAME ); ?>. All rights reserved.
      </p>

      <ul class="de-footer__legal">
        <li><a href="/privacy-policy/">Privacy Policy</a></li>
        <li><a href="/terms-of-use/">Terms of Use</a></li>
        <li><a href="/accessibility/">Accessibility</a></li>
        <li><a href="https://www.nar.realtor/fair-housing" target="_blank" rel="noopener">Fair Housing</a></li>
      </ul>

      <p class="de-footer__brokerage-bar">
        <a href="https://coldwellbankernwa.com/"
           target="_blank" rel="noopener"
           class="de-footer__brokerage-link">
          <?php echo esc_html( DE_BROKERAGE ); ?>
        </a>
      </p>

    </div><!-- /.de-footer__bottom-inner -->
  </div><!-- /.de-footer__bottom -->

</footer>


<?php wp_footer(); ?>
</body>
</html>
