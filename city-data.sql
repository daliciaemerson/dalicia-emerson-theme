-- ============================================================
-- City Page Meta Data — daliciaemerson.wpengine.com
-- Run in: WP Engine phpMyAdmin → SQL tab
--
-- BEFORE RUNNING:
--   1. Verify your table prefix below (default: wp_)
--      Check it: SELECT option_value FROM wp_options
--                WHERE option_name = 'db_prefix' LIMIT 1;
--   2. This script is safe to re-run — it deletes existing
--      values first to avoid duplicates.
--
-- Meta keys match city-page.php:
--   _de_city_name, _de_city_population, _de_city_median_price
-- ============================================================


-- ── Step 1: Remove any existing values (idempotent) ─────────

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
    'eureka-springs-ar-real-estate'
  )
  AND pm.meta_key IN (
    '_de_city_name',
    '_de_city_population',
    '_de_city_median_price'
  );


-- ── Step 2: Insert all city meta ────────────────────────────

INSERT INTO wp_postmeta (post_id, meta_key, meta_value)

-- Bentonville
SELECT ID, '_de_city_name',         'Bentonville'  FROM wp_posts WHERE post_name = 'bentonville-ar-real-estate'   AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_population',   '58,000'       FROM wp_posts WHERE post_name = 'bentonville-ar-real-estate'   AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_median_price', '$449,000'     FROM wp_posts WHERE post_name = 'bentonville-ar-real-estate'   AND post_type = 'page' UNION ALL

-- Rogers
SELECT ID, '_de_city_name',         'Rogers'       FROM wp_posts WHERE post_name = 'rogers-ar-real-estate'        AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_population',   '72,000'       FROM wp_posts WHERE post_name = 'rogers-ar-real-estate'        AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_median_price', '$382,000'     FROM wp_posts WHERE post_name = 'rogers-ar-real-estate'        AND post_type = 'page' UNION ALL

-- Fayetteville
SELECT ID, '_de_city_name',         'Fayetteville' FROM wp_posts WHERE post_name = 'fayetteville-ar-real-estate'  AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_population',   '99,000'       FROM wp_posts WHERE post_name = 'fayetteville-ar-real-estate'  AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_median_price', '$399,000'     FROM wp_posts WHERE post_name = 'fayetteville-ar-real-estate'  AND post_type = 'page' UNION ALL

-- Springdale
SELECT ID, '_de_city_name',         'Springdale'   FROM wp_posts WHERE post_name = 'springdale-ar-real-estate'    AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_population',   '85,000'       FROM wp_posts WHERE post_name = 'springdale-ar-real-estate'    AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_median_price', '$310,000'     FROM wp_posts WHERE post_name = 'springdale-ar-real-estate'    AND post_type = 'page' UNION ALL

-- Bella Vista
SELECT ID, '_de_city_name',         'Bella Vista'  FROM wp_posts WHERE post_name = 'bella-vista-ar-real-estate'   AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_population',   '30,000'       FROM wp_posts WHERE post_name = 'bella-vista-ar-real-estate'   AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_median_price', '$285,000'     FROM wp_posts WHERE post_name = 'bella-vista-ar-real-estate'   AND post_type = 'page' UNION ALL

-- Lowell
SELECT ID, '_de_city_name',         'Lowell'       FROM wp_posts WHERE post_name = 'lowell-ar-real-estate'        AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_population',   '12,000'       FROM wp_posts WHERE post_name = 'lowell-ar-real-estate'        AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_median_price', '$295,000'     FROM wp_posts WHERE post_name = 'lowell-ar-real-estate'        AND post_type = 'page' UNION ALL

-- Siloam Springs
SELECT ID, '_de_city_name',         'Siloam Springs' FROM wp_posts WHERE post_name = 'siloam-springs-ar-real-estate' AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_population',   '17,000'         FROM wp_posts WHERE post_name = 'siloam-springs-ar-real-estate' AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_median_price', '$245,000'       FROM wp_posts WHERE post_name = 'siloam-springs-ar-real-estate' AND post_type = 'page' UNION ALL

-- Eureka Springs
SELECT ID, '_de_city_name',         'Eureka Springs' FROM wp_posts WHERE post_name = 'eureka-springs-ar-real-estate' AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_population',   '2,000'          FROM wp_posts WHERE post_name = 'eureka-springs-ar-real-estate' AND post_type = 'page' UNION ALL
SELECT ID, '_de_city_median_price', '$285,000'       FROM wp_posts WHERE post_name = 'eureka-springs-ar-real-estate' AND post_type = 'page';


-- ── Step 3: Verify — should return 24 rows ──────────────────

SELECT p.post_title, pm.meta_key, pm.meta_value
FROM wp_postmeta pm
INNER JOIN wp_posts p ON pm.post_id = p.ID
WHERE pm.meta_key IN ('_de_city_name', '_de_city_population', '_de_city_median_price')
  AND p.post_type = 'page'
ORDER BY p.post_title, pm.meta_key;
