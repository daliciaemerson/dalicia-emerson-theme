# Dalicia Emerson — Theme Development Notes

**Repo:** daliciaemerson/dalicia-emerson-theme | **Branch:** main
**Stack:** WordPress Kadence child theme | **Host:** WP Engine
**Live URL:** daliciaemerson.wpengine.com
**Real domain:** daliciaemerson.com (not yet pointed to WP Engine)

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
- Col 2: Quick Links in 2-col grid
- Col 3: NWA Cities in 2-col grid with correct slugs
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

---

## WHAT STILL NEEDS DOING
1. Clear WP Engine cache after every push
2. Upload photos for remaining 7 city pages
3. Point daliciaemerson.com DNS to WP Engine
4. Configure RankMath meta titles on all pages
5. Submit sitemap to Google Search Console
6. Showcase IDX MLS approval follow-up
7. Fix remaining page templates (luxury, walmart, contact, about)
8. Add real testimonials from Dalicia
9. Blog setup — first 3 posts
10. Social media automation (Phase 2)

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
- Version bump style.css when making CSS changes (1.2.0 current)
