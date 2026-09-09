# Work order 04 — Extract repeated blocks into partials

**Repo:** `daliciaemerson/dalicia-emerson-theme` (branch `main`)
**Files touched:** `template-parts/` (new files), `page-templates/*.php`, `style.css`
**Prerequisite:** Work orders 01–03 merged. Tokens, type and spacing settled.
**Commits:** four, in the order below.

Three blocks appear repeatedly under different class names, each styled from scratch
each time. Each becomes one partial with one style block. Rule from `CLAUDE.md` §5:
a pattern appearing twice becomes a partial.

---

## Commit 1 — CredentialBar and StatsBar extraction (DONE — ab19a36)

Created:
- template-parts/credential-bar.php — carries claims/credentials (checkmarks + text)
- template-parts/stats-bar.php — carries data (numbers + labels)

Canonical classes: .de-credential-bar, .de-stats-bar

Design rulings applied:
- Stat numerals: 1.8rem fixed (StatBlock md). Not a scale token. Not a clamp.
- StatsBar background: flat --de-navy. Gradient is CredentialBar's surface.
- StatsBar gets a `dividers` prop for between-item dividers (about.php case).
- --de-trust-bar-gradient renamed to --de-navy-grad.

---

## Commit 2 — Stat block partial (DONE — a04fb76)

Created template-parts/stat-block.php. Accepts value, label, prefix, suffix, size (sm/md/lg).
City-page.php migrated. stats-bar.php delegates to stat-block.

Flagged — pending ruling:
- about.php .de-about-stat — different container model. StatsBar dividers prop resolves this.
- content/relocation-hub.php .de-stat-callout — ruling pending from Claude Design.

---

## Commit 3 — Card class collision fix

IMPORTANT: Do NOT unify de-city-card and de-employer-card. They are different components.

The job here is a rename to fix the class collision:
- .de-city-card in home.php (bg-image cards, dynamic loop) — rename to .de-card--city
- .de-city-card in luxury-homes.php (article/schema cards) — rename to .de-card--place
- .de-employer-card in walmart-relocation.php (4 static cards) — stays, no extraction needed

Update CSS class names to match. Do not change markup structure or merge components.

Grep for old class names after and confirm zero hits.

**Commit message:** `widgets: fix city/employer card class collision`

---

## Commit 4 — Dead CSS prune

- Grep each removed class name across .php and .css
- Delete rules with zero markup references
- Delete docs/relocation-hub-draft.php (stale draft found in WO-04 audit)
- Do not delete anything uncertain — list it in report instead

**Commit message:** `css: remove rules orphaned by widget extraction`

---

## Verification before closing WO-04

- Old class names return zero grep hits across the repo
- Every page that used a replaced block renders identically
- Partials render correctly when optional parameters are missing
- docs/relocation-hub-draft.php deleted

## What to report back

- .de-stat-callout ruling result and what was done
- about.php dividers prop implementation
- Any class name that could not map cleanly to the new names
- Rules suspected dead but not deleted
