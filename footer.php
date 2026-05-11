<?php
/**
 * Footer Template — Dalicia Emerson Kadence Child Theme
 */
?>

<footer class="de-footer" role="contentinfo" aria-label="Site footer">

  <!-- ══════════════════════════════════════════════════════════════════════
       MAIN FOOTER — 4 COLUMNS
  ════════════════════════════════════════════════════════════════════════ -->
  <div class="de-footer__main">
    <div class="de-footer__inner">

      <!-- Column 1: Identity ───────────────────────────────────────────── -->
      <div class="de-footer__col de-footer__col--about">
        <p class="de-footer__name">Dalicia Emerson</p>
        <p class="de-footer__bio">NWA Luxury REALTOR&reg; specializing in relocation and luxury homes throughout Northwest Arkansas.</p>
        <p class="de-footer__license">AR License #<?php echo esc_html( DE_LICENSE ); ?></p>
      </div>

      <!-- Column 2: Quick Links ──────────────────────────────────────── -->
      <nav class="de-footer__col de-footer__col--links" aria-label="Footer quick links">
        <h3 class="de-footer__col-heading">Quick Links</h3>
        <ul class="de-footer__links" role="list">
          <li><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" class="de-footer__link">Search Homes</a></li>
          <li><a href="<?php echo esc_url( home_url( '/moving-to-northwest-arkansas/' ) ); ?>" class="de-footer__link">Relocation Guide</a></li>
          <li><a href="<?php echo esc_url( home_url( '/luxury-homes-northwest-arkansas/' ) ); ?>" class="de-footer__link">Luxury Homes</a></li>
          <li><a href="<?php echo esc_url( home_url( '/walmart-supplier-relocation-nwa/' ) ); ?>" class="de-footer__link">Walmart Relocation</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="de-footer__link">About</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="de-footer__link">Contact</a></li>
          <li><a href="<?php echo esc_url( home_url( '/nwa-home-valuation/' ) ); ?>" class="de-footer__link">Home Valuation</a></li>
        </ul>
      </nav>

      <!-- Column 3: NWA Cities ───────────────────────────────────────── -->
      <nav class="de-footer__col de-footer__col--cities" aria-label="NWA city pages">
        <h3 class="de-footer__col-heading">NWA Cities</h3>
        <ul class="de-footer__links de-footer__links--cities" role="list">
          <li><a href="<?php echo esc_url( home_url( '/bentonville-ar-real-estate/' ) ); ?>" class="de-footer__link">Bentonville</a></li>
          <li><a href="<?php echo esc_url( home_url( '/lowell-ar-real-estate/' ) ); ?>" class="de-footer__link">Lowell</a></li>
          <li><a href="<?php echo esc_url( home_url( '/rogers-ar-real-estate/' ) ); ?>" class="de-footer__link">Rogers</a></li>
          <li><a href="<?php echo esc_url( home_url( '/siloam-springs-ar-real-estate/' ) ); ?>" class="de-footer__link">Siloam Springs</a></li>
          <li><a href="<?php echo esc_url( home_url( '/fayetteville-ar-real-estate/' ) ); ?>" class="de-footer__link">Fayetteville</a></li>
          <li><a href="<?php echo esc_url( home_url( '/eureka-springs-ar-real-estate/' ) ); ?>" class="de-footer__link">Eureka Springs</a></li>
          <li><a href="<?php echo esc_url( home_url( '/springdale-ar-real-estate/' ) ); ?>" class="de-footer__link">Springdale</a></li>
          <li><a href="<?php echo esc_url( home_url( '/bella-vista-ar-real-estate/' ) ); ?>" class="de-footer__link">Bella Vista</a></li>
        </ul>
      </nav>

      <!-- Column 4: Contact ──────────────────────────────────────────── -->
      <div class="de-footer__col de-footer__col--contact">
        <h3 class="de-footer__col-heading">Contact</h3>
        <address class="de-footer__address" itemscope itemtype="https://schema.org/Person">
          <meta itemprop="name" content="<?php echo esc_attr( DE_AGENT_NAME ); ?>">
          <p class="de-footer__contact-name" itemprop="name"><?php echo esc_html( DE_AGENT_NAME ); ?></p>
          <p class="de-footer__contact-brokerage" itemprop="worksFor"><?php echo esc_html( DE_BROKERAGE ); ?></p>
          <p class="de-footer__contact-office-address" itemprop="address">
            3589 N College Ave<br>
            Fayetteville, AR 72703
          </p>
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
      </div>

    </div><!-- /.de-footer__inner -->
  </div><!-- /.de-footer__main -->


  <!-- ══════════════════════════════════════════════════════════════════════
       BOTTOM BAR — COPYRIGHT LEFT | BADGES RIGHT
  ════════════════════════════════════════════════════════════════════════ -->
  <div class="de-footer__bottom">
    <div class="de-footer__bottom-inner">

      <p class="de-footer__copyright">
        &copy; <?php echo date( 'Y' ); ?> <?php echo esc_html( DE_AGENT_NAME ); ?>. All rights reserved.
      </p>

      <div class="de-footer__badges" aria-label="Affiliations">
        <span class="de-footer__badge">REALTOR&reg;</span>
        <span class="de-footer__badge-sep">|</span>
        <span class="de-footer__badge">Coldwell Banker Global&nbsp;Luxury&reg;</span>
      </div>

    </div><!-- /.de-footer__bottom-inner -->
  </div><!-- /.de-footer__bottom -->

</footer>


<?php wp_footer(); ?>
</body>
</html>
