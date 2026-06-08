# Dalicia Emerson — Theme Development Notes

**Repo:** daliciaemerson/dalicia-emerson-theme | **Branch:** main
**Stack:** WordPress Kadence child theme | **Host:** WP Engine
**Live URL:** daliciaemerson.wpengine.com
**Real domain:** daliciaemerson.com (not yet pointed to WP Engine)

---

## WHAT STILL NEEDS DOING

1. Spoke pages — add hero featured images (walmart, tyson, jb-hunt, vendor)
2. Spoke pages — add unique content per company (neighborhoods, tips, IDX)
3. Hub page — update current Walmart Relocation page to hub with 4 spoke cards
4. City pages — verify IDX map overflow fix
5. City pages — write unique SEO content for all 8 cities
6. About page — review and improve content
7. DNS flip — point daliciaemerson.com to WP Engine
8. Submit sitemap to Google Search Console
9. Set up GA4
10. RankMath meta titles on all 15 pages
11. Safari /properties/ page not loading — investigate
12. Blog posts — first 3
13. Add real testimonials from Dalicia
14. Lowell city card aerial photo
15. J.B. Hunt hero image needed

---

## Session 6 — May 27, 2026

**style.css version: 1.6.4**

### COMPLETED THIS SESSION

**City Pages — IDX Integration:**
- Created 8 city-specific hotsheets in Showcase IDX dashboard:
  Bentonville, Rogers, Fayetteville, Springdale, Bella Vista, Lowell, Siloam Springs, Eureka Springs
- Each hotsheet uses a city-filtered search (Residential, Active, For Sale)
- Display: Gallery | Limit: 20 | Show Map: Yes | Link to Full Results: Yes
- Wired all hotsheets into city-page.php via PHP array lookup
- Eureka Springs removed from IDX array (no MLS data, small market)
- Shortcode format: [showcaseidx_hotsheet name="[City] Listings"]

**City Pages — Stats Bar:**
- Replaced hardcoded "Arkansas / State" stat with real MLS avg days on market
- Data pulled from CARMLS/Matrix market report:
  Bentonville: 59 | Rogers: 57 | Fayetteville: 57 | Springdale: 58
  Bella Vista: 49 | Lowell: 42 | Siloam Springs: 67
- Eureka Springs has no MLS DOM data — stat hidden for that city

**City Pages — Layout Fix (in progress):**
- IDX map overflowing sidebar grid — Showcase IDX widget injects fixed widths
- Fix: moving .de-city-idx outside and above .de-city-page__layout grid
  so IDX is full width, sidebar grid only contains text content + agent card
- style.css at 1.6.4 — fix pushed, verify after cache clear

---

## Session 8 — June 1, 2026

**style.css version: 1.7.4**

### COMPLETED THIS SESSION

**Relocation Hub & Spoke Architecture:**
- Decided to restructure Walmart Relocation page into hub + 4 spoke pages
- Created 4 new WordPress pages via WP Admin + SSH WP-CLI:
  - ID 167 — Relocating for Walmart (/walmart-relocation/)
  - ID 168 — Walmart Vendor Relocation (/walmart-vendor-relocation/)
  - ID 169 — Relocating for Tyson Foods (/tyson-foods-relocation/)
  - ID 170 — Relocating for J.B. Hunt (/jb-hunt-relocation/)
- Built relocation-spoke.php template with dynamic company name via custom fields
- Assigned template and custom fields to all 4 pages via SSH WP-CLI
- All 4 spoke pages live and rendering correctly
- Hero images pending — will add tomorrow via WP Admin featured images

**Homepage:**
- Removed Eureka Springs from city grid
- Changed city grid to repeat(auto-fill, minmax(280px, 1fr)) for flexible layout

**Luxury Page:**
- Credential bar: removed license item, updated threshold $500K → $800K
- Global Luxury copy shortened for better visual balance

**Workflow rule added:**
- Always use Claude Code / SSH WP-CLI for changes when possible
- Only use WP Admin manually when WP-CLI is not an option

---

## Session 5 — May 20, 2026

**style.css version: 1.5.6**

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

---

## Session 4 — May 11-14, 2026

**style.css version: 1.4.6**

### COMPLETED THIS SESSION

**IDX / MLS:**
- Showcase IDX paid and active
- NABOR Data Access Agreement fully executed 05/11/2026
- Live CARMLS data feed activated
- Hotsheet created: "Featured NWA Listings" showing on homepage gallery carousel
- Shortcode fixed: showcaseidx_hotsheets → showcaseidx_hotsheet (singular)
- IDX search default map set to NWA/Bentonville area
- Property filters set: residential only, no land

**AREC Compliance:**
- Brokerage name "Coldwell Banker Harris McHaney & Faucette" added to header on every page
- Header brokerage name links to coldwellbankernwa.com
- Footer reorganized: personal info + office section
- Office address added to footer: 3589 N College Ave, Fayetteville AR 72703
- Full compliance audit completed — site is compliant

**Homepage:**
- City cards fixed to pull featured images via get_the_post_thumbnail_url()
- City card text moved to bottom of card
- Gradient overlay added for text readability

**Footer:**
- Quick Links and NWA Cities columns centered
- Single vertical list layout fixed

---

## Session 3 — May 10, 2026

**style.css version: 1.3.2**

### COMPLETED THIS SESSION
- About page content added via WP-CLI (post ID 20, slug: about-dalicia-emerson)
- Block editor content: H1, 5 paragraphs, credentials list, phone CTA

---

## Session 2 — May 9, 2026

**style.css version: 1.3.2**

### COMPLETED THIS SESSION
- Footer column headings centered
- Footer nav fixed from 2-column grid to single vertical list
- Properties page (/properties/) fixed: title hidden, gap removed
- About page title hidden via is_page('about-dalicia-emerson')
- Full site audit completed

---

## ARCHITECTURE
- style.css — single source of truth; Additional CSS in Customizer is EMPTY
- header.php — fully custom, overrides Kadence; inline style block wins over style.css for header
- footer.php — 4-column layout
- page-templates/ — 7 templates

## KEY CSS RULES
- NEVER use background shorthand on .de-hero--city
- NEVER put CSS in Additional CSS — always style.css
- NEVER edit in Theme File Editor
- Always bump style.css version on CSS changes (currently 1.6.4)
- Always clear WP Engine cache after deploy
- City hero images = WordPress featured image, not theme files
- IDX hotsheet shortcode: [showcaseidx_hotsheet name="[City] Listings"]

## HEADER
- Height: 110px (increased Session 5)
- Always white background
- Inline styles in header.php override style.css for header elements

## CITY PAGES
- Hero: featured image via inline background-image
- Stats bar: population, median price, avg days on market (real MLS data)
- Custom fields: _de_city_name, _de_city_population, _de_city_median_price
- IDX hotsheet: full width above sidebar grid (as of Session 6)
- 2-col layout below IDX: content + sidebar with agent card + lead form

## AREC COMPLIANCE
- Brokerage name in header every page ✅
- Office address in footer ✅
- License SA00088247 on homepage ✅

## DNS FLIP (pending)
1. Add daliciaemerson.com in WP Engine → Domains
2. GoDaddy: change CNAME to daliciaemerson.wpengine.com
3. SSL auto-provisions
4. Set up 301 redirects from old Moxi URLs

## DEPLOYMENT
- GitHub Actions auto-deploys on push to main
- Clear WP Engine cache after each deploy
