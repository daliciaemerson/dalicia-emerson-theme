-- ============================================================
-- Fix Primary Nav Menu Item Labels
-- Run in: WP Engine phpMyAdmin → SQL tab
--
-- Updates the display label (post_title) for nav_menu_item
-- posts. Only affects nav menu items, not the pages themselves.
-- Safe to re-run — UPDATE is idempotent.
-- ============================================================


UPDATE wp_posts
SET post_title = 'Home'
WHERE post_type  = 'nav_menu_item'
  AND post_title = 'Moving to Northwest Arkansas — Your Complete Relocation Guide';

UPDATE wp_posts
SET post_title = 'Luxury Homes'
WHERE post_type  = 'nav_menu_item'
  AND post_title = 'Luxury Homes Northwest Arkansas';

UPDATE wp_posts
SET post_title = 'Walmart Relocation'
WHERE post_type  = 'nav_menu_item'
  AND post_title = 'Walmart Supplier Relocation NWA';

UPDATE wp_posts
SET post_title = 'About'
WHERE post_type  = 'nav_menu_item'
  AND post_title = 'About Dalicia Emerson';

UPDATE wp_posts
SET post_title = 'Contact'
WHERE post_type  = 'nav_menu_item'
  AND post_title = 'Contact Dalicia Emerson';


-- ── Verify — should show all 5 updated labels ────────────────

SELECT ID, post_title
FROM wp_posts
WHERE post_type = 'nav_menu_item'
  AND post_title IN ('Home','Luxury Homes','Walmart Relocation','About','Contact')
ORDER BY post_title;
