# Dalicia Emerson — WordPress Build Notes

## Project Overview
- **Site:** daliciaemerson.wpengine.com (temp URL until DNS flip)
- **Final domain:** daliciaemerson.com (currently pointing to Moxi/CB)
- **Platform:** WordPress 6.9.4 + Kadence parent theme + custom child theme
- **Host:** WP Engine Essential plan ($30/mo)
- **Purpose:** Replace MoxiWorks/Coldwell Banker platform with owned WordPress site

---

## Agent Info
| Field | Value |
|---|---|
| Name | Dalicia Emerson |
| Brokerage | Coldwell Banker Harris McHaney & Faucette |
| License | SA00088247 AR |
| Phone | (479) 422-3060 |
| Email | daliciaemerson@coldwellbankerhmf.com |
| Headshot URL | https://daliciaemerson.wpenginepowered.com/wp-content/uploads/2026/04/BB6FBCB7-6C67-42D9-A3EE-C7151EB55A70_1_201_a.jpeg |

---

## Architecture Decisions

### Why a Kadence child theme?
Kadence parent theme cannot be modified directly — updates wipe all changes. The child theme inherits all Kadence functionality while allowing custom templates and CSS.

### Why Additional CSS instead of style.css?
WordPress Theme File Editor has a character limit that cuts off our 1800+ line style.css. **Appearance → Customize → Additional CSS** loads reliably and overrides Kadence styles correctly. The `style.css` file in the child theme contains only the required theme header comment — the `Template: kadence` line is what makes it a child theme. **Do not add CSS to style.css.**

### Brand
- **Colors:** Navy `#1a2b4a`, Gold `#b8924a`
- **Fonts:** Playfair Display (serif), Inter (sans)
- **CSS prefix:** All classes prefixed with `de-`

---

## File Structure

```
kadence-child/
├── style.css               ← theme header ONLY — do not add CSS here
├── functions.php           ← agent constants, schema, menus, enqueue, security
├── page-templates/
│   ├── relocation-hub.php
│   ├── city-page.php       ← reused by all 8 city pages
│   ├── luxury-homes.php
│   ├── walmart-relocation.php
│   └── contact.php
├── content/
│   └── relocation-hub.php  ← 1700-word article content
└── template-parts/
    └── lead-form.php
```

---

## WordPress Setup

### Plugins
| Plugin | Status |
|---|---|
| RankMath SEO | Installed |
| Showcase IDX | Installed + connected |
| WPForms Lite | Installed |
| Kadence Blocks | Installed |
| Genesis Blocks | Deleted |
| Akismet | Deleted |
| Hello Dolly | Deleted |

---

## Pages (15 total)

| # | Page Title | Template |
|---|---|---|
| 1 | Moving to Northwest Arkansas | Relocation Hub |
| 2 | Bentonville AR Real Estate | City Page |
| 3 | Rogers AR Real Estate | City Page |
| 4 | Fayetteville AR Real Estate | City Page |
| 5 | Springdale AR Real Estate | City Page |
| 6 | Bella Vista AR Real Estate | City Page |
| 7 | Lowell AR Real Estate | City Page |
| 8 | Siloam Springs AR Real Estate | City Page |
| 9 | Eureka Springs AR Real Estate | City Page |
| 10 | Luxury Homes Northwest Arkansas | Luxury Homes |
| 11 | Walmart Supplier Relocation NWA | Walmart Relocation |
| 12 | Contact Dalicia Emerson | Contact |
| 13 | About Dalicia Emerson | Default |
| 14 | Home Valuation NWA | Default |
| 15 | Privacy Policy | Auto-generated |

---

## IDX Status
- Showcase IDX plugin installed and connected
- MLS paperwork submitted to NWAR — **pending approval**
- Demo listings showing at `/properties/`
- Default search page set to `/properties/`

---

## Known Issues

| Issue | File | Status |
|---|---|---|
| Agent headshot not showing on city pages | `page-templates/city-page.php` | src hardcoded, need to verify image URL loads |
| Agent headshot not showing on Walmart page | `page-templates/walmart-relocation.php` | same fix needed |
| Hero background images not uploaded | all templates | pages show navy fallback |
| City page content is placeholder only | all 8 city pages | needs unique content per city |
| Nav menu Cities dropdown not configured | WordPress admin | not built yet |

---

## What Still Needs to Be Done

### Phase 1 — Finish Current Build
- [ ] Fix agent headshot on `city-page.php`
- [ ] Fix agent headshot on `walmart-relocation.php`
- [ ] Upload hero images for key pages
- [ ] Add unique content to all 8 city pages
- [ ] Configure RankMath for each page
- [ ] Set up nav menu Cities dropdown
- [ ] Build proper homepage (currently using relocation hub)
- [ ] Wire up WPForms contact form
- [ ] Upload Dalicia's logo

### Phase 2 — Domain & SEO
- [ ] Point daliciaemerson.com DNS to WP Engine
- [ ] Set up 301 redirects from old Moxi URLs
- [ ] Submit sitemap to Google Search Console
- [ ] Configure RankMath schema on all pages
- [ ] Set up Google Analytics GA4

### Phase 3 — Content & Automation
- [ ] Write unique content for all 8 city pages
- [ ] Write Walmart relocation page content
- [ ] Write luxury homes page content
- [ ] Write about page content
- [ ] Set up blog with first 3 posts
- [ ] Social automation with Meta Graph API

### Phase 4 — IDX
- [ ] Complete NWAR MLS approval
- [ ] Replace demo listings with real listings
- [ ] Configure Showcase IDX hotsheets
- [ ] Add IDX search to homepage

---

## Domain Flip Plan
**Current:** daliciaemerson.com → Moxi/CB
**Target:** daliciaemerson.com → WP Engine

Steps:
1. Log into GoDaddy
2. Change CNAME to `daliciaemerson.wpengine.com` — OR — change A record to `136.111.23.65`
3. Add domain in WP Engine dashboard
4. SSL auto-provisions (allow up to 24hrs)
5. Old Moxi site goes offline
6. Set up 301 redirects for all old Moxi URLs
