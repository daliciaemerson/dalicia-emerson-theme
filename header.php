<?php
/**
 * Header Template — Dalicia Emerson Kadence Child Theme
 *
 * Overrides Kadence's header entirely. Transparent on the front page,
 * solid white on all interior pages. Becomes solid on scroll everywhere.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>

  <style>
    /* ── Critical header CSS — inlined to prevent flash of unstyled nav ── */

    :root {
      --de-black:      #0a0a0a;
      --de-white:      #ffffff;
      --de-gold:       #c9a84c;
      --de-gold-light: #e8c97a;
      --de-header-h:   76px;
      --de-font-sans:  'Inter', 'Helvetica Neue', Arial, sans-serif;
      --de-font-serif: 'Playfair Display', Georgia, serif;
      --de-ease:       cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* ── Skip link ────────────────────────────────────────────────────── */
    .de-skip-link {
      position: absolute;
      top: -999px;
      left: 8px;
      background: var(--de-gold);
      color: var(--de-black);
      font-family: var(--de-font-sans);
      font-size: 0.875rem;
      font-weight: 600;
      padding: 8px 16px;
      border-radius: 0 0 4px 4px;
      z-index: 9999;
      text-decoration: none;
    }
    .de-skip-link:focus { top: 0; }

    /* ── Header shell ─────────────────────────────────────────────────── */
    .de-header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      height: var(--de-header-h);
      background: var(--de-white);
      border-bottom: 1px solid #e8e8e4;
      transition: background 0.3s var(--de-ease),
                  border-color 0.3s var(--de-ease),
                  box-shadow 0.3s var(--de-ease);
    }

    /* Transparent state (front page, before scroll) */
    .de-header--transparent {
      background: transparent;
      border-bottom-color: transparent;
    }

    /* After scrolling — both states become opaque */
    .de-header--scrolled {
      background: var(--de-white) !important;
      border-bottom-color: #e8e8e4 !important;
      box-shadow: 0 2px 20px rgba(0,0,0,0.08);
    }

    /* Push page content below fixed header */
    body:not(.is-front-page) { padding-top: var(--de-header-h); }

    .de-header__inner {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 32px;
      height: 100%;
      display: flex;
      align-items: center;
      gap: 24px;
    }

    /* ── Logo ─────────────────────────────────────────────────────────── */
    .de-header__brand { flex-shrink: 0; }

    .de-header__logo-link {
      display: flex;
      align-items: center;
      text-decoration: none;
    }

    .de-header__logo {
      height: 44px;
      width: auto;
      display: block;
      transition: opacity 0.2s;
    }

    /* Logo visibility based on header state */
    .de-header__logo--light { display: none; }
    .de-header__logo--dark  { display: block; }

    .de-header--transparent:not(.de-header--scrolled) .de-header__logo--light { display: block; }
    .de-header--transparent:not(.de-header--scrolled) .de-header__logo--dark  { display: none; }

    /* Text fallback when logo images are not yet uploaded */
    .de-header__logo-text {
      font-family: var(--de-font-serif);
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--de-black);
      white-space: nowrap;
      letter-spacing: 0.01em;
      transition: color 0.3s;
    }
    .de-header--transparent:not(.de-header--scrolled) .de-header__logo-text {
      color: var(--de-white);
    }

    /* ── Desktop Nav ──────────────────────────────────────────────────── */
    .de-nav {
      flex: 1;
      display: flex;
      justify-content: center;
    }

    .de-nav__list {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      gap: 4px;
    }

    .de-nav__item { position: relative; }

    .de-nav__link,
    .de-nav__dropdown-trigger {
      display: flex;
      align-items: center;
      gap: 4px;
      padding: 8px 12px;
      font-family: var(--de-font-sans);
      font-size: 0.84rem;
      font-weight: 500;
      letter-spacing: 0.02em;
      color: var(--de-black);
      text-decoration: none;
      border: none;
      background: none;
      cursor: pointer;
      border-radius: 4px;
      white-space: nowrap;
      transition: color 0.2s, background 0.2s;
    }

    .de-nav__link:hover,
    .de-nav__dropdown-trigger:hover {
      color: var(--de-gold);
      background: rgba(201,168,76,0.08);
    }

    /* Nav text color on transparent header */
    .de-header--transparent:not(.de-header--scrolled) .de-nav__link,
    .de-header--transparent:not(.de-header--scrolled) .de-nav__dropdown-trigger {
      color: rgba(255,255,255,0.92);
    }
    .de-header--transparent:not(.de-header--scrolled) .de-nav__link:hover,
    .de-header--transparent:not(.de-header--scrolled) .de-nav__dropdown-trigger:hover {
      color: var(--de-white);
      background: rgba(255,255,255,0.12);
    }

    /* Active page highlight */
    .de-nav__link.de-nav__link--active { color: var(--de-gold); }

    .de-nav__chevron {
      font-size: 0.65rem;
      transition: transform 0.2s var(--de-ease);
      display: inline-block;
    }
    .de-nav__dropdown-trigger[aria-expanded="true"] .de-nav__chevron {
      transform: rotate(180deg);
    }

    /* ── Cities Dropdown ──────────────────────────────────────────────── */
    .de-dropdown {
      position: absolute;
      top: calc(100% + 8px);
      left: 50%;
      transform: translateX(-50%);
      min-width: 200px;
      background: var(--de-white);
      border: 1px solid #e8e8e4;
      border-radius: 8px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.12);
      list-style: none;
      margin: 0;
      padding: 8px 0;
      z-index: 200;
      /* Hidden by default */
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
      transform: translateX(-50%) translateY(-6px);
      transition: opacity 0.18s var(--de-ease),
                  visibility 0.18s,
                  transform 0.18s var(--de-ease);
    }

    /* Show via JS-added class or hover */
    .de-nav__item--dropdown:hover .de-dropdown,
    .de-dropdown--open {
      opacity: 1;
      visibility: visible;
      pointer-events: auto;
      transform: translateX(-50%) translateY(0);
    }

    /* Arrow pip above dropdown */
    .de-dropdown::before {
      content: '';
      position: absolute;
      top: -5px;
      left: 50%;
      transform: translateX(-50%);
      width: 10px;
      height: 10px;
      background: var(--de-white);
      border-left: 1px solid #e8e8e4;
      border-top: 1px solid #e8e8e4;
      rotate: 45deg;
    }

    .de-dropdown__item { margin: 0; padding: 0; }

    .de-dropdown__link {
      display: block;
      padding: 9px 20px;
      font-family: var(--de-font-sans);
      font-size: 0.85rem;
      color: var(--de-black);
      text-decoration: none;
      transition: background 0.15s, color 0.15s;
    }
    .de-dropdown__link:hover {
      background: rgba(201,168,76,0.10);
      color: var(--de-gold);
    }

    /* ── Click-to-Call + Actions ──────────────────────────────────────── */
    .de-header__actions {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-shrink: 0;
      margin-left: auto;
    }

    .de-header__cta {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 9px 18px;
      background: var(--de-gold);
      color: var(--de-black);
      border-radius: 4px;
      font-family: var(--de-font-sans);
      font-size: 0.84rem;
      font-weight: 700;
      letter-spacing: 0.02em;
      text-decoration: none;
      white-space: nowrap;
      transition: background 0.2s, transform 0.15s;
      box-shadow: 0 2px 8px rgba(201,168,76,0.30);
    }
    .de-header__cta:hover {
      background: var(--de-gold-light);
      transform: translateY(-1px);
    }
    .de-header__cta-icon { display: flex; align-items: center; }

    /* On transparent header, the CTA stays gold — it's already the accent */

    /* ── Hamburger ────────────────────────────────────────────────────── */
    .de-hamburger {
      display: none;
      flex-direction: column;
      justify-content: center;
      gap: 5px;
      width: 40px;
      height: 40px;
      padding: 8px;
      background: none;
      border: none;
      cursor: pointer;
      border-radius: 4px;
      flex-shrink: 0;
    }
    .de-hamburger:hover { background: rgba(0,0,0,0.06); }

    .de-hamburger__bar {
      display: block;
      width: 22px;
      height: 2px;
      background: var(--de-black);
      border-radius: 2px;
      transition: transform 0.25s var(--de-ease),
                  opacity 0.2s,
                  background 0.2s;
    }
    .de-header--transparent:not(.de-header--scrolled) .de-hamburger__bar {
      background: var(--de-white);
    }

    /* X state */
    .de-hamburger[aria-expanded="true"] .de-hamburger__bar:nth-child(1) {
      transform: translateY(7px) rotate(45deg);
    }
    .de-hamburger[aria-expanded="true"] .de-hamburger__bar:nth-child(2) {
      opacity: 0;
      transform: scaleX(0);
    }
    .de-hamburger[aria-expanded="true"] .de-hamburger__bar:nth-child(3) {
      transform: translateY(-7px) rotate(-45deg);
    }

    /* ── Mobile nav overlay ───────────────────────────────────────────── */
    .de-mobile-nav-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.5);
      z-index: 998;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s var(--de-ease), visibility 0.3s;
    }
    .de-mobile-nav-overlay--visible {
      opacity: 1;
      visibility: visible;
    }

    /* ── Mobile nav panel ─────────────────────────────────────────────── */
    .de-mobile-nav {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      width: min(320px, 90vw);
      background: var(--de-white);
      z-index: 999;
      overflow-y: auto;
      overscroll-behavior: contain;
      transform: translateX(100%);
      transition: transform 0.32s var(--de-ease);
      padding: calc(var(--de-header-h) + 16px) 0 40px;
      box-shadow: -4px 0 32px rgba(0,0,0,0.12);
    }
    .de-mobile-nav--open { transform: translateX(0); }

    .de-mobile-nav__list {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .de-mobile-nav__link,
    .de-mobile-nav__accordion-trigger {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      padding: 14px 28px;
      font-family: var(--de-font-sans);
      font-size: 0.95rem;
      font-weight: 500;
      color: var(--de-black);
      text-decoration: none;
      background: none;
      border: none;
      cursor: pointer;
      border-bottom: 1px solid #f0f0ee;
      text-align: left;
      transition: background 0.15s, color 0.15s;
    }
    .de-mobile-nav__link:hover,
    .de-mobile-nav__accordion-trigger:hover {
      background: rgba(201,168,76,0.07);
      color: var(--de-gold);
    }

    .de-mobile-nav__chevron {
      font-size: 0.7rem;
      transition: transform 0.2s var(--de-ease);
    }
    .de-mobile-nav__accordion-trigger[aria-expanded="true"] .de-mobile-nav__chevron {
      transform: rotate(180deg);
    }

    /* Cities submenu */
    .de-mobile-nav__submenu {
      list-style: none;
      margin: 0;
      padding: 0;
      background: #fafaf8;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s var(--de-ease);
    }
    .de-mobile-nav__submenu--open { max-height: 500px; }

    .de-mobile-nav__sublink {
      display: block;
      padding: 11px 28px 11px 44px;
      font-family: var(--de-font-sans);
      font-size: 0.875rem;
      color: #444;
      text-decoration: none;
      border-bottom: 1px solid #eeede9;
      transition: background 0.15s, color 0.15s;
    }
    .de-mobile-nav__sublink:hover {
      background: rgba(201,168,76,0.07);
      color: var(--de-gold);
    }

    /* Mobile CTA */
    .de-mobile-nav__cta-item { padding: 20px 28px; border-top: 2px solid #f0f0ee; }
    .de-mobile-nav__call-btn {
      display: block;
      text-align: center;
      padding: 14px;
      background: var(--de-gold);
      color: var(--de-black);
      font-family: var(--de-font-sans);
      font-size: 0.95rem;
      font-weight: 700;
      border-radius: 4px;
      text-decoration: none;
      transition: background 0.2s;
    }
    .de-mobile-nav__call-btn:hover { background: var(--de-gold-light); }

    /* ── Responsive breakpoints ───────────────────────────────────────── */
    @media (max-width: 1024px) {
      .de-nav { display: none; }
      .de-hamburger { display: flex; }
      .de-header__cta-number { display: none; }
      .de-header__cta { padding: 9px 12px; }
    }

    @media (max-width: 640px) {
      .de-header__inner { padding: 0 20px; gap: 12px; }
      .de-header__logo { height: 36px; }
    }
  </style>
</head>

<body <?php body_class( is_front_page() ? 'is-front-page' : '' ); ?>>
<?php wp_body_open(); ?>

<a class="de-skip-link" href="#main">Skip to main content</a>

<!-- ══════════════════════════════════════════════════════════════════════════
     SITE HEADER
════════════════════════════════════════════════════════════════════════════ -->
<header
  id="site-header"
  class="de-header<?php echo is_front_page() ? ' de-header--transparent' : ''; ?>"
  role="banner"
>
  <div class="de-header__inner">

    <!-- ── Logo ─────────────────────────────────────────────────────── -->
    <div class="de-header__brand">
      <a
        href="<?php echo esc_url( home_url( '/' ) ); ?>"
        class="de-header__logo-link"
        rel="home"
        aria-label="<?php echo esc_attr( DE_AGENT_NAME ); ?> — Northwest Arkansas REALTOR®, home page"
      >
        <?php
        $logo_light_path = get_stylesheet_directory() . '/assets/images/logo-white.png';
        $logo_dark_path  = get_stylesheet_directory() . '/assets/images/logo-dark.png';
        $logo_light_url  = get_stylesheet_directory_uri() . '/assets/images/logo-white.png';
        $logo_dark_url   = get_stylesheet_directory_uri() . '/assets/images/logo-dark.png';

        if ( file_exists( $logo_light_path ) && file_exists( $logo_dark_path ) ) :
        ?>
          <img
            src="<?php echo esc_url( $logo_light_url ); ?>"
            alt="<?php echo esc_attr( DE_AGENT_NAME ); ?>"
            class="de-header__logo de-header__logo--light"
            width="200" height="44"
            loading="eager"
            fetchpriority="high"
          >
          <img
            src="<?php echo esc_url( $logo_dark_url ); ?>"
            alt="<?php echo esc_attr( DE_AGENT_NAME ); ?>"
            class="de-header__logo de-header__logo--dark"
            width="200" height="44"
            loading="eager"
            fetchpriority="high"
          >
        <?php else : ?>
          <span class="de-header__logo-text"><?php echo esc_html( DE_AGENT_NAME ); ?></span>
        <?php endif; ?>
      </a>
    </div>

    <!-- ── Desktop Navigation ───────────────────────────────────────── -->
    <nav
      class="de-nav"
      id="primary-nav"
      role="navigation"
      aria-label="Primary navigation"
    >
      <?php
      $nav_current = trailingslashit( $_SERVER['REQUEST_URI'] ?? '' );

      $nav_items = [
        'Home'             => '/',
        'Search Homes'     => '/properties/',
        'Relocation Guide' => '/moving-to-northwest-arkansas/',
        'Luxury Homes'     => '/luxury-homes-northwest-arkansas/',
        'About'            => '/about/',
        'Contact'          => '/contact/',
      ];

      ?>

      <ul class="de-nav__list" role="list">

        <?php foreach ( $nav_items as $label => $path ) :
          $is_active = ( $nav_current === $path || ( $path !== '/' && strpos( $nav_current, $path ) === 0 ) );
          // Insert Cities dropdown after "Search Homes"
          if ( $label === 'Relocation Guide' ) :
        ?>
        <li class="de-nav__item de-nav__item--dropdown" id="cities-nav-item">
          <button
            class="de-nav__link de-nav__dropdown-trigger"
            aria-haspopup="true"
            aria-expanded="false"
            aria-controls="cities-dropdown"
            id="cities-dropdown-trigger"
          >
            Cities
            <span class="de-nav__chevron" aria-hidden="true">▾</span>
          </button>
          <?php
          wp_nav_menu( [
            'theme_location' => 'cities',
            'items_wrap'     => '<ul class="de-dropdown" id="cities-dropdown" role="menu" aria-labelledby="cities-dropdown-trigger">%3$s</ul>',
            'container'      => false,
            'walker'         => new DE_Dropdown_Walker(),
            'fallback_cb'    => false,
          ] );
          ?>
        </li>
        <?php endif; ?>

        <li class="de-nav__item">
          <a
            href="<?php echo esc_url( home_url( $path ) ); ?>"
            class="de-nav__link<?php echo $is_active ? ' de-nav__link--active' : ''; ?>"
            <?php echo $is_active ? 'aria-current="page"' : ''; ?>
          ><?php echo esc_html( $label ); ?></a>
        </li>

        <?php endforeach; ?>

      </ul>
    </nav><!-- /.de-nav -->

    <!-- ── CTA + Hamburger ──────────────────────────────────────────── -->
    <div class="de-header__actions">

      <a
        href="tel:<?php echo esc_attr( DE_PHONE ); ?>"
        class="de-header__cta"
        aria-label="Call Dalicia Emerson at <?php echo esc_attr( DE_PHONE_DISPLAY ); ?>"
      >
        <span class="de-header__cta-icon" aria-hidden="true">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
        </span>
        <span class="de-header__cta-number"><?php echo esc_html( DE_PHONE_DISPLAY ); ?></span>
      </a>

      <button
        class="de-hamburger"
        id="de-hamburger"
        aria-label="Open navigation menu"
        aria-expanded="false"
        aria-controls="de-mobile-nav"
      >
        <span class="de-hamburger__bar"></span>
        <span class="de-hamburger__bar"></span>
        <span class="de-hamburger__bar"></span>
      </button>

    </div>

  </div><!-- /.de-header__inner -->
</header>

<!-- ══════════════════════════════════════════════════════════════════════════
     MOBILE NAV PANEL + OVERLAY
════════════════════════════════════════════════════════════════════════════ -->
<div
  class="de-mobile-nav-overlay"
  id="de-mobile-overlay"
  aria-hidden="true"
></div>

<nav
  class="de-mobile-nav"
  id="de-mobile-nav"
  role="navigation"
  aria-label="Mobile navigation"
  aria-hidden="true"
>
  <ul class="de-mobile-nav__list" role="list">

    <?php foreach ( $nav_items as $label => $path ) :
      if ( $label === 'Relocation Guide' ) :
    ?>
      <!-- Cities accordion -->
      <li class="de-mobile-nav__item--accordion">
        <button
          class="de-mobile-nav__link de-mobile-nav__accordion-trigger"
          aria-expanded="false"
          aria-controls="mobile-cities-list"
        >
          Cities
          <span class="de-mobile-nav__chevron" aria-hidden="true">▾</span>
        </button>
        <?php
        wp_nav_menu( [
          'theme_location' => 'cities',
          'items_wrap'     => '<ul class="de-mobile-nav__submenu" id="mobile-cities-list">%3$s</ul>',
          'container'      => false,
          'walker'         => new DE_Mobile_Cities_Walker(),
          'fallback_cb'    => false,
        ] );
        ?>
      </li>
    <?php endif; ?>

      <li>
        <a
          href="<?php echo esc_url( home_url( $path ) ); ?>"
          class="de-mobile-nav__link"
          <?php
          $is_active = ( $nav_current === $path || ( $path !== '/' && strpos( $nav_current, $path ) === 0 ) );
          echo $is_active ? 'aria-current="page"' : '';
          ?>
        ><?php echo esc_html( $label ); ?></a>
      </li>

    <?php endforeach; ?>

    <li class="de-mobile-nav__cta-item">
      <a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-mobile-nav__call-btn">
        Call <?php echo esc_html( DE_PHONE_DISPLAY ); ?>
      </a>
    </li>

  </ul>
</nav>

<!-- ══════════════════════════════════════════════════════════════════════════
     HEADER JAVASCRIPT
     Handles: scroll state, desktop dropdown keyboard, mobile menu, close on
     outside click, focus trap in mobile nav, and Escape key to close all.
════════════════════════════════════════════════════════════════════════════ -->
<script>
(function () {
  'use strict';

  var header      = document.getElementById('site-header');
  var hamburger   = document.getElementById('de-hamburger');
  var mobileNav   = document.getElementById('de-mobile-nav');
  var overlay     = document.getElementById('de-mobile-overlay');
  var ddTrigger   = document.getElementById('cities-dropdown-trigger');
  var dropdown    = document.getElementById('cities-dropdown');
  var accordionBtn = document.querySelector('.de-mobile-nav__accordion-trigger');
  var submenu     = document.getElementById('mobile-cities-list');

  // ── Scroll: transparent → solid ─────────────────────────────────────────
  if (header) {
    var onScroll = function () {
      if (window.scrollY > 40) {
        header.classList.add('de-header--scrolled');
      } else {
        header.classList.remove('de-header--scrolled');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run on load
  }

  // ── Mobile menu open / close ─────────────────────────────────────────────
  function openMobileNav() {
    mobileNav.classList.add('de-mobile-nav--open');
    mobileNav.setAttribute('aria-hidden', 'false');
    overlay.classList.add('de-mobile-nav-overlay--visible');
    overlay.setAttribute('aria-hidden', 'false');
    hamburger.setAttribute('aria-expanded', 'true');
    hamburger.setAttribute('aria-label', 'Close navigation menu');
    document.body.style.overflow = 'hidden';
    // Move focus to first link
    var firstLink = mobileNav.querySelector('a, button');
    if (firstLink) firstLink.focus();
  }

  function closeMobileNav() {
    mobileNav.classList.remove('de-mobile-nav--open');
    mobileNav.setAttribute('aria-hidden', 'true');
    overlay.classList.remove('de-mobile-nav-overlay--visible');
    overlay.setAttribute('aria-hidden', 'true');
    hamburger.setAttribute('aria-expanded', 'false');
    hamburger.setAttribute('aria-label', 'Open navigation menu');
    document.body.style.overflow = '';
    hamburger.focus();
  }

  if (hamburger) {
    hamburger.addEventListener('click', function () {
      if (mobileNav.classList.contains('de-mobile-nav--open')) {
        closeMobileNav();
      } else {
        openMobileNav();
      }
    });
  }

  if (overlay) overlay.addEventListener('click', closeMobileNav);

  // ── Mobile cities accordion ──────────────────────────────────────────────
  if (accordionBtn && submenu) {
    accordionBtn.addEventListener('click', function () {
      var isOpen = submenu.classList.contains('de-mobile-nav__submenu--open');
      submenu.classList.toggle('de-mobile-nav__submenu--open');
      accordionBtn.setAttribute('aria-expanded', String(!isOpen));
    });
  }

  // ── Desktop dropdown (keyboard + click) ──────────────────────────────────
  function openDropdown() {
    if (!dropdown || !ddTrigger) return;
    dropdown.classList.add('de-dropdown--open');
    ddTrigger.setAttribute('aria-expanded', 'true');
  }

  function closeDropdown() {
    if (!dropdown || !ddTrigger) return;
    dropdown.classList.remove('de-dropdown--open');
    ddTrigger.setAttribute('aria-expanded', 'false');
  }

  if (ddTrigger) {
    // Click to toggle
    ddTrigger.addEventListener('click', function (e) {
      e.stopPropagation();
      if (dropdown.classList.contains('de-dropdown--open')) {
        closeDropdown();
      } else {
        openDropdown();
        var firstItem = dropdown.querySelector('[role="menuitem"]');
        if (firstItem) firstItem.focus();
      }
    });

    // Enter / Space
    ddTrigger.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        ddTrigger.click();
      }
      // Arrow Down: open and move to first item
      if (e.key === 'ArrowDown') {
        e.preventDefault();
        openDropdown();
        var firstItem = dropdown.querySelector('[role="menuitem"]');
        if (firstItem) firstItem.focus();
      }
    });
  }

  // Arrow key navigation inside dropdown
  if (dropdown) {
    dropdown.addEventListener('keydown', function (e) {
      var items = Array.from(dropdown.querySelectorAll('[role="menuitem"]'));
      var idx   = items.indexOf(document.activeElement);

      if (e.key === 'ArrowDown') {
        e.preventDefault();
        var next = items[idx + 1] || items[0];
        next.focus();
      }
      if (e.key === 'ArrowUp') {
        e.preventDefault();
        var prev = items[idx - 1] || items[items.length - 1];
        prev.focus();
      }
      if (e.key === 'Tab' || e.key === 'Escape') {
        closeDropdown();
        if (ddTrigger) ddTrigger.focus();
      }
    });
  }

  // Close dropdown when clicking outside
  document.addEventListener('click', function (e) {
    if (dropdown && !dropdown.contains(e.target) && e.target !== ddTrigger) {
      closeDropdown();
    }
  });

  // Escape closes everything
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeDropdown();
      if (mobileNav.classList.contains('de-mobile-nav--open')) closeMobileNav();
    }
  });

}());
</script>
