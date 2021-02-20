<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-21 12:55:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY `sma_products`.`id`' at line 8 - Invalid query: SELECT sma_products.*, FWP.quantity as quantity, sma_categories.id as category_id, sma_categories.name as category_name
FROM `sma_products`
LEFT JOIN ( SELECT product_id, warehouse_id, quantity as quantity from sma_warehouses_products ) FWP ON `FWP`.`product_id`=`sma_products`.`id`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE (`sma_products`.`code` = 556135
AND (`sma_products`.`track_quantity` =0 OR `FWP`.`quantity` >0) AND `FWP`.`warehouse_id` = '1' AND (`sma_products`.`name` LIKE '%556135%' OR `sma_products`.`code` LIKE '%556135%' OR  concat(sma_products.name, ' (', sma_products.code, ')') LIKE '%556135%')
AND `hide_pos` != 1
GROUP BY `sma_products`.`id`
ERROR - 2020-11-21 12:55:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY `sma_products`.`id`' at line 8 - Invalid query: SELECT sma_products.*, FWP.quantity as quantity, sma_categories.id as category_id, sma_categories.name as category_name
FROM `sma_products`
LEFT JOIN ( SELECT product_id, warehouse_id, quantity as quantity from sma_warehouses_products ) FWP ON `FWP`.`product_id`=`sma_products`.`id`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE (`sma_products`.`code` = 556135
AND (`sma_products`.`track_quantity` =0 OR `FWP`.`quantity` >0) AND `FWP`.`warehouse_id` = '1' AND (`sma_products`.`name` LIKE '%556135%' OR `sma_products`.`code` LIKE '%556135%' OR  concat(sma_products.name, ' (', sma_products.code, ')') LIKE '%556135%')
AND `hide_pos` != 1
GROUP BY `sma_products`.`id`
ERROR - 2020-11-21 12:56:27 --> Query error: Column 'code' in where clause is ambiguous - Invalid query: SELECT sma_products.*, FWP.quantity as quantity, sma_categories.id as category_id, sma_categories.name as category_name
FROM `sma_products`
LEFT JOIN ( SELECT product_id, warehouse_id, quantity as quantity from sma_warehouses_products ) FWP ON `FWP`.`product_id`=`sma_products`.`id`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE `code` = '556135'
AND (`sma_products`.`track_quantity` =0 OR `FWP`.`quantity` >0) AND `FWP`.`warehouse_id` = '1' AND (`sma_products`.`name` LIKE '%556135%' OR `sma_products`.`code` LIKE '%556135%' OR  concat(sma_products.name, ' (', sma_products.code, ')') LIKE '%556135%')
AND `hide_pos` != 1
GROUP BY `sma_products`.`id`
ERROR - 2020-11-21 13:22:57 --> Severity: Notice --> Undefined index: strict /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 2413
ERROR - 2020-11-21 13:26:32 --> Severity: error --> Exception: Call to undefined method Site::getCompanyByCode() /Users/saleem/Sites/sma/app/libraries/Sma.php 63
