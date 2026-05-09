<?php
/**
 * Footer Template — Dalicia Emerson Kadence Child Theme
 *
 * Three-column layout: About | Quick Links | Contact
 * Includes Equal Housing, REALTOR® logos, copyright, and CB disclosure.
 */
?>

<footer class="de-footer" role="contentinfo" aria-label="Site footer">

  <!-- ══════════════════════════════════════════════════════════════════════
       MAIN FOOTER — 3 COLUMNS
  ════════════════════════════════════════════════════════════════════════ -->
  <div class="de-footer__main">
    <div class="de-footer__inner">

      <!-- Column 1: About Dalicia ────────────────────────────────────── -->
      <div class="de-footer__col de-footer__col--about">

        <a
          href="<?php echo esc_url( home_url( '/' ) ); ?>"
          class="de-footer__logo-link"
          aria-label="<?php echo esc_attr( DE_AGENT_NAME ); ?>, home"
        >
          <?php
          $footer_logo = get_stylesheet_directory() . '/assets/images/logo-white.png';
          if ( file_exists( $footer_logo ) ) :
          ?>
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logo-white.png' ); ?>"
              alt="<?php echo esc_attr( DE_AGENT_NAME ); ?>"
              class="de-footer__logo"
              width="180"
              height="40"
              loading="lazy"
            >
          <?php else : ?>
            <span class="de-footer__logo-text"><?php echo esc_html( DE_AGENT_NAME ); ?></span>
          <?php endif; ?>
        </a>

        <p class="de-footer__bio">NWA Luxury REALTOR&reg; | Coldwell Banker Harris McHaney &amp; Faucette</p>

        <p class="de-footer__license">
          AR License #<?php echo esc_html( DE_LICENSE ); ?>
        </p>

        <div class="de-footer__social" aria-label="Social media links">
          <!--
            Add verified social profile URLs before launch.
            Uncomment each <a> tag and replace # with the actual URL.
          -->
          <!--
          <a href="#" class="de-footer__social-link" aria-label="Facebook" rel="noopener noreferrer" target="_blank">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="#" class="de-footer__social-link" aria-label="Instagram" rel="noopener noreferrer" target="_blank">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          </a>
          <a href="#" class="de-footer__social-link" aria-label="LinkedIn" rel="noopener noreferrer" target="_blank">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
          -->
        </div>

      </div><!-- /.de-footer__col--about -->


      <!-- Column 2: Quick Links ──────────────────────────────────────── -->
      <nav class="de-footer__col de-footer__col--links" aria-label="Footer quick links">

        <h3 class="de-footer__col-heading">Quick Links</h3>

        <ul class="de-footer__links" role="list">
          <li><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" class="de-footer__link">Search All Homes</a></li>
          <li><a href="<?php echo esc_url( home_url( '/luxury-homes-northwest-arkansas/' ) ); ?>" class="de-footer__link">Luxury Homes NWA</a></li>
          <li><a href="<?php echo esc_url( home_url( '/moving-to-northwest-arkansas/' ) ); ?>" class="de-footer__link">Relocation Guide</a></li>
          <li><a href="<?php echo esc_url( home_url( '/walmart-supplier-relocation-bentonville/' ) ); ?>" class="de-footer__link">Walmart Relocation</a></li>
          <li><a href="<?php echo esc_url( home_url( '/nwa-home-valuation/' ) ); ?>" class="de-footer__link">Home Valuation</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="de-footer__link">About Dalicia</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="de-footer__link">Contact</a></li>
        </ul>

        <h3 class="de-footer__col-heading de-footer__col-heading--spaced">NWA Cities</h3>

        <ul class="de-footer__links de-footer__links--cities" role="list">
          <?php
          $footer_cities = [
            'Bentonville'    => '/bentonville-ar-real-estate/',
            'Rogers'         => '/rogers-ar-real-estate/',
            'Fayetteville'   => '/fayetteville-ar-real-estate/',
            'Springdale'     => '/springdale-ar-real-estate/',
            'Bella Vista'    => '/bella-vista-ar-real-estate/',
            'Lowell'         => '/lowell-ar-real-estate/',
            'Siloam Springs' => '/siloam-springs-ar-real-estate/',
            'Eureka Springs' => '/eureka-springs-ar-real-estate/',
          ];
          foreach ( $footer_cities as $city => $slug ) :
          ?>
          <li>
            <a href="<?php echo esc_url( home_url( $slug ) ); ?>" class="de-footer__link">
              <?php echo esc_html( $city ); ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>

      </nav><!-- /.de-footer__col--links -->


      <!-- Column 3: Contact Info ─────────────────────────────────────── -->
      <div class="de-footer__col de-footer__col--contact">

        <h3 class="de-footer__col-heading">Contact</h3>

        <address class="de-footer__address" itemscope itemtype="https://schema.org/Person">
          <meta itemprop="name" content="<?php echo esc_attr( DE_AGENT_NAME ); ?>">

          <p class="de-footer__contact-name" itemprop="name">
            <?php echo esc_html( DE_AGENT_NAME ); ?>
          </p>
          <p class="de-footer__contact-brokerage" itemprop="worksFor">
            <?php echo esc_html( DE_BROKERAGE ); ?>
          </p>

          <p class="de-footer__contact-row">
            <a
              href="tel:<?php echo esc_attr( DE_PHONE ); ?>"
              class="de-footer__contact-link de-footer__contact-link--phone"
              itemprop="telephone"
              aria-label="Call <?php echo esc_attr( DE_PHONE_DISPLAY ); ?>"
            >
              <?php echo esc_html( DE_PHONE_DISPLAY ); ?>
            </a>
          </p>

          <p class="de-footer__contact-row">
            <a
              href="mailto:<?php echo esc_attr( DE_EMAIL ); ?>"
              class="de-footer__contact-link"
              itemprop="email"
            >
              <?php echo esc_html( DE_EMAIL ); ?>
            </a>
          </p>

          <p class="de-footer__contact-area" itemprop="areaServed">
            Serving Bentonville, Rogers, Fayetteville,<br>
            Springdale &amp; all of Northwest Arkansas
          </p>
        </address>

        <a
          href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
          class="de-footer__contact-cta"
        >
          Schedule a Free Consultation
        </a>

      </div><!-- /.de-footer__col--contact -->

    </div><!-- /.de-footer__inner -->
  </div><!-- /.de-footer__main -->


  <!-- ══════════════════════════════════════════════════════════════════════
       FOOTER BOTTOM — LOGOS, COPYRIGHT, DISCLOSURE
  ════════════════════════════════════════════════════════════════════════ -->
  <div class="de-footer__bottom">
    <div class="de-footer__bottom-inner">

      <!-- Regulatory logos ──────────────────────────────────────────── -->
      <div class="de-footer__logos" role="region" aria-label="Regulatory and affiliation logos">

        <!-- Equal Housing Opportunity -->
        <div class="de-footer__logo-item" title="Equal Housing Opportunity">
          <?php
          $eho_img = get_stylesheet_directory() . '/assets/images/eho-logo.png';
          if ( file_exists( $eho_img ) ) :
          ?>
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/eho-logo.png' ); ?>"
              alt="Equal Housing Opportunity"
              width="40" height="40"
              loading="lazy"
            >
          <?php else : ?>
            <!-- EHO text fallback — replace with official logo image -->
            <span class="de-footer__logo-badge" aria-label="Equal Housing Opportunity">
              <svg width="36" height="36" viewBox="0 0 36 36" fill="white" aria-hidden="true">
                <rect x="2" y="2" width="32" height="32" rx="2" fill="none" stroke="white" stroke-width="1.5"/>
                <path d="M18 7l-9 8h3v12h12V15h3L18 7z" fill="white"/>
                <rect x="15" y="20" width="3" height="7" fill="#0a0a0a"/>
                <rect x="19" y="20" width="3" height="7" fill="#0a0a0a"/>
              </svg>
            </span>
          <?php endif; ?>
        </div>

        <!-- REALTOR® -->
        <div class="de-footer__logo-item">
          <?php
          $realtor_img = get_stylesheet_directory() . '/assets/images/realtor-logo.png';
          if ( file_exists( $realtor_img ) ) :
          ?>
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/realtor-logo.png' ); ?>"
              alt="REALTOR® — Member of the National Association of REALTORS®"
              width="40" height="40"
              loading="lazy"
            >
          <?php else : ?>
            <span class="de-footer__logo-text-badge" aria-label="Member of the National Association of REALTORS®">
              REALTOR&reg;
            </span>
          <?php endif; ?>
        </div>

        <!-- Coldwell Banker Global Luxury -->
        <div class="de-footer__logo-item">
          <?php
          $cb_img = get_stylesheet_directory() . '/assets/images/cb-global-luxury-logo.png';
          if ( file_exists( $cb_img ) ) :
          ?>
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/cb-global-luxury-logo.png' ); ?>"
              alt="Coldwell Banker Global Luxury"
              height="28"
              loading="lazy"
            >
          <?php else : ?>
            <span class="de-footer__logo-text-badge">Coldwell Banker Global&nbsp;Luxury&reg;</span>
          <?php endif; ?>
        </div>

      </div><!-- /.de-footer__logos -->

      <!-- Copyright + disclosure ────────────────────────────────────── -->
      <div class="de-footer__legal">

        <p class="de-footer__copyright">
          &copy; <?php echo date( 'Y' ); ?> <?php echo esc_html( DE_AGENT_NAME ); ?>.
          All rights reserved.
        </p>

        <p class="de-footer__disclosure">
          <?php echo esc_html( DE_AGENT_NAME ); ?> is a licensed Arkansas real estate salesperson
          (License&nbsp;#<?php echo esc_html( DE_LICENSE ); ?>) affiliated with
          <?php echo esc_html( DE_BROKERAGE ); ?>.
          &copy;<?php echo date( 'Y' ); ?> Coldwell Banker Real&nbsp;Estate LLC.
          All Rights Reserved. Coldwell Banker Real&nbsp;Estate LLC fully supports the
          principles of the Fair&nbsp;Housing Act and the Equal&nbsp;Opportunity Act.
          Each office is independently owned and operated. Coldwell&nbsp;Banker,
          the Coldwell&nbsp;Banker logo, Coldwell&nbsp;Banker Global&nbsp;Luxury,
          and the Coldwell&nbsp;Banker Global&nbsp;Luxury logo are registered service
          marks owned by Coldwell&nbsp;Banker Real&nbsp;Estate LLC.
        </p>

      </div><!-- /.de-footer__legal -->

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
    grid-template-columns: 1.4fr 1fr 1fr;
    gap: 40px;
  }

  /* Column headings */
  .de-footer__col-heading {
    font-family: var(--de-font-sans, sans-serif);
    font-size: 0.7rem;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.45);
    margin: 0 0 18px;
  }
  .de-footer__col-heading--spaced { margin-top: 32px; }

  /* Logo */
  .de-footer__logo-link { display: inline-block; margin-bottom: 20px; }
  .de-footer__logo { height: 38px; width: auto; opacity: 0.92; }
  .de-footer__logo-text {
    font-family: var(--de-font-serif, Georgia, serif);
    font-size: 1.2rem;
    font-weight: 700;
    color: rgba(255,255,255,0.92);
  }

  /* Bio */
  .de-footer__bio {
    font-size: 0.875rem;
    line-height: 1.7;
    color: rgba(255,255,255,0.65);
    margin-bottom: 12px;
    max-width: 340px;
  }
  .de-footer__license {
    font-size: 0.75rem;
    color: rgba(255,255,255,0.35);
    margin-bottom: 20px;
  }

  /* Social icons */
  .de-footer__social { display: flex; gap: 12px; }
  .de-footer__social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 50%;
    color: rgba(255,255,255,0.6);
    text-decoration: none;
    transition: border-color 0.2s, color 0.2s, background 0.2s;
  }
  .de-footer__social-link:hover {
    border-color: #c9a84c;
    color: #c9a84c;
    background: rgba(201,168,76,0.08);
  }

  /* Links */
  .de-footer__links {
    list-style: none;
    margin: 0;
    padding: 0;
    columns: 2;
    column-gap: 16px;
  }
  .de-footer__link {
    font-size: 0.875rem;
    color: rgba(255,255,255,0.65);
    text-decoration: none;
    padding: 5px 0;
    transition: color 0.15s;
    display: block;
  }
  .de-footer__link:hover { color: #c9a84c; }

  .de-footer__links--cities { columns: 2; column-gap: 16px; }
  .de-footer__links--cities li { break-inside: avoid; }

  /* Contact column */
  .de-footer__address { font-style: normal; }
  .de-footer__contact-name {
    font-size: 1rem;
    font-weight: 700;
    color: rgba(255,255,255,0.92);
    margin-bottom: 4px;
  }
  .de-footer__contact-brokerage {
    font-size: 0.8rem;
    color: rgba(255,255,255,0.45);
    margin-bottom: 16px;
    line-height: 1.4;
  }
  .de-footer__contact-row { margin-bottom: 8px; }
  .de-footer__contact-link {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.75);
    text-decoration: none;
    transition: color 0.15s;
  }
  .de-footer__contact-link:hover { color: #c9a84c; }
  .de-footer__contact-link--phone {
    font-size: 1rem;
    font-weight: 600;
    color: rgba(255,255,255,0.88);
  }
  .de-footer__contact-area {
    font-size: 0.8rem;
    color: rgba(255,255,255,0.45);
    line-height: 1.6;
    margin-top: 12px;
    margin-bottom: 20px;
  }
  .de-footer__contact-cta {
    display: inline-block;
    padding: 11px 20px;
    background: #c9a84c;
    color: #0a0a0a;
    font-size: 0.84rem;
    font-weight: 700;
    border-radius: 4px;
    text-decoration: none;
    transition: background 0.2s;
  }
  .de-footer__contact-cta:hover { background: #e8c97a; }

  /* Bottom bar */
  .de-footer__bottom {
    border-top: 1px solid rgba(255,255,255,0.08);
    padding: 20px 0;
  }
  .de-footer__bottom-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
    display: flex;
    align-items: flex-start;
    gap: 40px;
    flex-wrap: wrap;
  }

  /* Logos */
  .de-footer__logos {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-shrink: 0;
  }
  .de-footer__logo-item { display: flex; align-items: center; }
  .de-footer__logo-badge {
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.7;
  }
  .de-footer__logo-text-badge {
    font-family: var(--de-font-sans, sans-serif);
    font-size: 0.7rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.50);
    border: 1px solid rgba(255,255,255,0.2);
    padding: 4px 8px;
    border-radius: 2px;
    white-space: nowrap;
  }

  /* Legal */
  .de-footer__legal { flex: 1; min-width: 260px; }
  .de-footer__copyright {
    font-size: 0.8rem;
    color: rgba(255,255,255,0.50);
    margin-bottom: 8px;
  }
  .de-footer__disclosure {
    font-size: 0.72rem;
    line-height: 1.6;
    color: rgba(255,255,255,0.30);
  }

  /* Responsive */
  @media (max-width: 1024px) {
    .de-footer__inner { grid-template-columns: 1fr 1fr; gap: 40px; }
    .de-footer__col--about { grid-column: 1 / -1; }
    .de-footer__bio { max-width: 100%; }
  }

  @media (max-width: 640px) {
    .de-footer__inner { grid-template-columns: 1fr; gap: 36px; padding: 0 24px; }
    .de-footer__main { padding: 48px 0 40px; }
    .de-footer__links--cities { columns: 1; }
    .de-footer__bottom-inner { padding: 0 24px; flex-direction: column; gap: 24px; }
  }
</style>

<?php wp_footer(); ?>
</body>
</html>
