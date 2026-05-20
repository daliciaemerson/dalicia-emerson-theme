# Dalicia Emerson — Theme Development Notes

**Repo:** daliciaemerson/dalicia-emerson-theme | **Branch:** main
**Stack:** WordPress Kadence child theme | **Host:** WP Engine
**Live URL:** daliciaemerson.wpengine.com
**Real domain:** daliciaemerson.com (not yet pointed to WP Engine)

---

## WHAT STILL NEEDS DOING

1. City pages — add Showcase IDX search/listings to all 8 city pages
2. City pages — write unique SEO content for all 8 cities
3. About page — review and improve existing content
4. DNS flip — point daliciaemerson.com to WP Engine
5. Submit sitemap to Google Search Console
6. Set up GA4
7. RankMath meta titles on all 15 pages
8. Safari /properties/ page not loading — investigate
9. Blog posts — first 3
10. Fix broken image on Luxury Homes page (CB Global Luxury section)
11. Add real testimonials from Dalicia (replace placeholder quotes)
12. Social media automation (Phase 2)
13. Lowell city card — aerial photo still not ideal, replace when possible

---

## Session 4 — May 11-14, 2026

**style.css version: 1.4.6**

### COMPLETED THIS SESSION

**IDX / MLS:**
- Showcase IDX paid and active
- NABOR Data Access Agreement fully executed 05/11/2026 — all parties signed (Dalicia, Doyle Yates broker, Constellation/Showcase IDX, ArkansasONE MLS)
- Live CARMLS data feed activated
- Hotsheet created: "Featured NWA Listings" showing on homepage gallery carousel
- Shortcode fixed: showcaseidx_hotsheets → showcaseidx_hotsheet (singular)
- IDX search default map set to NWA/Bentonville area
- Property filters set: residential only, no land
- Left side map view enabled

**AREC Compliance:**
- Brokerage name "Coldwell Banker Harris McHaney & Faucette" added to header on every page
- Header brokerage name links to coldwellbankernwa.com
- Footer reorganized: personal info + office section
- Office address added to footer: 3589 N College Ave, Fayetteville AR 72703
- REALTOR® and CB Global Luxury® split to two lines
- Full compliance audit completed — site is compliant

**Homepage:**
- City cards fixed to pull featured images from each city page via get_the_post_thumbnail_url()
- City card text moved to bottom of card
- Gradient overlay added for text readability
- City name gold (#d4a865), tags white
- Text no longer wrapping — ellipsis on overflow

**Footer:**
- Quick Links and NWA Cities columns centered
- Single vertical list layout fixed
- Personal and Office sections separated cleanly

---

## Session 3 — May 10, 2026

**style.css version: 1.3.2 (no CSS changes this session)**

### COMPLETED THIS SESSION
- About page content added via WP-CLI (post ID 20, slug: about-dalicia-emerson)
- Block editor content: H1, 5 paragraphs, credentials list, phone CTA
- Content lives in WordPress database — no theme file changes needed
- Default Kadence template confirmed correct for About page (no custom template)
- Title suppression via `is_page('about-dalicia-emerson')` already in place from Session 2

---

## Session 2 — May 9, 2026

**style.css version: 1.3.2**

### COMPLETED THIS SESSION
- Footer column headings (Quick Links, NWA Cities) centered
- Footer nav fixed from 2-column grid to single vertical list
  (was display:grid grid-template-columns:1fr 1fr, changed to display:block)
- Showcase IDX confirmed active, paid, and connected to WordPress
- IDX license agreement (NWAR) signed April 28 via Dropbox Sign
- Properties page (/properties/) fixed: title hidden, gap removed
  using kadence_show_title filter + strpos URI match in functions.php
- About page title hidden via is_page('about-dalicia-emerson')
- About page gray bar diagnosed: caused by body:not(.is-front-page)
  padding-top in style.css — NOT a bug, just empty page with no content
- Full site audit completed (screenshots reviewed)

### SITE AUDIT FINDINGS

**Home page:**
- Hero looks great
- City cards all showing black/dark — needed hero images uploaded for all 8 cities
- [showcaseidx_hotsheets] showing as raw text — rendered after MLS approval
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

**City pages:**
- Not yet audited at time of this session

---

## ARCHITECTURE
- `style.css` — single source of truth for all CSS; Additional CSS in Customizer is EMPTY
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
- City grid: 8 cards with .de-city-card__bg div pulling featured image via get_the_post_thumbnail_url()
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

## CONSTANTS (functions.php)
```
DE_AGENT_NAME, DE_BROKERAGE, DE_PHONE, DE_PHONE_DISPLAY,
DE_EMAIL, DE_LICENSE, DE_REGION
```

---

## DEPLOYMENT
- GitHub Actions auto-deploys on every push to main
- Clear WP Engine cache after each deploy
- Version bump style.css when making CSS changes (1.5.5 current)

---

## Session 5 — May 20, 2026

**style.css version: 1.5.5**

### COMPLETED THIS SESSION

**Homepage visual polish:**
- Trust bar: flat transparent → solid navy gradient + gold bottom border + gold checkmarks
- IDX search section: added padding, background #f8f7f5, visual separation from trust bar
- Featured listings title: renamed to "Homes for Sale in Northwest Arkansas" + gold accent bar (scoped to #featured-listings-heading)
- City grid title "Explore NWA Communities": gold accent bar added (#communities-heading)
- Gap above city grid tightened: .de-cities padding-top 88px → 48px
- Gap above listings tightened: .de-listings padding 88px → 48px top

**Header:**
- Height increased from 90px to 110px (confirmed working in Chrome; Safari cache issue)
- Logo text scaled up: 0.9rem → 1.1rem
- Nav links scaled up to 0.92rem
- Phone button padding increased: 9px 18px → 12px 24px

**Bio card / testimonials section:**
- Agent photo scaled up: 88px → 140px circle
- Agent name: 1.4rem → 1.8rem
- Brokerage and note text scaled up and made more readable
- Bio card centered: text-align center added to .de-social-proof__bio
- Brokerage name corrected to "Coldwell Banker Harris McHaney & Faucette" in bio card, footer contact column, and footer bottom bar
- "Global Luxury Certified®" added in gold as second line in bio card and footer

**Siloam Springs:**
- New city card photo uploaded via WP Admin featured image (replaced postcard graphic)
