# Dalicia Emerson Website — Project Notes
Last updated: May 20, 2026 | style.css version: 1.5.5

## Stack
- WordPress 6.9.4 + Kadence parent + custom child theme
- IDX: Showcase IDX Essential — CARMLS/ArkansasONE LIVE
- Host: WP Engine Essential
- Repo: github.com/daliciaemerson/dalicia-emerson-theme
- Auto-deploy: GitHub Actions → WP Engine on push to main
- SEO: RankMath | Forms: WPForms Lite

## Completed Today (May 20, 2026)
- Trust bar: solid navy gradient + gold border + gold checkmarks
- IDX search section: padding, background, visual separation
- Featured listings title: renamed + gold accent bar (scoped to #featured-listings-heading)
- City grid title: gold accent bar added (#communities-heading)
- Header: increased to 110px, larger logo text and nav
- Bio card: photo 88px → 140px, all text scaled up, centered
- Testimonials section: brokerage name fixed, text sizes improved
- Footer: brokerage name corrected in contact column and bottom bar
- Siloam Springs city card: new photo uploaded via WP featured image
- City grid top padding tightened: 88px → 48px
- style.css now at v1.5.5

## Next Session — Priority Order
1. City pages — add Showcase IDX search/listings to all 8 city pages
2. City pages — write unique SEO content for all 8 cities
3. About page — write and add copy in WordPress block editor
4. RankMath — set meta titles/descriptions on all 15 pages
5. Blog — write first 3 posts
6. DNS flip — point daliciaemerson.com to WP Engine
7. Google Search Console — submit XML sitemap
8. GA4 — set up Google Analytics
9. Real client testimonials — replace placeholder quotes
10. Safari /properties/ page bug — investigate
11. Social automation — Meta Graph API + Make.com

## Key Technical Rules
- NEVER use background shorthand on .de-hero--city
- NEVER put CSS in Additional CSS — always style.css
- NEVER edit files in WordPress Theme File Editor
- Always bump style.css version on every CSS change
- Always clear WP Engine cache after deploying
- Header inline styles in header.php override style.css
- City hero images set via WordPress featured image
- IDX hotsheet shortcode: [showcaseidx_hotsheet name="Featured NWA Listings"]

## AREC Compliance
- "Coldwell Banker Harris McHaney & Faucette" in header every page ✅
- Office address in footer: 3589 N College Ave, Fayetteville AR 72703 ✅
- License SA00088247 visible on homepage ✅

## DNS Flip Plan (Pending)
1. Add daliciaemerson.com in WP Engine dashboard → Domains
2. GoDaddy: change CNAME to daliciaemerson.wpengine.com
3. SSL auto-provisions via WP Engine
4. Set up 301 redirects from old Moxi URLs
