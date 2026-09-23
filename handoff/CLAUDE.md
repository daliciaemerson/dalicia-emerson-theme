# Handoff CLAUDE.md — Dalicia Emerson Theme (Post-Audit)
**style.css version at handoff:** 2.8.8  
**Work orders completed:** WO-01 · WO-04 · WO-05 · WO-06  
**Repo:** `daliciaemerson/dalicia-emerson-theme` → deploys via GitHub Actions push to `main`

---

## Workflow

```
Claude Design  →  Claude Code  →  This chat (implementation)
(visual concepts)  (component spec)  (style.css + PHP partials)
```

Claude Design produces visual direction and layout decisions.  
Claude Code translates those into component specs and prop contracts.  
This chat applies them: writes `style.css`, edits PHP partials, commits, pushes.

---

## §1 — Final Token Names (WO-01)

All tokens live in a single `:root` block in `style.css`. No other file declares `--de-*` properties.

### Brand colors
| Token | Hex | Notes |
|---|---|---|
| `--de-navy` | `#1a2b4a` | Primary brand navy |
| `--de-navy-deep` | `#111e35` | Hero bg fallback |
| `--de-navy-ink` | `#1c1c1e` | ⚠ Currently self-referencing bug in style.css — correct value shown here |
| `--de-black` | `#0a0a0a` | Near-black, rarely used |
| `--de-gold` | `#c9a84c` | Primary gold |
| `--de-gold-light` | `#e8c97a` | Stat values on dark; `.de-btn--text` on dark sections; city card hover |
| `--de-gold-warm` | `#d4af5a` | Article rules, list left borders, relocation headings **only** |
| `--de-gold-faint` | `rgba(201,168,76,0.12)` | Hover fills, subtle backgrounds |
| `--de-accent-hover` | `var(--de-gold-light)` | Button hover alias |
| `--de-white` | `#ffffff` | — |
| `--de-gray-light` | `#f5f5f3` | — |
| `--de-gray-warm` | `#f8f7f5` | ⚠ Currently self-referencing bug in style.css — correct value shown here |
| `--de-gray-mid` | `#8a8a8a` | — |
| `--de-gray-border` | `#e0e0dc` | Form field borders, dividers |
| `--de-border-light` | `#e8e8e4` | Footer dividers, card borders |

### Semantic aliases
| Token | Value |
|---|---|
| `--de-text` | `#1a2b4a` |
| `--de-text-muted` | `#5a6a7a` |
| `--de-text-slate` | `#6b7280` |
| `--de-on-dark` | `rgba(255,255,255,0.92)` |
| `--de-on-dark-muted` | `rgba(255,255,255,0.78)` |
| `--de-overlay` | `rgba(26,43,74,0.58)` |

### Status tokens
| Token | Value |
|---|---|
| `--de-success-bg` | `#edfaf0` |
| `--de-success-text` | `#1a6630` |
| `--de-success-border` | `#9ddcaa` |
| `--de-error-bg` | `#fef2f2` |
| `--de-error-text` | `#991b1b` |
| `--de-error-border` | `#f5a5a5` |

### Focus ring tokens (added WO-06)
| Token | Value |
|---|---|
| `--de-focus-ring-color` | `var(--de-navy)` |
| `--de-focus-ring-color-on-dark` | `var(--de-gold-light)` |
| `--de-focus-ring` | `0 0 0 2px var(--de-white), 0 0 0 4px var(--de-focus-ring-color)` |

Dark sections (`.de-social-proof`, `.de-footer`, `.de-hero`, `.de-trust-bar`) override `--de-focus-ring-color` to `var(--de-focus-ring-color-on-dark)` via a scoped rule immediately after `:root`.

### Gold contrast rule
`--de-gold` (#c9a84c) on white fails WCAG AA (2.28:1). It is **only safe on navy** (6.18:1 pass).  
Never use `color: var(--de-gold)` on a white or light background. Use `--de-gold` for decorative/non-text only (borders, icons, `::after` underlines, `text-decoration-color`).

---

## §2 — Type Scale (WO-01)

Use `rem` for all type sizes. Never use raw `px` for `font-size`.

| Token | Value | Approx |
|---|---|---|
| `--de-text-3xs` | `0.72rem` | ~11.5px |
| `--de-text-2xs` | `0.78rem` | ~12.5px |
| `--de-text-xs` | `0.85rem` | ~13.5px |
| `--de-text-sm` | `0.92rem` | ~15px |
| `--de-text-base` | `1rem` | 16px |
| `--de-text-lg` | `1.1rem` | ~18px |
| `--de-text-xl` | `1.35rem` | ~22px |
| `--de-h3` | `1.6rem` | ~25.6px |
| `--de-h2` | `clamp(1.9rem, 3vw, 2.4rem)` | — |
| `--de-h1` | `clamp(2.4rem, 5vw, 3.6rem)` | — |
| `--de-display` | `clamp(2.8rem, 6vw, 4.4rem)` | — |

---

## §3 — Spacing Scale (WO-01)

Use `px` values from the spacing scale. Do not use `rem` for spacing/margins/padding.

`--de-space-1: 4px` · `--de-space-2: 8px` · `--de-space-3: 12px` · `--de-space-4: 16px` · `--de-space-5: 24px` · `--de-space-6: 32px` · `--de-space-7: 48px` · `--de-space-8: 64px` · `--de-space-9: 96px` · `--de-gutter: 32px`

---

## §4 — Breakpoint System (WO-05)

One breakpoint. Mobile-first is not required, but every addition needs a 768px block.

```css
@media (max-width: 768px) { … }
```

Known responsive values set at ≤768px:
- `--de-header-h` overrides to `60px`
- Grid layouts collapse from multi-column to single-column
- Hero type sizes reduce via `clamp()` — no override needed for display/h1/h2
- Stats bar switches to 2-column or single-column wrapping layout

---

## §5 — Component Names (WO-04)

All CSS classes are prefixed `de-`. PHP `$args` props follow camelCase where multi-word.

### Buttons
| Class | Description |
|---|---|
| `de-btn` | Base — all buttons must include this |
| `de-btn--primary` | Navy fill, gold text/border |
| `de-btn--secondary` | Transparent/outline variant on light backgrounds |
| `de-btn--secondary--on-dark` | Outline variant on dark backgrounds |
| `de-btn--text` | Text-only link button — navy text + gold `text-decoration-color` underline (WO-06) |
| `de-btn--full` | Full-width block |
| `de-btn--lg` | Large size modifier |

### Button rules (WO-06 additions)
- `.de-btn--text` on light backgrounds: `color: var(--de-navy)`, `text-decoration-color: var(--de-gold)`. Hover: `text-decoration-color: var(--de-navy)`.
- `.de-btn--text` on dark sections: `color: var(--de-gold-light)` (scoped by `.de-social-proof` and `.de-footer`).
- All `:focus-visible` across all buttons: `outline: none; box-shadow: var(--de-focus-ring)`.

### Template partials (template-parts/)
| File | Key props |
|---|---|
| `agent-contact-card.php` | `cta` (bool, default true) |
| `contact-section.php` | `source`, `eyebrow`, `heading`, `paragraphs[]` |
| `credential-bar.php` | `items[]` ({icon, label}), `aria_label` |
| `lead-form.php` | `source` (default 'generic') |
| `stat-block.php` | `value`, `label`, `prefix`, `suffix`, `size`, `tone`, `boxed` |
| `stats-bar.php` | `items[]`, `aria_label`, `contained`, `tone`, `boxed`, `dividers`, `goldRule` |

### Page templates (page-templates/)
`home.php` · `about.php` · `city-page.php` · `contact.php` · `luxury-homes.php` · `relocation-hub.php` · `relocation-spoke.php` · `reviews.php` · `thank-you.php` · `walmart-relocation.php`

---

## §6 — Accessibility State (Post WO-06)

All WCAG 2.1 AA issues addressed in WO-06:

| Issue | Resolution |
|---|---|
| Form label association | All inputs have matching `for`/`id` pairs |
| Required field markers | `aria-required="true"` + `required` attribute on name and email |
| Per-field error association | `aria-describedby="{form_id}-{field}-error"` → `<span role="alert">` |
| Input types | Email field uses `type="email"` |
| Button semantics | Submit is `<button type="submit">` |
| Focus rings on light backgrounds | Double-ring `box-shadow` using `--de-focus-ring` token (navy outer ring) |
| Focus rings on dark backgrounds | Scoped `--de-focus-ring-color` override → gold-light outer ring |
| `.de-btn--text` contrast on light | Navy text + gold underline; gold used as decoration only |
| City card hover contrast | `.de-card--city:hover .de-card--city__name` → `--de-gold-light` |
| Gold `::after` accent bars | Decorative — WCAG contrast requirement does not apply |

Known open issue: `role="alert"` + `aria-live="polite"` conflict on form error spans and status div. `role="alert"` implies assertive; explicit `polite` may be ignored. Not blocking — fix at next form audit.

---

## §7 — Authoring Rules

- `style.css` is the only source of truth. No Additional CSS in Customizer (empty).
- No hardcoded hex anywhere. Every color must reference a `--de-*` token.
- No new `:root` blocks outside `style.css`.
- No `!important` except the three grandfathered exceptions already in `style.css`.
- All CSS classes prefixed `de-`.
- Bump `style.css` version header on every non-trivial CSS commit.
- Deploy via `git push origin main` — GitHub Actions → WP Engine. No SFTP.
