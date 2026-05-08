# Dalicia Emerson — WordPress Build Notes

## Project Overview
- **Site:** daliciaemerson.wpengine.com (temp URL until DNS flip)
- **Final domain:** daliciaemerson.com (currently pointing to Moxi/CB)
- **Repo:** github.com/daliciaemerson/dalicia-emerson-theme
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
WordPress Theme File Editor has a character limit that cuts off our 1800+ line style.css. **Appearance → Customize → Additional CSS** loads reliably and overrides Kadence styles correctly. The `style.css` file contains only the required theme header comment — the `Template: kadence` line is what makes it a child theme. **Do not add CSS to style.css.**

### Why GitHub Actions wraps files before deploy?
WP Engine's git remote deploys to the WordPress root by default. The workflow copies theme files into `wp-content/themes/kadence-child/` inside a temp directory before pushing, so files land in the correct location.

### Brand
- **Colors:** Navy `#1a2b4a`, Gold `#b8924a`
- **Fonts:** Playfair Display (serif), Inter (sans)
- **CSS prefix:** All classes prefixed with `de-`

---

## File Structure

```
kadence-child/
├── style.css                  ← theme header ONLY — do not add CSS here
├── functions.php              ← agent constants, schema, menus, enqueue, security
├── page-templates/
│   ├── home.php               ← Homepage template
│   ├── relocation-hub.php
│   ├── city-page.php          ← reused by all 8 city pages
│   ├── luxury-homes.php
│   ├── walmart-relocation.php
│   └── contact.php
├── content/
│   └── relocation-hub.php     ← 1700-word article content
├── template-parts/
│   └── lead-form.php
├── city-data.sql              ← run in phpMyAdmin to populate city meta
└── .github/workflows/
    └── deploy.yml             ← auto-deploy to WP Engine on push to main
```

---

## WordPress Setup

### Plugins
| Plugin | Status |
|---|---|
| RankMath SEO | Installed |
| Showcase IDX | Installed + connected, MLS paperwork pending |
| WPForms Lite | Installed |
| Kadence Blocks | Installed |
| Genesis Blocks | Deleted |
| Akismet | Deleted |
| Hello Dolly | Deleted |

---

## Pages (15 total)

| # | Page Title | Template | Status |
|---|---|---|---|
| 1 | Home | Homepage | ✅ Set as static homepage |
| 2 | Moving to Northwest Arkansas | Relocation Hub | ✅ |
| 3 | Bentonville AR Real Estate | City Page | ✅ Loading correctly |
| 4 | Rogers AR Real Estate | City Page | ✅ Loading correctly |
| 5 | Fayetteville AR Real Estate | City Page | ✅ Loading correctly |
| 6 | Springdale AR Real Estate | City Page | ✅ Loading correctly |
| 7 | Bella Vista AR Real Estate | City Page | ✅ Loading correctly |
| 8 | Lowell AR Real Estate | City Page | ✅ Loading correctly |
| 9 | Siloam Springs AR Real Estate | City Page | ✅ Loading correctly |
| 10 | Eureka Springs AR Real Estate | City Page | ✅ Loading correctly |
| 11 | Luxury Homes Northwest Arkansas | Luxury Homes | ✅ |
| 12 | Walmart Supplier Relocation NWA | Walmart Relocation | ✅ |
| 13 | Contact Dalicia Emerson | Contact | ✅ |
| 14 | About Dalicia Emerson | Default | ✅ |
| 15 | Privacy Policy | Auto-generated | ✅ |

---

## What's Done vs Still Needed

### ✅ Completed
- GitHub Actions auto-deploy (push to main → WP Engine)
- Hero images: relocation-hub, home, city-page (featured image)
- home.php Homepage template built and deployed
- Homepage assigned in WP Admin + set as static front page
- city-data.sql run — all 8 cities have name, population, median price
- All 15 pages created and published
- Showcase IDX connected
- RankMath, WPForms, Kadence Blocks installed
- Additional CSS: `.de-hero--home`, `.de-hero__actions`
- **Permalink structure fixed** — was set to Plain (?p=123), changed to Post name; this was root cause of all city pages showing homepage content
- **All 8 city pages loading correctly** — city name, population, median price, agent card with headshot, contact form, footer all working
- **City hero text visibility fixed** — CSS in Customize → Additional CSS targeting `.de-hero--city` z-index and `.de-hero__title` / `.de-hero__subtitle` colors
- debug error_log line removed from functions.php

### Phase 1 — Finish Build
- [ ] Upload city photos as featured images on each city page
- [ ] Add unique written content to all 8 city pages
- [ ] Configure nav menu Cities dropdown
- [ ] Wire up WPForms contact form
- [ ] Upload Dalicia's logo to header

### Phase 2 — Domain & SEO
- [ ] Point daliciaemerson.com DNS to WP Engine
- [ ] Configure RankMath meta titles/descriptions on all 15 pages
- [ ] Submit sitemap to Google Search Console
- [ ] Set up Google Analytics GA4

### Phase 3 — Content & Automation
- [ ] Write unique content for all 8 city pages
- [ ] Write Walmart relocation page content
- [ ] Write luxury homes page content
- [ ] Write about page content
- [ ] Build blog with first 3 posts
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

---

## Deploy Workflow Notes
- **Trigger:** push to `main` branch
- **Secret:** `WPE_SSHG_KEY_PRIVATE` in GitHub repo secrets
- **WP Engine remote:** `git@git.wpengine.com:production/daliciaemerson.git`
- **Deploy path:** `wp-content/themes/kadence-child/`
- **Known issue:** `actions/checkout@v4` Node.js 20 deprecation warning — harmless until Sept 2026
