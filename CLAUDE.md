# Theme rules — Dalicia Emerson (kadence-child)

Theme lives at `/Users/dalicia/kadence-child/`. Deploy via GitHub Actions push to `main`.
Live at `daliciaemerson.wpengine.com` (temp) → `daliciaemerson.com` (DNS flip pending).

---

## §1 — Color tokens (canonical `:root`)

`style.css` is the **single source of truth** for all CSS custom properties.
No other file may declare a `:root` block or a `--de-*` custom property.

```css
:root {
  /* ── Brand colors ─────────────────────────────────────────────── */
  --de-navy:         #1a2b4a;
  --de-navy-deep:    #111e35;
  --de-navy-ink:     #1c1c1e;
  --de-black:        #0a0a0a;

  --de-gold:         #c9a84c;   /* primary gold — buttons, icons, accents */
  --de-gold-light:   #e8c97a;   /* lighter gold — stat numbers on dark bg */
  --de-gold-warm:    #d4af5a;   /* restricted — article rules, left borders, relocation headings ONLY */
  --de-gold-faint:   rgba(201, 168, 76, 0.12);

  --de-white:        #ffffff;
  --de-gray-light:   #f5f5f3;
  --de-gray-warm:    #f8f7f5;
  --de-gray-mid:     #8a8a8a;
  --de-gray-border:  #e0e0dc;
  --de-border-light: #e8e8e4;

  /* ── Semantic aliases ──────────────────────────────────────────── */
  --de-text:          #1a2b4a;
  --de-text-muted:    #5a6a7a;
  --de-text-slate:    #6b7280;
  --de-on-dark:       rgba(255, 255, 255, 0.92);
  --de-on-dark-muted: rgba(255, 255, 255, 0.78);
  --de-overlay:       rgba(26, 43, 74, 0.58);

  /* ── Typography ────────────────────────────────────────────────── */
  --de-font-serif: 'Playfair Display', Georgia, serif;
  --de-font-sans:  'Inter', 'Helvetica Neue', Arial, sans-serif;

  /* ── §2 Type scale ─────────────────────────────────────────────── */
  --de-text-3xs:  0.72rem;    /* ~11.5px — micro labels, sub-text, legal */
  --de-text-2xs:  0.78rem;    /* 12.5px  — credentials, bottom bar */
  --de-text-xs:   0.85rem;    /* 13.5px  — secondary labels, small body */
  --de-text-sm:   0.92rem;    /* ~15px   — nav, body-small, links */
  --de-text-base: 1rem;       /* 16px    — body copy */
  --de-text-lg:   1.1rem;     /* ~18px   — lead text, larger body */
  --de-text-xl:   1.35rem;    /* ~22px   — sub-headings, card titles */
  --de-h3:        1.6rem;     /* 25.6px  — section sub-heads */
  --de-h2:        clamp(1.9rem, 3vw, 2.4rem);   /* responsive section heads */
  --de-h1:        clamp(2.4rem, 5vw, 3.6rem);   /* responsive page heads */
  --de-display:   clamp(2.8rem, 6vw, 4.4rem);   /* hero/stat numbers */

  /* ── §3 Spacing scale ──────────────────────────────────────────── */
  --de-space-1:  4px;
  --de-space-2:  8px;
  --de-space-3:  12px;
  --de-space-4:  16px;
  --de-space-5:  20px;
  --de-space-6:  24px;
  --de-space-8:  32px;
  --de-space-10: 40px;
  --de-space-12: 48px;
  --de-space-16: 64px;
  --de-space-20: 80px;

  /* ── Layout ────────────────────────────────────────────────────── */
  --de-max-width: 1200px;
  --de-header-h:  110px;

  /* ── Border radius ─────────────────────────────────────────────── */
  --de-radius:    4px;
  --de-radius-lg: 8px;
  --de-radius-xl: 12px;
  --de-radius-2xl: 20px;

  /* ── Shadows ───────────────────────────────────────────────────── */
  --de-shadow-card:  0 2px 12px rgba(26, 43, 74, 0.08);
  --de-shadow-agent: 0 14px 36px rgba(7, 21, 37, 0.16);

  /* ── Motion ────────────────────────────────────────────────────── */
  --de-transition: 0.22s ease;
  --de-ease:       cubic-bezier(0.4, 0, 0.2, 1);

  /* ── Typography utilities ──────────────────────────────────────── */
  --de-track-toc:   0.14em;
  --de-track-label: 0.08em;
  --de-weight-bold: 700;

  /* ── Gradients ─────────────────────────────────────────────────── */
  --de-navy-grad: linear-gradient(135deg, #1a2744 0%, #2c3e6b 100%);

  /* ── Composites ────────────────────────────────────────────────── */
  --de-border-gold: 1px solid var(--de-gold);
}
```

### Gold rules

| Token | Hex | Legal uses |
|---|---|---|
| `--de-gold` | `#c9a84c` | Buttons, icons, borders, text accents, `color:` anywhere |
| `--de-gold-light` | `#e8c97a` | Stat numbers and headings on dark (navy/black) backgrounds only |
| `--de-gold-warm` | `#d4af5a` | Article horizontal rules (`border-bottom`), list left borders, relocation page section headings — nowhere else |
| `--de-gold-faint` | `rgba(201,168,76,0.12)` | Subtle backgrounds and hover fills |

Using `--de-gold-warm` on a `color:` property or a fill (`background:`) is a bug — use `--de-gold` instead.

---

## §4 — Authoring rules

### Token hygiene
- **No hardcoded hex colors.** Every color must reference a `--de-*` token.
- **No new `:root` blocks.** Add tokens to the existing block in `style.css`; open a PR note if you need a new token.
- **No inline `style="color:#…"` in PHP templates.** Add a CSS class instead.
- If a value does not map cleanly to an existing token, flag it in the PR rather than silently adding a new token.

### CSS authoring
- All classes prefixed `de-`.
- No `!important` except the three grandfathered ones (~line 969, ~982, ~1928 in style.css) — those go away in work order 02.
- Use `rem` for type. Use `px` for borders, radii, and spacing tokens. The spacing scale vars are already in `px`.
- Mobile-first is not required, but all additions need a `@media (max-width: 768px)` block.

### File roles
| File | Role |
|---|---|
| `style.css` | All CSS. Single source of truth for tokens. No Additional CSS in Customizer. |
| `header.php` | Header markup + inline critical CSS (nav flash prevention only — no `:root`). |
| `functions.php` | Enqueues, shortcodes, agent constants. No inline `wp_add_inline_style` with `:root`. |
| `page-templates/*.php` | Full-page templates registered via `Template Name:` comment. |
| `template-parts/*.php` | Reusable partials (agent card, lead form). |
| `content/*.php` | Long-form content partials (relocation hub body, etc.). |

### Deploy
Push to `main` → GitHub Actions → WP Engine. No manual SFTP.
Version bump `style.css` header on every non-trivial CSS commit.

### Agent constants (never hardcode in templates)
Use the PHP constants defined in `functions.php`:
`DE_AGENT_NAME`, `DE_BROKERAGE`, `DE_LICENSE`, `DE_PHONE`, `DE_EMAIL`, `DE_HEADSHOT_URL`
