# WordPress Page Setup Guide
## daliciaemerson.com — Kadence Child Theme

**Site:** daliciaemerson.wpengine.com  
**Theme:** Dalicia Emerson (Kadence Child)  
**Last updated:** April 2026

---

## Prerequisites

Before creating pages:

1. **Activate the child theme** — WP Admin → Appearance → Themes → activate "Dalicia Emerson"
2. **Install RankMath SEO** — WP Admin → Plugins → Add New → search "Rank Math SEO" → install and activate
3. **Run RankMath setup wizard** — set business type to "Real Estate Agent", enter NAP (name/address/phone)
4. **Verify page templates exist** — WP Admin → Appearance → Editor should not be needed; templates load from the theme

---

## The 14 Pages

### How to create each page (manual method)

For every page below:

1. WP Admin → **Pages → Add New**
2. Enter the **Page Title**
3. In the URL field (below title), set the **Slug**
4. In the right sidebar under **Page Attributes**, select the **Template**
5. In the right sidebar under **RankMath SEO**, enter the **Focus Keyword**
6. Expand **Edit Snippet** in RankMath → paste the **Meta Title** and **Meta Description**
7. Click **Publish**

---

### GROUP 1 — Core Pages

---

#### Page 1: Home

| Field | Value |
|---|---|
| **Page Title** | Home |
| **Slug** | *(leave blank — set as static front page in step below)* |
| **Template** | Default Template |
| **Focus Keyword** | Northwest Arkansas real estate |
| **Meta Title** | Northwest Arkansas Real Estate \| Dalicia Emerson, Luxury REALTOR® |
| **Meta Description** | Search homes for sale in Northwest Arkansas with Dalicia Emerson, Coldwell Banker Global Luxury® REALTOR®. Serving Bentonville, Rogers, Fayetteville, Springdale & beyond. |

**After publishing:** Go to **Settings → Reading** → set "Your homepage displays" to "A static page" → select this page as Homepage.

**Content:** Paste the contents of `homepage-content.html` into a Custom HTML block, or build with Kadence blocks using that file as your copy reference.

---

#### Page 2: About

| Field | Value |
|---|---|
| **Page Title** | About Dalicia Emerson |
| **Slug** | `about` |
| **Template** | Default Template |
| **Focus Keyword** | Northwest Arkansas REALTOR |
| **Meta Title** | About Dalicia Emerson \| NWA Luxury REALTOR® \| Coldwell Banker |
| **Meta Description** | Meet Dalicia Emerson — Coldwell Banker Global Luxury® REALTOR® specializing in luxury home buying, selling, and relocation throughout Northwest Arkansas since 2017. |

---

#### Page 3: Contact

| Field | Value |
|---|---|
| **Page Title** | Contact Dalicia Emerson |
| **Slug** | `contact` |
| **Template** | Contact |
| **Focus Keyword** | NWA real estate agent contact |
| **Meta Title** | Contact Dalicia Emerson \| NWA REALTOR® \| (479) 422-3060 |
| **Meta Description** | Contact Dalicia Emerson, your Northwest Arkansas luxury real estate expert. Call (479) 422-3060, email, or send a message. Free buyer and seller consultations available. |

---

### GROUP 2 — SEO Cornerstone Pages

---

#### Page 4: Relocation Hub

| Field | Value |
|---|---|
| **Page Title** | Moving to Northwest Arkansas |
| **Slug** | `moving-to-northwest-arkansas` |
| **Template** | Relocation Hub |
| **Focus Keyword** | moving to Northwest Arkansas |
| **Meta Title** | Moving to Northwest Arkansas: Your Complete Relocation Guide \| Dalicia Emerson |
| **Meta Description** | Everything you need to know about moving to Northwest Arkansas — neighborhoods, cost of living, the Walmart supplier community, lifestyle, and how to find the right home. |

**Note:** This template auto-includes the 1,700-word content from `content/relocation-hub.php`. No additional body copy needed in the editor.

---

#### Page 5: Luxury Homes

| Field | Value |
|---|---|
| **Page Title** | Luxury Homes for Sale in Northwest Arkansas |
| **Slug** | `luxury-homes-northwest-arkansas` |
| **Template** | Luxury Homes |
| **Focus Keyword** | luxury homes Northwest Arkansas |
| **Meta Title** | Luxury Homes for Sale in Northwest Arkansas \| Dalicia Emerson, Coldwell Banker Global Luxury® |
| **Meta Description** | Browse luxury homes for sale in Bentonville, Rogers, Fayetteville & Bella Vista, AR. Dalicia Emerson is a Coldwell Banker Global Luxury®-certified REALTOR® serving NWA. |

---

#### Page 6: Walmart Supplier Relocation

| Field | Value |
|---|---|
| **Page Title** | Relocating to Bentonville for Walmart |
| **Slug** | `walmart-supplier-relocation-bentonville` |
| **Template** | Walmart Supplier Relocation |
| **Focus Keyword** | Walmart supplier relocation NWA |
| **Meta Title** | Walmart Supplier Relocation to Bentonville, AR \| Dalicia Emerson, REALTOR® |
| **Meta Description** | Relocating to Bentonville for Walmart or a supplier company? Dalicia Emerson specializes in fast, corporate relocation home searches throughout Northwest Arkansas. |

---

#### Page 7: Home Valuation

| Field | Value |
|---|---|
| **Page Title** | What's My NWA Home Worth? |
| **Slug** | `nwa-home-valuation` |
| **Template** | Default Template |
| **Focus Keyword** | NWA home value estimate |
| **Meta Title** | What's My NWA Home Worth? Free Home Valuation \| Dalicia Emerson |
| **Meta Description** | Get a free, professional home valuation for your Northwest Arkansas property. Dalicia Emerson provides expert comparative market analysis for NWA homeowners ready to sell. |

**Content note:** Embed the CB Estimate® tool widget here, or add a Gravity Forms lead-capture form with the hook "I'll personally review your home's value within 24 hours."

---

### GROUP 3 — City Pages

For every city page, after publishing:
- Open the page editor
- Find **City Page Settings** in the right sidebar
- Fill in **City Name**, **Approx. Population**, and **Median Home Price**

---

#### Page 8: Bentonville

| Field | Value |
|---|---|
| **Page Title** | Homes for Sale in Bentonville, AR |
| **Slug** | `bentonville-ar-homes-for-sale` |
| **Template** | City Page |
| **Focus Keyword** | homes for sale in Bentonville AR |
| **Meta Title** | Homes for Sale in Bentonville, AR \| Dalicia Emerson, REALTOR® |
| **Meta Description** | Search homes for sale in Bentonville, Arkansas — from starter homes to luxury estates near Crystal Bridges. Local expertise from Dalicia Emerson, NWA REALTOR®. |
| **City Name** | Bentonville |
| **Population** | 55,000 |
| **Median Price** | $485,000 |

---

#### Page 9: Rogers

| Field | Value |
|---|---|
| **Page Title** | Homes for Sale in Rogers, AR |
| **Slug** | `rogers-ar-homes-for-sale` |
| **Template** | City Page |
| **Focus Keyword** | homes for sale in Rogers AR |
| **Meta Title** | Homes for Sale in Rogers, AR \| Dalicia Emerson, REALTOR® |
| **Meta Description** | Search homes for sale in Rogers, Arkansas — Lake Leatherwood area, top-rated schools, and family-friendly neighborhoods. Find your Rogers home with Dalicia Emerson. |
| **City Name** | Rogers |
| **Population** | 70,000 |
| **Median Price** | $420,000 |

---

#### Page 10: Fayetteville

| Field | Value |
|---|---|
| **Page Title** | Homes for Sale in Fayetteville, AR |
| **Slug** | `fayetteville-ar-homes-for-sale` |
| **Template** | City Page |
| **Focus Keyword** | homes for sale in Fayetteville AR |
| **Meta Title** | Homes for Sale in Fayetteville, AR \| Dalicia Emerson, REALTOR® |
| **Meta Description** | Search homes for sale in Fayetteville, Arkansas — University of Arkansas area, Dickson Street corridor, and established neighborhoods. Expert guidance from Dalicia Emerson. |
| **City Name** | Fayetteville |
| **Population** | 95,000 |
| **Median Price** | $375,000 |

---

#### Page 11: Springdale

| Field | Value |
|---|---|
| **Page Title** | Homes for Sale in Springdale, AR |
| **Slug** | `springdale-ar-homes-for-sale` |
| **Template** | City Page |
| **Focus Keyword** | homes for sale in Springdale AR |
| **Meta Title** | Homes for Sale in Springdale, AR \| Dalicia Emerson, REALTOR® |
| **Meta Description** | Search homes for sale in Springdale, Arkansas — great value, diverse community, and the Murphy Arts District. Find affordable NWA living with Dalicia Emerson. |
| **City Name** | Springdale |
| **Population** | 85,000 |
| **Median Price** | $310,000 |

---

#### Page 12: Bella Vista

| Field | Value |
|---|---|
| **Page Title** | Homes for Sale in Bella Vista, AR |
| **Slug** | `bella-vista-ar-homes-for-sale` |
| **Template** | City Page |
| **Focus Keyword** | homes for sale in Bella Vista AR |
| **Meta Title** | Homes for Sale in Bella Vista, AR \| Dalicia Emerson, REALTOR® |
| **Meta Description** | Search homes for sale in Bella Vista, Arkansas — seven lakes, five golf courses, and Ozark trails. Perfect for retirees and outdoor enthusiasts. Dalicia Emerson, NWA REALTOR®. |
| **City Name** | Bella Vista |
| **Population** | 30,000 |
| **Median Price** | $285,000 |

---

#### Page 13: Lowell

| Field | Value |
|---|---|
| **Page Title** | Homes for Sale in Lowell, AR |
| **Slug** | `lowell-ar-homes-for-sale` |
| **Template** | City Page |
| **Focus Keyword** | homes for sale in Lowell AR |
| **Meta Title** | Homes for Sale in Lowell, AR \| Dalicia Emerson, REALTOR® |
| **Meta Description** | Search homes for sale in Lowell, Arkansas — conveniently located near J.B. Hunt HQ and the I-49 corridor. Affordable new construction and great NWA value. |
| **City Name** | Lowell |
| **Population** | 10,000 |
| **Median Price** | $295,000 |

---

#### Page 14: Siloam Springs

| Field | Value |
|---|---|
| **Page Title** | Homes for Sale in Siloam Springs, AR |
| **Slug** | `siloam-springs-ar-homes-for-sale` |
| **Template** | City Page |
| **Focus Keyword** | homes for sale in Siloam Springs AR |
| **Meta Title** | Homes for Sale in Siloam Springs, AR \| Dalicia Emerson, REALTOR® |
| **Meta Description** | Search homes for sale in Siloam Springs, Arkansas — small-town character, John Brown University, and affordable NWA living. Find your home with Dalicia Emerson. |
| **City Name** | Siloam Springs |
| **Population** | 17,000 |
| **Median Price** | $245,000 |

---

## WP-CLI Commands (Automated Setup)

Use these if WP Engine grants SSH access. Connect via:

```bash
ssh -i ~/.ssh/your-key git@daliciaemerson.ssh.wpengine.net
```

Or with WP Engine's SSH Gateway:

```bash
ssh daliciasftp@daliciaemerson.ssh.wpengine.net -p 22
```

Once connected, run the block below as a single script. Every page is created, meta is set, and city fields are populated in one pass.

```bash
#!/bin/bash
# daliciaemerson.com — WP-CLI page setup
# Run from: /sites/daliciaemerson/

WP="wp --path=/sites/daliciaemerson"

echo "=== Creating core pages ==="

# ── Page 1: Home ──────────────────────────────────────────────────────────────
HOME_ID=$($WP post create \
  --post_type=page \
  --post_title="Home" \
  --post_name="home" \
  --post_status=publish \
  --page_template="default" \
  --porcelain)

$WP post meta update $HOME_ID rank_math_focus_keyword "Northwest Arkansas real estate"
$WP post meta update $HOME_ID rank_math_title "Northwest Arkansas Real Estate | Dalicia Emerson, Luxury REALTOR®"
$WP post meta update $HOME_ID rank_math_description "Search homes for sale in Northwest Arkansas with Dalicia Emerson, Coldwell Banker Global Luxury® REALTOR®. Serving Bentonville, Rogers, Fayetteville, Springdale & beyond."

# Set as static front page
$WP option update show_on_front page
$WP option update page_on_front $HOME_ID
echo "Home page created (ID: $HOME_ID) and set as front page"

# ── Page 2: About ─────────────────────────────────────────────────────────────
ABOUT_ID=$($WP post create \
  --post_type=page \
  --post_title="About Dalicia Emerson" \
  --post_name="about" \
  --post_status=publish \
  --page_template="default" \
  --porcelain)

$WP post meta update $ABOUT_ID rank_math_focus_keyword "Northwest Arkansas REALTOR"
$WP post meta update $ABOUT_ID rank_math_title "About Dalicia Emerson | NWA Luxury REALTOR® | Coldwell Banker"
$WP post meta update $ABOUT_ID rank_math_description "Meet Dalicia Emerson — Coldwell Banker Global Luxury® REALTOR® specializing in luxury home buying, selling, and relocation throughout Northwest Arkansas since 2017."
echo "About page created (ID: $ABOUT_ID)"

# ── Page 3: Contact ───────────────────────────────────────────────────────────
CONTACT_ID=$($WP post create \
  --post_type=page \
  --post_title="Contact Dalicia Emerson" \
  --post_name="contact" \
  --post_status=publish \
  --page_template="page-templates/contact.php" \
  --porcelain)

$WP post meta update $CONTACT_ID rank_math_focus_keyword "NWA real estate agent contact"
$WP post meta update $CONTACT_ID rank_math_title "Contact Dalicia Emerson | NWA REALTOR® | (479) 422-3060"
$WP post meta update $CONTACT_ID rank_math_description "Contact Dalicia Emerson, your Northwest Arkansas luxury real estate expert. Call (479) 422-3060, email, or send a message. Free buyer and seller consultations available."
echo "Contact page created (ID: $CONTACT_ID)"

echo "=== Creating cornerstone SEO pages ==="

# ── Page 4: Relocation Hub ────────────────────────────────────────────────────
RELOCATION_ID=$($WP post create \
  --post_type=page \
  --post_title="Moving to Northwest Arkansas" \
  --post_name="moving-to-northwest-arkansas" \
  --post_status=publish \
  --page_template="page-templates/relocation-hub.php" \
  --porcelain)

$WP post meta update $RELOCATION_ID rank_math_focus_keyword "moving to Northwest Arkansas"
$WP post meta update $RELOCATION_ID rank_math_title "Moving to Northwest Arkansas: Your Complete Relocation Guide | Dalicia Emerson"
$WP post meta update $RELOCATION_ID rank_math_description "Everything you need to know about moving to Northwest Arkansas — neighborhoods, cost of living, the Walmart supplier community, lifestyle, and how to find the right home."
echo "Relocation Hub created (ID: $RELOCATION_ID)"

# ── Page 5: Luxury Homes ──────────────────────────────────────────────────────
LUXURY_ID=$($WP post create \
  --post_type=page \
  --post_title="Luxury Homes for Sale in Northwest Arkansas" \
  --post_name="luxury-homes-northwest-arkansas" \
  --post_status=publish \
  --page_template="page-templates/luxury-homes.php" \
  --porcelain)

$WP post meta update $LUXURY_ID rank_math_focus_keyword "luxury homes Northwest Arkansas"
$WP post meta update $LUXURY_ID rank_math_title "Luxury Homes for Sale in Northwest Arkansas | Dalicia Emerson, Coldwell Banker Global Luxury®"
$WP post meta update $LUXURY_ID rank_math_description "Browse luxury homes for sale in Bentonville, Rogers, Fayetteville & Bella Vista, AR. Dalicia Emerson is a Coldwell Banker Global Luxury®-certified REALTOR® serving NWA."
echo "Luxury Homes page created (ID: $LUXURY_ID)"

# ── Page 6: Walmart Relocation ────────────────────────────────────────────────
WALMART_ID=$($WP post create \
  --post_type=page \
  --post_title="Relocating to Bentonville for Walmart" \
  --post_name="walmart-supplier-relocation-bentonville" \
  --post_status=publish \
  --page_template="page-templates/walmart-relocation.php" \
  --porcelain)

$WP post meta update $WALMART_ID rank_math_focus_keyword "Walmart supplier relocation NWA"
$WP post meta update $WALMART_ID rank_math_title "Walmart Supplier Relocation to Bentonville, AR | Dalicia Emerson, REALTOR®"
$WP post meta update $WALMART_ID rank_math_description "Relocating to Bentonville for Walmart or a supplier company? Dalicia Emerson specializes in fast, corporate relocation home searches throughout Northwest Arkansas."
echo "Walmart Relocation page created (ID: $WALMART_ID)"

# ── Page 7: Home Valuation ────────────────────────────────────────────────────
VALUATION_ID=$($WP post create \
  --post_type=page \
  --post_title="What's My NWA Home Worth?" \
  --post_name="nwa-home-valuation" \
  --post_status=publish \
  --page_template="default" \
  --porcelain)

$WP post meta update $VALUATION_ID rank_math_focus_keyword "NWA home value estimate"
$WP post meta update $VALUATION_ID rank_math_title "What's My NWA Home Worth? Free Home Valuation | Dalicia Emerson"
$WP post meta update $VALUATION_ID rank_math_description "Get a free, professional home valuation for your Northwest Arkansas property. Dalicia Emerson provides expert comparative market analysis for NWA homeowners ready to sell."
echo "Home Valuation page created (ID: $VALUATION_ID)"

echo "=== Creating city pages ==="

# Helper function — creates a city page and sets all meta in one call
create_city_page() {
  local TITLE="$1"
  local SLUG="$2"
  local KEYWORD="$3"
  local META_TITLE="$4"
  local META_DESC="$5"
  local CITY_NAME="$6"
  local POPULATION="$7"
  local MEDIAN_PRICE="$8"

  local PAGE_ID=$($WP post create \
    --post_type=page \
    --post_title="$TITLE" \
    --post_name="$SLUG" \
    --post_status=publish \
    --page_template="page-templates/city-page.php" \
    --porcelain)

  $WP post meta update $PAGE_ID rank_math_focus_keyword "$KEYWORD"
  $WP post meta update $PAGE_ID rank_math_title "$META_TITLE"
  $WP post meta update $PAGE_ID rank_math_description "$META_DESC"
  $WP post meta update $PAGE_ID _de_city_name "$CITY_NAME"
  $WP post meta update $PAGE_ID _de_city_population "$POPULATION"
  $WP post meta update $PAGE_ID _de_city_median_price "$MEDIAN_PRICE"

  echo "$CITY_NAME page created (ID: $PAGE_ID)"
}

# ── Pages 8–14: City Pages ────────────────────────────────────────────────────

create_city_page \
  "Homes for Sale in Bentonville, AR" \
  "bentonville-ar-homes-for-sale" \
  "homes for sale in Bentonville AR" \
  "Homes for Sale in Bentonville, AR | Dalicia Emerson, REALTOR®" \
  "Search homes for sale in Bentonville, Arkansas — from starter homes to luxury estates near Crystal Bridges. Local expertise from Dalicia Emerson, NWA REALTOR®." \
  "Bentonville" "55,000" "\$485,000"

create_city_page \
  "Homes for Sale in Rogers, AR" \
  "rogers-ar-homes-for-sale" \
  "homes for sale in Rogers AR" \
  "Homes for Sale in Rogers, AR | Dalicia Emerson, REALTOR®" \
  "Search homes for sale in Rogers, Arkansas — Lake Leatherwood area, top-rated schools, and family-friendly neighborhoods. Find your Rogers home with Dalicia Emerson." \
  "Rogers" "70,000" "\$420,000"

create_city_page \
  "Homes for Sale in Fayetteville, AR" \
  "fayetteville-ar-homes-for-sale" \
  "homes for sale in Fayetteville AR" \
  "Homes for Sale in Fayetteville, AR | Dalicia Emerson, REALTOR®" \
  "Search homes for sale in Fayetteville, Arkansas — University of Arkansas area, Dickson Street corridor, and established neighborhoods. Expert guidance from Dalicia Emerson." \
  "Fayetteville" "95,000" "\$375,000"

create_city_page \
  "Homes for Sale in Springdale, AR" \
  "springdale-ar-homes-for-sale" \
  "homes for sale in Springdale AR" \
  "Homes for Sale in Springdale, AR | Dalicia Emerson, REALTOR®" \
  "Search homes for sale in Springdale, Arkansas — great value, diverse community, and the Murphy Arts District. Affordable NWA living with Dalicia Emerson." \
  "Springdale" "85,000" "\$310,000"

create_city_page \
  "Homes for Sale in Bella Vista, AR" \
  "bella-vista-ar-homes-for-sale" \
  "homes for sale in Bella Vista AR" \
  "Homes for Sale in Bella Vista, AR | Dalicia Emerson, REALTOR®" \
  "Search homes for sale in Bella Vista, Arkansas — seven lakes, five golf courses, and Ozark trails. Perfect for retirees and outdoor enthusiasts. Dalicia Emerson, NWA REALTOR®." \
  "Bella Vista" "30,000" "\$285,000"

create_city_page \
  "Homes for Sale in Lowell, AR" \
  "lowell-ar-homes-for-sale" \
  "homes for sale in Lowell AR" \
  "Homes for Sale in Lowell, AR | Dalicia Emerson, REALTOR®" \
  "Search homes for sale in Lowell, Arkansas — convenient I-49 location near J.B. Hunt HQ. Affordable new construction and great NWA value with Dalicia Emerson." \
  "Lowell" "10,000" "\$295,000"

create_city_page \
  "Homes for Sale in Siloam Springs, AR" \
  "siloam-springs-ar-homes-for-sale" \
  "homes for sale in Siloam Springs AR" \
  "Homes for Sale in Siloam Springs, AR | Dalicia Emerson, REALTOR®" \
  "Search homes for sale in Siloam Springs, Arkansas — small-town character, John Brown University, and affordable NWA living. Find your home with Dalicia Emerson." \
  "Siloam Springs" "17,000" "\$245,000"

echo ""
echo "=== All 14 pages created successfully ==="
$WP post list --post_type=page --post_status=publish --fields=ID,post_title,post_name
```

---

### Set up the blog (Posts) page — optional

If you add a blog later:

```bash
# Create a blank Posts page
BLOG_ID=$(wp post create \
  --post_type=page \
  --post_title="NWA Real Estate Blog" \
  --post_name="blog" \
  --post_status=publish \
  --porcelain)

wp option update page_for_posts $BLOG_ID
echo "Blog page created (ID: $BLOG_ID)"
```

---

## Post-Setup Checklist

After all pages are published, complete these steps:

### WordPress Admin

- [ ] **Settings → Reading** — confirm homepage is set to the static Home page
- [ ] **Settings → Permalinks** — set to "Post name" (`/%postname%/`) → Save Changes (flushes rewrite rules so templates register)
- [ ] **Appearance → Menus** — add Primary menu with: Home, About, Search Homes (IDX link), Luxury Homes, Relocating?, Contact
- [ ] **Kadence → Customizer** — upload logo, set brand colors (black background / white text / gold accent)

### RankMath

- [ ] **RankMath → General Settings → Breadcrumbs** — enable
- [ ] **RankMath → Sitemap** — enable XML sitemap, include all pages, submit URL to Google Search Console
- [ ] **RankMath → Local SEO** — enter business name, phone, address, hours
- [ ] **RankMath → Schema** — set default schema to "Local Business" → "Real Estate Agent"

### Google

- [ ] Submit sitemap at `daliciaemerson.com/sitemap_index.xml` to Google Search Console
- [ ] Claim and verify Google Business Profile at `business.google.com`
- [ ] Set GBP category to "Real Estate Agent" + secondary "Real Estate Agency"

### IDX (after hosting is configured)

- [ ] Install chosen IDX plugin (Showcase IDX recommended)
- [ ] Replace all `de-idx-placeholder` divs in city and luxury templates with plugin shortcodes
- [ ] Create `/search` page with full IDX search widget, set as "Search Homes" nav link
