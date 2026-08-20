# File Map — Dalicia Emerson Child Theme

---

## DO NOT TOUCH
These files are auto-generated, infrastructure-only, or will be overwritten.

| File | Why |
|---|---|
| `.github/workflows/deploy.yml` | Auto-deploy pipeline — editing breaks deployments to WP Engine |
| `style.css` | Contains only the theme header comment; adding CSS here gets truncated by Theme File Editor |
| `.DS_Store` | Mac OS system file, auto-generated, ignored by git |

---

## EDITABLE BY DEVELOPER (Claude Code)
These files control the site's structure, logic, and design. Changes go through git → GitHub Actions → WP Engine.

| File | What It Controls |
|---|---|
| `functions.php` | Agent constants (name, phone, email, license), schema markup, AJAX lead handler, image sizes, security hardening, template slug overrides |
| `page-templates/home.php` | Homepage layout — hero, trust bar, IDX search, city grid, social proof |
| `page-templates/city-page.php` | All 8 city pages — hero, stats bar, IDX placeholder, sidebar agent card, contact form |
| `page-templates/relocation-hub.php` | Moving to NWA guide — hero, table of contents, article, lead capture |
| `page-templates/luxury-homes.php` | Luxury homes page layout |
| `page-templates/walmart-relocation.php` | Walmart supplier relocation page layout |
| `page-templates/contact.php` | Contact page layout |
| `content/relocation-hub.php` | 1,700-word article content for the relocation hub page |
| `template-parts/lead-form.php` | Reusable lead capture form used across all page templates |
| `header.php` | Site header — nav, logo, phone, CTA button |
| `footer.php` | Site footer — links, brokerage disclosure, copyright |
| `assets/images/` | All theme image assets (headshots, logos, hero photos) |
| `FILE_MAP.md` | This file |
| `PROJECT_NOTES.md` | Living build log — updated as the project evolves |

### CSS
All CSS lives in **Appearance → Customize → Additional CSS** in WordPress admin — not in any file in this repo. The local `style.css` has the full 1,800+ lines for reference only.

### SQL Utility Files (run once, keep for reference)
| File | Purpose |
|---|---|
| `city-data.sql` | Inserts city name, population, median price into WordPress postmeta for all 8 city pages |
| `assign-templates.sql` | Assigns `_wp_page_template` for all custom-template pages |

---

## EDITABLE BY DALICIA (WordPress Admin — no code needed)

| What | Where in WP Admin |
|---|---|
| Page content and body copy | Pages → Edit any page → Block editor |
| City name, population, median price | Pages → Edit city page → "City Page Settings" sidebar panel |
| Featured image (city hero photo) | Pages → Edit city page → Featured Image (right sidebar) |
| Contact form fields and notifications | WPForms → Edit Form |
| SEO title, meta description, OG image | Pages → Edit any page → RankMath SEO panel (below editor) |
| Navigation menus | Appearance → Menus |
| Site logo | Appearance → Customize → Site Identity |
| Blog posts | Posts → Add New |
| Media library | Media → Add New |
| Additional CSS (global styles) | Appearance → Customize → Additional CSS |
| Showcase IDX search settings | IDX → Settings |
| Hotsheet configurations | IDX → Hotsheets |

---

## Image Folder Guide

```
assets/images/
├── agent/          ← Dalicia's headshot(s)
├── logos/          ← DE logo, Coldwell Banker logo, Global Luxury badge
├── hero/           ← Full-width hero images (1920×960px recommended)
├── homepage/       ← Homepage-specific photos
└── cities/
    ├── bentonville/
    ├── rogers/
    ├── fayetteville/
    ├── springdale/
    ├── bella-vista/
    ├── lowell/
    ├── siloam-springs/
    └── eureka-springs/
```

City featured images are set **per page in WordPress Admin** (Featured Image), not by dropping files in these folders. These folders are for storing source files and backups in the repo.
