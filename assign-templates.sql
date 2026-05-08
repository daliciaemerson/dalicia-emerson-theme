-- ============================================================
-- Assign Page Templates — daliciaemerson.wpengine.com
-- Run in: WP Engine phpMyAdmin → SQL tab
--
-- Sets _wp_page_template meta for each page by slug.
-- Safe to re-run — deletes existing values first.
-- ============================================================


-- ── Step 1: Remove existing template assignments ─────────────

DELETE pm FROM wp_postmeta pm
INNER JOIN wp_posts p ON pm.post_id = p.ID
WHERE p.post_type = 'page'
  AND p.post_name IN (
    'bentonville-ar-real-estate',
    'rogers-ar-real-estate',
    'fayetteville-ar-real-estate',
    'springdale-ar-real-estate',
    'bella-vista-ar-real-estate',
    'lowell-ar-real-estate',
    'siloam-springs-ar-real-estate',
    'eureka-springs-ar-real-estate',
    'walmart-supplier-relocation-nwa',
    'luxury-homes-northwest-arkansas',
    'contact'
  )
  AND pm.meta_key = '_wp_page_template';


-- ── Step 2: Assign templates ─────────────────────────────────

INSERT INTO wp_postmeta (post_id, meta_key, meta_value)

-- City pages
SELECT ID, '_wp_page_template', 'page-templates/city-page.php'         FROM wp_posts WHERE post_name = 'bentonville-ar-real-estate'       AND post_type = 'page' UNION ALL
SELECT ID, '_wp_page_template', 'page-templates/city-page.php'         FROM wp_posts WHERE post_name = 'rogers-ar-real-estate'            AND post_type = 'page' UNION ALL
SELECT ID, '_wp_page_template', 'page-templates/city-page.php'         FROM wp_posts WHERE post_name = 'fayetteville-ar-real-estate'      AND post_type = 'page' UNION ALL
SELECT ID, '_wp_page_template', 'page-templates/city-page.php'         FROM wp_posts WHERE post_name = 'springdale-ar-real-estate'        AND post_type = 'page' UNION ALL
SELECT ID, '_wp_page_template', 'page-templates/city-page.php'         FROM wp_posts WHERE post_name = 'bella-vista-ar-real-estate'       AND post_type = 'page' UNION ALL
SELECT ID, '_wp_page_template', 'page-templates/city-page.php'         FROM wp_posts WHERE post_name = 'lowell-ar-real-estate'            AND post_type = 'page' UNION ALL
SELECT ID, '_wp_page_template', 'page-templates/city-page.php'         FROM wp_posts WHERE post_name = 'siloam-springs-ar-real-estate'    AND post_type = 'page' UNION ALL
SELECT ID, '_wp_page_template', 'page-templates/city-page.php'         FROM wp_posts WHERE post_name = 'eureka-springs-ar-real-estate'    AND post_type = 'page' UNION ALL

-- Other templates
SELECT ID, '_wp_page_template', 'page-templates/walmart-relocation.php' FROM wp_posts WHERE post_name = 'walmart-supplier-relocation-nwa'  AND post_type = 'page' UNION ALL
SELECT ID, '_wp_page_template', 'page-templates/luxury-homes.php'       FROM wp_posts WHERE post_name = 'luxury-homes-northwest-arkansas'  AND post_type = 'page' UNION ALL
SELECT ID, '_wp_page_template', 'page-templates/contact.php'            FROM wp_posts WHERE post_name = 'contact'                          AND post_type = 'page';


-- ── Step 3: Verify — should return 11 rows ───────────────────

SELECT p.post_title, p.post_name, pm.meta_value AS template
FROM wp_postmeta pm
INNER JOIN wp_posts p ON pm.post_id = p.ID
WHERE pm.meta_key = '_wp_page_template'
  AND p.post_type = 'page'
ORDER BY pm.meta_value, p.post_title;
