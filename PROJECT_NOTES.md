# Dalicia Emerson — Theme Development Notes

**Repo:** daliciaemerson/dalicia-emerson-theme | **Branch:** main
**Stack:** WordPress Kadence child theme | **Host:** WP Engine
**Live URL:** daliciaemerson.wpengine.com
**Real domain:** daliciaemerson.com (not yet pointed to WP Engine)

---

## Session 2 — May 9, 2026

### COMPLETED THIS SESSION
- Footer column headings (Quick Links, NWA Cities) centered
- Footer nav fixed from 2-column grid to single vertical list
  (was display:grid grid-template-columns:1fr 1fr, changed to display:block)
- Showcase IDX confirmed active, paid, and connected to WordPress
- IDX license agreement (NWAR) already signed April 28 via Dropbox Sign
- Broker signature still pending — Dalicia asking broker Monday
- Properties page (/properties/) fixed: title hidden, gap removed
  using kadence_show_title filter + strpos URI match in functions.php
- About page title hidden via is_page('about-dalicia-emerson')
- About page gray bar diagnosed: caused by body:not(.is-front-page)
  padding-top in style.css — NOT a bug, just empty page with no content
- Full site audit completed (screenshots reviewed)
- style.css version bumped to 1.3.2

### CURRENT style.css VERSION: 1.3.2

### SITE AUDIT FINDINGS

**Home page:**
- Hero looks great
- City cards all showing black/dark — need hero images uploaded for all 8 cities
- [showcaseidx_hotsheets] showing as raw text — will render after MLS approval
- Testimonials section working with placeholder quotes

**Luxury Homes page:**
- Hero, credentials bar, content all look great
- One broken image placeholder (? box) in CB Global Luxury section — needs real image
- "Luxury listings loading after IDX setup" placeholder working correctly

**Walmart Relocation page:**
- Looks excellent — no issues
- Full content, timeline, neighborhood grid, sidebar form all working

**Contact page:**
- Looks great — detailed form with dropdowns, agent photo, What to Expect sidebar

**About page:**
- Title hidden ✅
- Gray bar is just empty page with no content — not a bug
- NEEDS CONTENT written and added in WordPress block editor

**City pages:**
- Not yet audited — screenshots needed next session

### IDX STATUS
- Showcase IDX: paid, active, plugin installed and connected
- NWAR IDX license: signed April 28 by Dalicia
- Broker signature: PENDING — Dalicia asking broker Monday
- Demo data showing on /properties/ — real NWA data loads after broker signs
- MLS data flow: Arkansas ONE MLS → Showcase IDX → WordPress

### DNS STATUS
- daliciaemerson.com still pointing to old Moxi/CB site
- daliciaemerson.wpengine.com is staging
- DNS flip to WP Engine PENDING (do after MLS is live)

### NEXT SESSION PRIORITIES
1. Write About page content in Dalicia's voice — add in WordPress block editor
2. Upload hero images for all 8 city pages
3. Audit all 8 city pages (screenshots)
4. Fix broken image on Luxury Homes page
5. Follow up on broker IDX signature Monday
6. Write city page SEO content for all 8 cities

### KNOWN TECHNICAL NOTES
- is_page() works for real WP pages (about, contact, etc.)
- strpos($_SERVER['REQUEST_URI']) required for IDX virtual pages
- kadence_show_title filter removes title from DOM entirely
- .entry-header { display:none } hides empty Kadence title container
- body:not(.is-front-page) padding-top: 90px is intentional — do not remove

---

## ARCHITECTURE
- `style.css` — single source of truth for all CSS
- Additional CSS in WordPress Customizer is EMPTY — do not add CSS there
- `header.php` — fully custom, overrides Kadence via remove_action/add_filter in functions.php
- `footer.php` — 4-column layout, no inline styles (all CSS in style.css)
- `page-templates/` — 7 templates: home, city-page, relocation-hub, luxury-homes, walmart-relocation, contact, plus home.php

---

## HEADER
- Always white background (transparent removed)
- Height: 90px
- Nav font: 0.92rem
- Walkers: DE_Primary_Nav_Walker, DE_Mobile_Primary_Walker, DE_Dropdown_Walker, DE_Mobile_Cities_Walker
- Cities dropdown from WP nav menu — Cities Dropdown menu location

---

## FOOTER (4 columns)
- Col 1: Identity — name, bio, license
- Col 2: Quick Links in single vertical list (display:block)
- Col 3: NWA Cities in single vertical list (display:block)
- Col 4: Contact — name, brokerage, phone, email, gold CTA
- Bottom bar: copyright left, badges right
- Responsive: 2-col at ≤1100px, 1-col at ≤640px

---

## HOMEPAGE (home.php)
- Hero: full-bleed image, gold CTA + white outline CTA
- Trust bar: 4 credentials
- IDX search shortcode
- City grid: 8 cards with .de-city-card__bg div
- Social proof: 2 testimonials + agent column with explicit inline colors

---

## CITY PAGES (city-page.php)
- Hero: featured image via inline background-image on section tag
- Stats bar: population, median price, state
- Custom fields: _de_city_name, _de_city_population, _de_city_median_price
- 2-col layout: content + sidebar with agent card + form
- Template assigned via template_include filter in functions.php

---

## KEY CSS RULES
- Never use background shorthand on .de-hero--city (resets background-image)
- .de-btn--full uses display:flex not inline-flex
- Footer grid on .de-footer__inner not .de-footer__main
- body:not(.is-front-page) padding-top: 90px is intentional — do not remove

---

## WHAT STILL NEEDS DOING
1. Clear WP Engine cache after every push
2. Upload hero images for all 8 city pages
3. Write About page content in WordPress block editor
4. Fix broken image on Luxury Homes page (CB Global Luxury section)
5. Follow up on broker IDX signature (Monday)
6. Write city page SEO content for all 8 cities
7. Audit all 8 city pages
8. Point daliciaemerson.com DNS to WP Engine (after MLS is live)
9. Configure RankMath meta titles on all pages
10. Submit sitemap to Google Search Console
11. Add real testimonials from Dalicia
12. Blog setup — first 3 posts
13. Social media automation (Phase 2)

---

## CONSTANTS (functions.php)
```
DE_AGENT_NAME, DE_BROKERAGE, DE_PHONE, DE_PHONE_DISPLAY,
DE_EMAIL, DE_LICENSE, DE_REGION
```

---

## DEPLOYMENT
- GitHub Actions auto-deploys on every push to main
- Clear WP Engine cache after each deploy
- Version bump style.css when making CSS changes (1.3.2 current)
