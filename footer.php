<?php
/**
 * Footer Template — Dalicia Emerson Kadence Child Theme
 */
?>

<footer class="de-footer" role="contentinfo" aria-label="Site footer">

  <!-- ══════════════════════════════════════════════════════════════════════
       MAIN FOOTER — 3 COLUMNS
  ════════════════════════════════════════════════════════════════════════ -->
  <div class="de-footer__main">
    <div class="de-footer__inner">

      <!-- Column 1: Identity ───────────────────────────────────────────── -->
      <div class="de-footer__col de-footer__col--about">
        <p class="de-footer__name">Dalicia Emerson</p>
        <p class="de-footer__bio">NWA Luxury REALTOR&reg; | Coldwell Banker</p>
        <p class="de-footer__license">AR License #<?php echo esc_html( DE_LICENSE ); ?></p>
      </div>

      <!-- Column 2: Quick Links ──────────────────────────────────────── -->
      <nav class="de-footer__col de-footer__col--links" aria-label="Footer quick links">
        <h3 class="de-footer__col-heading">Quick Links</h3>
        <ul class="de-footer__links" role="list">
          <li><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" class="de-footer__link">Search Homes</a></li>
          <li><a href="<?php echo esc_url( home_url( '/moving-to-northwest-arkansas/' ) ); ?>" class="de-footer__link">Relocation Guide</a></li>
          <li><a href="<?php echo esc_url( home_url( '/luxury-homes-northwest-arkansas/' ) ); ?>" class="de-footer__link">Luxury Homes</a></li>
          <li><a href="<?php echo esc_url( home_url( '/walmart-supplier-relocation-bentonville/' ) ); ?>" class="de-footer__link">Walmart Relocation</a></li>
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
  /* ── Footer styles ──────────────────────────────────────────────────── */
  .de-footer {
    background: #0a0a0a;
    color: rgba(255,255,255,0.80);
    font-family: var(--de-font-sans, 'Inter', sans-serif);
  }

  /* Main 3-column area */
  .de-footer__main { padding: 48px 0 36px; }

  .de-footer__inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
    display: grid;
    grid-template-columns: 0.75fr 1fr 1fr;
    gap: 48px;
    align-items: start;
  }

  /* Column 1: Identity */
  .de-footer__name {
    font-family: var(--de-font-serif, Georgia, serif);
    font-size: 1.25rem;
    font-weight: 700;
    color: rgba(255,255,255,0.95);
    margin: 0 0 10px;
  }
  .de-footer__bio {
    font-size: 0.85rem;
    line-height: 1.6;
    color: rgba(255,255,255,0.60);
    margin: 0 0 10px;
  }
  .de-footer__license {
    font-size: 0.72rem;
    color: rgba(255,255,255,0.30);
    margin: 0;
  }

  /* Column headings */
  .de-footer__col-heading {
    font-family: var(--de-font-sans, sans-serif);
    font-size: 0.68rem;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.40);
    margin: 0 0 16px;
  }

  /* Links — 2-column CSS grid for both quick links and cities */
  .de-footer__links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2px 16px;
  }
  .de-footer__links--cities {
    grid-template-columns: 1fr 1fr;
  }
  .de-footer__link {
    font-size: 0.875rem;
    color: rgba(255,255,255,0.62);
    text-decoration: none;
    padding: 5px 0;
    display: block;
    transition: color 0.15s;
  }
  .de-footer__link:hover { color: #c9a84c; }

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
    font-size: 0.78rem;
    color: rgba(255,255,255,0.40);
    margin: 0;
  }
  .de-footer__badges {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .de-footer__badge {
    font-size: 0.68rem;
    font-weight: 700;
    letter-spacing: 0.10em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.45);
  }
  .de-footer__badge-sep {
    color: rgba(255,255,255,0.20);
    font-size: 0.75rem;
  }

  /* Responsive */
  @media (max-width: 1024px) {
    .de-footer__inner {
      grid-template-columns: 1fr 1fr;
      gap: 36px;
    }
    .de-footer__col--about {
      grid-column: 1 / -1;
    }
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
      gap: 12px;
    }
  }
</style>

<?php wp_footer(); ?>
</body>
</html>
