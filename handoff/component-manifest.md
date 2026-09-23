# Component Manifest — Dalicia Emerson Theme
**style.css version:** 2.8.8  
**Generated:** 2026-09-23  
**Source of truth:** `style.css` · `template-parts/` · `page-templates/`

---

## Template Parts

### `template-parts/agent-contact-card.php`
Standalone agent identity card with headshot, monogram, contact rows, optional CTA button, social links.

| Prop | Type | Default | Notes |
|---|---|---|---|
| `cta` | bool | `true` | Show "Have Dalicia Contact Me" link button |

---

### `template-parts/contact-section.php`
Full-bleed navy-grad contact section: 2fr copy column + 1fr sidebar (agent card + disclosure form). Composes `agent-contact-card` and `lead-form` internally.

| Prop | Type | Default | Notes |
|---|---|---|---|
| `source` | string | `'generic'` | Used to namespace form/button IDs; required for multi-form pages |
| `eyebrow` | string | `''` | Uppercase label above heading |
| `heading` | string | `''` | Section H2 |
| `paragraphs` | string[] | `[]` | First item → `.de-contact-sidebar__lede`; subsequent → `.de-contact-sidebar__body` |

---

### `template-parts/credential-bar.php`
Horizontal navy-gradient bar of icon + text credential claims.

| Prop | Type | Default | Notes |
|---|---|---|---|
| `items` | array | `[]` | Required. Each item: `{ icon: string, label: string }` |
| `aria_label` | string | `'Credentials'` | `role="region"` label |

---

### `template-parts/lead-form.php`
AJAX lead capture form. Fields: Name (required), Email (required), Phone, Message. Honeypot spam trap. Redirects on success if server sends `redirect` URL; otherwise shows inline status.

| Prop | Type | Default | Notes |
|---|---|---|---|
| `source` | string | `'generic'` | Namespaces form ID, status ID, nonce action, and hidden `source` field sent to server |

Error spans: `{form_id}-name-error` and `{form_id}-email-error` are in DOM for ARIA. JS populates them on validation.  
Requires `DE.ajaxUrl` on `window.DE` (enqueued via `functions.php`).

---

### `template-parts/stat-block.php`
Single statistic: large number + label. Used standalone or via `stats-bar`.

| Prop | Type | Default | Notes |
|---|---|---|---|
| `value` | string | `''` | Required. The number/figure |
| `label` | string | `''` | Required. Caption below value |
| `prefix` | string | `''` | Prepended to value (e.g. `$`) |
| `suffix` | string | `''` | Appended to value (e.g. `+`) |
| `size` | string | `'md'` | `'sm'` · `'md'` · `'lg'` |
| `tone` | string | `'dark'` | `'dark'` (gold-light value on navy) · `'light'` (navy value on white) |
| `boxed` | bool | `false` | Card surface with gold top border |

---

### `template-parts/stats-bar.php`
Row of stat blocks in a band. Delegates each item to `stat-block`.

| Prop | Type | Default | Notes |
|---|---|---|---|
| `items` | array | `[]` | Required. Each item accepts all `stat-block` props |
| `aria_label` | string | `'Statistics'` | `role="region"` label |
| `contained` | bool | `false` | Prose-width band, no navy background |
| `tone` | string | `'dark'` | Inherited by each item unless item overrides |
| `boxed` | bool | `false` | Inherited by each item unless item overrides |
| `dividers` | bool | `true` | Hairline separators between items. Auto-suppressed when `boxed` is true |
| `goldRule` | bool | `false` | Gold-warm bottom border (about page context) |

---

## Page Templates

| File | Template Name | Purpose |
|---|---|---|
| `page-templates/home.php` | Homepage | Full-page hero with IDX search, featured listings hotsheet, value props cards, NWA city grid, social proof / testimonials |
| `page-templates/about.php` | About Dalicia | Agent bio: headshot, credentials pair images, stats bar, quote callout, body copy, sidebar agent card |
| `page-templates/city-page.php` | City Page | NWA city landing: hero with overlay, city stats bar, IDX listings iframe, contact sidebar |
| `page-templates/contact.php` | Contact | Lead form (wide), agent expectations list, service area, agent card sidebar |
| `page-templates/luxury-homes.php` | Luxury Homes | Luxury market page: credentials bar, feature grid, place cards, IDX hotsheet, CTA section |
| `page-templates/relocation-hub.php` | Relocation Hub | Long-form relocation guide: TOC, article content, timeline, inline CTAs, contact sidebar |
| `page-templates/relocation-spoke.php` | Relocation Spoke | City-specific relocation sub-pages sharing hub layout |
| `page-templates/reviews.php` | Reviews | Review card grid, social proof heading, CTA section |
| `page-templates/thank-you.php` | Thank You | Post-submission confirmation: icon, heading, next-steps, home link |
| `page-templates/walmart-relocation.php` | Walmart Supplier Relocation | Walmart-employer-specific relocation page: employer grid, timeline, relocation options, stats, contact sidebar |

---

## CSS Custom Properties (`:root`)

### Brand Colors
| Token | Value | Usage |
|---|---|---|
| `--de-navy` | `#1a2b4a` | Primary brand navy — text, backgrounds, buttons |
| `--de-navy-deep` | `#111e35` | Deeper navy — hero fallback background |
| `--de-navy-ink` | `#071525` | Deepest ink navy — footer bg, agent card name |
| `--de-charcoal` | `#1c1c1e` | Near-black charcoal — `.de-section--alt` background |
| `--de-black` | `#0a0a0a` | Near-black — rarely used |
| `--de-gold` | `#c9a84c` | Primary gold — buttons, icons, borders, accents |
| `--de-gold-light` | `#e8c97a` | Lighter gold — stat numbers on dark, hover on city cards, `.de-btn--text` on dark |
| `--de-gold-warm` | `#d4af5a` | Restricted — article `border-bottom`, list left borders, relocation headings only |
| `--de-gold-faint` | `rgba(201,168,76,0.12)` | Subtle gold bg — nav hover fills |
| `--de-accent-hover` | `var(--de-gold-light)` | Alias — button hover state |

### Neutrals
| Token | Value |
|---|---|
| `--de-white` | `#ffffff` |
| `--de-gray-light` | `#f5f5f3` |
| `--de-gray-warm` | `#f8f7f5` |
| `--de-gray-mid` | `#8a8a8a` |
| `--de-gray-border` | `#e0e0dc` |
| `--de-border-light` | `#e8e8e4` |
| `--de-border-cream` | `#e8e4de` | Warm cream border — idx-search, about quote |

### Semantic Aliases
| Token | Value |
|---|---|
| `--de-text` | `#1a2b4a` |
| `--de-text-muted` | `#5a6a7a` |
| `--de-text-slate` | `#6b7280` |
| `--de-on-dark` | `rgba(255,255,255,0.92)` |
| `--de-on-dark-muted` | `rgba(255,255,255,0.78)` |
| `--de-overlay` | `rgba(26,43,74,0.58)` |

### Status
| Token | Value |
|---|---|
| `--de-success-bg` | `#edfaf0` |
| `--de-success-text` | `#1a6630` |
| `--de-success-border` | `#9ddcaa` |
| `--de-error-bg` | `#fef2f2` |
| `--de-error-text` | `#991b1b` |
| `--de-error-border` | `#f5a5a5` |

### Focus Ring
| Token | Value |
|---|---|
| `--de-focus-ring-color` | `var(--de-navy)` |
| `--de-focus-ring-color-on-dark` | `var(--de-gold-light)` |
| `--de-focus-ring` | `0 0 0 2px var(--de-white), 0 0 0 4px var(--de-focus-ring-color)` |

Dark sections (`.de-social-proof`, `.de-footer`, `.de-hero`, `.de-trust-bar`) override `--de-focus-ring-color` to `--de-focus-ring-color-on-dark` via a scoped rule below `:root`.

### Typography
| Token | Value |
|---|---|
| `--de-font-serif` | `'Playfair Display', Georgia, serif` |
| `--de-font-sans` | `'Inter', 'Helvetica Neue', Arial, sans-serif` |

### Type Scale
| Token | Value | Approx px | Usage |
|---|---|---|---|
| `--de-text-3xs` | `0.72rem` | ~11.5px | Micro labels, credentials, legal |
| `--de-text-2xs` | `0.78rem` | 12.5px | Bottom bar, credentials |
| `--de-text-xs` | `0.85rem` | 13.5px | Secondary labels, small body |
| `--de-text-sm` | `0.92rem` | ~15px | Nav, body-small, links |
| `--de-text-base` | `1rem` | 16px | Body copy, form fields |
| `--de-text-lg` | `1.1rem` | ~18px | Lead text |
| `--de-text-xl` | `1.35rem` | ~22px | Sub-headings, card titles |
| `--de-h3` | `1.6rem` | 25.6px | Section sub-heads |
| `--de-h2` | `clamp(1.9rem, 3vw, 2.4rem)` | — | Responsive section heads |
| `--de-h1` | `clamp(2.4rem, 5vw, 3.6rem)` | — | Responsive page heads |
| `--de-display` | `clamp(2.8rem, 6vw, 4.4rem)` | — | Hero / stat numbers |

### Spacing Scale
| Token | Value |
|---|---|
| `--de-space-1` | `4px` |
| `--de-space-2` | `8px` |
| `--de-space-3` | `12px` |
| `--de-space-4` | `16px` |
| `--de-space-5` | `24px` |
| `--de-space-6` | `32px` |
| `--de-space-7` | `48px` |
| `--de-space-8` | `64px` |
| `--de-space-9` | `96px` |
| `--de-gutter` | `32px` |

### Layout
| Token | Value |
|---|---|
| `--de-max-width` | `1280px` |
| `--de-max-width-prose` | `72ch` |
| `--de-header-h` | `110px` (60px at ≤768px via media query) |

### Border Radius
| Token | Value |
|---|---|
| `--de-radius` | `4px` |
| `--de-radius-lg` | `8px` |
| `--de-radius-xl` | `12px` |
| `--de-radius-2xl` | `20px` |

### Shadows
| Token | Value |
|---|---|
| `--de-shadow-card` | `0 2px 12px rgba(26,43,74,0.08)` |
| `--de-shadow-agent` | `0 14px 36px rgba(7,21,37,0.16)` |

### Motion
| Token | Value |
|---|---|
| `--de-transition` | `0.22s ease` |
| `--de-ease` | `cubic-bezier(0.4, 0, 0.2, 1)` |

### Typography Utilities
| Token | Value |
|---|---|
| `--de-track-toc` | `0.14em` |
| `--de-track-label` | `0.08em` |
| `--de-weight-bold` | `700` |

### Gradients & Composites
| Token | Value |
|---|---|
| `--de-navy-grad` | `linear-gradient(135deg, #1a2744 0%, #2c3e6b 100%)` |
| `--de-border-gold` | `1px solid var(--de-gold)` |

---

## Canonical CSS Component Classes

### Accessibility
`de-skip-link` · `sr-only`

### Header & Navigation
`de-header` · `de-header--transparent` · `de-header--scrolled`  
`de-header__inner` · `de-header__logo` · `de-header__logo--light` · `de-header__logo--dark` · `de-header__logo-img` · `de-header__logo-text` · `de-header__brokerage`  
`de-header__cta` · `de-header__phone` · `de-header__btn` · `de-header__hamburger`  
`de-nav` · `de-nav__item` · `de-nav__item--cities` · `de-nav__link` · `de-nav__chevron` · `de-nav__dropdown`  
`de-hamburger` · `de-mobile-nav` · `de-mobile-nav--open` · `de-mobile-nav-overlay`

### Hero
`de-hero` · `de-hero--home` · `de-hero--city` · `de-hero--luxury` · `de-hero--corporate` · `de-hero--about` · `de-hero--relocation`  
`de-hero__bg` · `de-hero__bg-image` · `de-hero__overlay` · `de-hero__overlay--dark`  
`de-hero__inner` · `de-hero__eyebrow` · `de-hero__headline` · `de-hero__subheadline` · `de-hero__accent`  
`de-hero__title` · `de-hero__subtitle` · `de-hero__ctas` · `de-hero__actions`  
`de-hero__search` · `de-hero__search-label`  
`de-credential-bar` · `de-credential-bar__inner` · `de-credential-bar__item` · `de-credential-bar__icon`

### Buttons
`de-btn` · `de-btn--primary` · `de-btn--secondary` · `de-btn--secondary--on-dark` · `de-btn--text` · `de-btn--full` · `de-btn--lg` · `de-btn--large`

### Forms
`de-form` · `de-lead-form`  
`de-form__group` · `de-form__label` · `de-form__required`  
`de-form__input` · `de-form__textarea` · `de-form__select`  
`de-form__field-error` · `de-form__status` · `de-form__status--success` · `de-form__status--error`  
`de-form__row` · `de-form__disclaimer`  
`de-lead-form-panel` · `de-lead-form-panel__heading` · `de-lead-form-panel__intro`

### Section Shared
`de-section-eyebrow` · `de-section-heading` · `de-section-subtext` · `de-section-title`  
`de-section` · `de-section--alt` · `de-section--luxury-dark` · `de-section__intro`  
`de-container` · `de-homepage`

### Featured Listings
`de-listings` · `de-listings__inner` · `de-listings__footer`  
`de-idx-search` · `de-luxury-idx-wrap`

### Value Props
`de-value-props` · `de-value-props__inner` · `de-value-props__grid`  
`de-value-card` · `de-value-card__icon` · `de-value-card__title` · `de-value-card__body` · `de-value-card__link`

### City Grid
`de-cities` · `de-cities__inner` · `de-cities__grid`  
`de-card--city` · `de-card--city__bg` · `de-card--city__content` · `de-card--city__name` · `de-card--city__tags` · `de-card--city__sub`

### Social Proof / Testimonials
`de-social-proof` · `de-social-proof__container` · `de-social-proof__heading` · `de-social-proof__grid` · `de-social-proof__cta` · `de-social-proof__testimonials`  
`de-testimonial-card` · `de-testimonial-card__stars` · `de-testimonial-card__quote` · `de-testimonial-card__author` · `de-testimonial-card__name` · `de-testimonial-card__label`

### Agent Identity Strip
`de-agent-strip` · `de-agent-strip__inner` · `de-agent-strip__identity` · `de-agent-strip__photo` · `de-agent-strip__name` · `de-agent-strip__title` · `de-agent-strip__contact` · `de-agent-strip__phone` · `de-agent-strip__cta`

### Agent Contact Card
`de-agent-contact-card` · `de-agent-contact-card__photo-wrap` · `de-agent-contact-card__photo`  
`de-agent-contact-card__identity` · `de-agent-contact-card__monogram` · `de-agent-contact-card__name` · `de-agent-contact-card__title-tag`  
`de-agent-contact-card__contact` · `de-agent-contact-card__row` · `de-agent-contact-card__row--static` · `de-agent-contact-card__row-icon`  
`de-agent-contact-card__divider` · `de-agent-contact-card__cta` · `de-agent-contact-card__cta-btn` · `de-agent-contact-card__cta-main` · `de-agent-contact-card__cta-sub`  
`de-agent-contact-card__social` · `de-agent-contact-card__social-btn`

### Contact Sidebar
`de-contact-sidebar` · `de-contact-sidebar__inner` · `de-contact-sidebar__copy`  
`de-contact-sidebar__eyebrow` · `de-contact-sidebar__heading` · `de-contact-sidebar__lede` · `de-contact-sidebar__body`  
`de-contact-sidebar__sidebar` · `de-contact-sidebar__divider` · `de-contact-sidebar__divider-rule` · `de-contact-sidebar__divider-label`  
`de-contact-sidebar__disclosure` · `de-contact-sidebar__chevron`  
`de-contact-sidebar__form-wrap` · `de-contact-sidebar__form-inner`

### Stats
`de-stat` · `de-stat__value` · `de-stat__label` · `de-stat--sm` · `de-stat--lg` · `de-stat--light` · `de-stat--boxed`  
`de-stats-bar` · `de-stats-bar__inner` · `de-stats-bar--contained` · `de-stats-bar--no-dividers` · `de-stats-bar--gold-rule`  
`de-trust-stats` · `de-trust-stats__grid` · `de-trust-stat__number` · `de-trust-stat__label` · `de-trust-stat__sub` · `de-trust-bar`  
`de-city-stats` · `de-city-stats__item` · `de-city-stats__number` · `de-city-stats__label`

### Long-form Content
`de-article` · `de-content-section` · `de-content-section--cta-inline`  
`de-lede` · `de-toc` · `de-toc__label` · `de-toc__list`  
`de-inline-cta` · `de-inline-cta__actions` · `de-inline-cta__license`  
`de-feature-grid` · `de-feature-grid__text` · `de-feature-list`  
`de-text-light`

### Credentials Bars (Luxury / Inline)
`de-credentials-bar` · `de-credentials-bar__inner`  
`de-credential` · `de-credential__icon`  
`de-creds-bar` · `de-creds-bar__inner`  
`de-cred-item` · `de-cred-item__icon`

### CTA Section
`de-cta-section` · `de-cta-section__inner` · `de-cta-section__copy` · `de-cta-section__byline` · `de-cta-section__form`  
`de-contact-list` · `de-contact-list__link`

### City / Relocation Page
`de-city-page__layout` · `de-city-page__content` · `de-city-idx` · `de-city-idx__inner` · `de-city-layout`  
`de-card--place-grid` · `de-card--place__name` · `de-card--place__desc` · `de-card--place__link`  
`de-employer-grid` · `de-employer-card`  
`de-timeline` · `de-timeline__step` · `de-timeline__marker`  
`de-relocation-grid` · `de-relocation-option`  
`de-walmart-page__layout`

### Contact Page
`de-page-hero--compact` · `de-page-hero` · `de-page-hero__sub` · `de-page-hero__subtitle`  
`de-contact-page__layout` · `de-contact-page__form-col`  
`de-contact-expectations` · `de-service-area` · `de-sidebar-form`

### About Page
`de-about-page__layout` · `de-about-page__body` · `de-about-page__sidebar`  
`de-about-creds-pair` · `de-about-creds-pair__img` · `de-about-float-img`  
`de-about-quote` · `de-about-quote__text` · `de-about-quote__cite`

### Reviews Page
`de-reviews-section` · `de-reviews-grid` · `de-reviews__cta`  
`de-review-card` · `de-review-card__stars` · `de-review-card__text` · `de-review-card__name`

### Thank You Page
`de-thankyou-page` · `de-thankyou` · `de-thankyou__inner` · `de-thankyou__icon` · `de-thankyou__heading` · `de-thankyou__sub` · `de-thankyou__urgent` · `de-thankyou__home`

### Footer
`de-footer` · `de-footer__main` · `de-footer__inner`  
`de-footer__col--brand` · `de-footer__col--contact`  
`de-footer__brand` · `de-footer__brand-identity` · `de-footer__monogram` · `de-footer__brand-name` · `de-footer__brand-tagline` · `de-footer__brand-copy` · `de-footer__brand-divider`  
`de-footer__credentials` · `de-footer__social` · `de-footer__social-btn`  
`de-footer__col-heading` · `de-footer__col-bar` · `de-footer__col-divider`  
`de-footer__nav` · `de-footer__link` · `de-footer__chevron`  
`de-footer__contact-list` · `de-footer__contact-item` · `de-footer__contact-icon` · `de-footer__contact-link` · `de-footer__phone`  
`de-footer__office-heading` · `de-footer__office-bar` · `de-footer__office-brokerage` · `de-footer__office-link` · `de-footer__office-address` · `de-footer__map-pin`  
`de-footer__bottom` · `de-footer__bottom-inner` · `de-footer__copyright` · `de-footer__legal` · `de-footer__brokerage-credit`

---

## Known Technical Debt

- **`--de-shadow-agent` uses `rgba(7,21,37,0.16)`** — this is `--de-navy-ink` (`#071525`) at 16% opacity. CSS cannot reference a hex token inside `rgba()` without relative color syntax (`rgb(from var(--de-navy-ink) r g b / 0.16)`), which has limited browser support. Leave as-is until relative color syntax is safe to use.
- **iframe height collapse** — `img/video/iframe/embed` have `height: auto`. Any fixed-ratio embed (YouTube, Vimeo) without an aspect-ratio wrapper collapses to 0px. Fix at first embed addition with `aspect-ratio: 16/9` or `.de-embed-wrapper { position: relative; padding-bottom: 56.25% }`. Do not add preemptively.
