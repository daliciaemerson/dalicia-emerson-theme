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


<style>
  /* ── Footer ─────────────────────────────────────────────────────────── */
  .de-footer {
    background: #0a0a0a;
    color: rgba(255,255,255,0.80);
    font-family: var(--de-font-sans, 'Inter', sans-serif);
    width: 100%;
    box-sizing: border-box;
  }

  .de-footer__main { padding: 56px 0 40px; }

  .de-footer__inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
    display: grid;
    grid-template-columns: 0.75fr 1fr 1fr 1fr;
    gap: 40px;
    align-items: start;
  }

  /* Column 1: Identity */
  .de-footer__name {
    font-family: var(--de-font-serif, Georgia, serif);
    font-size: 1.2rem;
    font-weight: 700;
    color: rgba(255,255,255,0.95);
    margin: 0 0 10px;
  }
  .de-footer__bio {
    font-size: 0.82rem;
    line-height: 1.65;
    color: rgba(255,255,255,0.55);
    margin: 0 0 10px;
  }
  .de-footer__license {
    font-size: 0.70rem;
    color: rgba(255,255,255,0.28);
    margin: 0;
  }

  /* Column headings */
  .de-footer__col-heading {
    font-family: var(--de-font-sans, sans-serif);
    font-size: 0.65rem;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.38);
    margin: 0 0 16px;
  }

  /* Links — 2-col CSS grid */
  .de-footer__links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2px 12px;
  }
  .de-footer__link {
    font-size: 0.84rem;
    color: rgba(255,255,255,0.60);
    text-decoration: none;
    padding: 5px 0;
    display: block;
    transition: color 0.15s;
    white-space: nowrap;
  }
  .de-footer__link:hover { color: #c9a84c; }

  /* Column 4: Contact */
  .de-footer__address { font-style: normal; }
  .de-footer__contact-name {
    font-size: 0.95rem;
    font-weight: 700;
    color: rgba(255,255,255,0.90);
    margin: 0 0 4px;
  }
  .de-footer__contact-brokerage {
    font-size: 0.78rem;
    color: rgba(255,255,255,0.40);
    line-height: 1.4;
    margin: 0 0 14px;
  }
  .de-footer__contact-row { margin: 0 0 8px; }
  .de-footer__contact-link {
    font-size: 0.875rem;
    color: rgba(255,255,255,0.70);
    text-decoration: none;
    transition: color 0.15s;
  }
  .de-footer__contact-link:hover { color: #c9a84c; }
  .de-footer__contact-link--phone {
    font-size: 1rem;
    font-weight: 600;
    color: rgba(255,255,255,0.88);
  }
  .de-footer__cta {
    display: inline-block;
    margin-top: 18px;
    padding: 10px 18px;
    background: #c9a84c;
    color: #0a0a0a;
    font-size: 0.80rem;
    font-weight: 700;
    letter-spacing: 0.04em;
    border-radius: 4px;
    text-decoration: none;
    transition: background 0.2s;
    white-space: nowrap;
  }
  .de-footer__cta:hover { background: #e8c97a; }

  /* Bottom bar */
  .de-footer__bottom {
    border-top: 1px solid rgba(255,255,255,0.08);
    padding: 18px 0;
  }
  .de-footer__bottom-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
  }
  .de-footer__copyright {
    font-size: 0.76rem;
    color: rgba(255,255,255,0.38);
    margin: 0;
  }
  .de-footer__badges {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .de-footer__badge {
    font-size: 0.65rem;
    font-weight: 700;
    letter-spacing: 0.10em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.40);
  }
  .de-footer__badge-sep {
    color: rgba(255,255,255,0.18);
    font-size: 0.75rem;
  }

  /* Responsive */
  @media (max-width: 1100px) {
    .de-footer__inner {
      grid-template-columns: 1fr 1fr;
      gap: 36px;
    }
    .de-footer__col--about { grid-column: 1 / -1; }
  }

  @media (max-width: 640px) {
    .de-footer__inner {
      grid-template-columns: 1fr;
      gap: 32px;
      padding: 0 24px;
    }
    .de-footer__main { padding: 40px 0 32px; }
    .de-footer__bottom-inner {
      padding: 0 24px;
      flex-direction: column;
      align-items: flex-start;
      gap: 10px;
    }
  }
</style>

<?php wp_footer(); ?>
</body>
</html>
