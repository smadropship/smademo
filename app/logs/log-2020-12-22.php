<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-22 14:04:59 --> Query error: Unknown column 'si.warehouse_id' in 'where clause' - Invalid query: SELECT sma_products.code, sma_products.name, CONCAT(COALESCE( PCosts.purchasedQty, 0 ), '__', COALESCE( PCosts.totalPurchase, 0 )) as purchased, CONCAT(COALESCE( PSales.soldQty, 0 ), '__', COALESCE( PSales.totalSale, 0 )) as sold, (COALESCE( PSales.totalSale, 0 ) - COALESCE( PCosts.totalPurchase, 0 )) as Profit, CONCAT(COALESCE( PCosts.balacneQty, 0 ), '__', COALESCE( PCosts.balacneValue, 0 )) as balance, sma_products.id as id
FROM `sma_products`
LEFT JOIN ( SELECT si.product_id, s.date as date, s.created_by as created_by, SUM( si.quantity ) soldQty, SUM( si.quantity * si.sale_unit_price ) totalSale from sma_costing si JOIN sma_sales s on s.id = si.sale_id  WHERE  si.warehouse_id = '1'  GROUP BY si.product_id ) PSales ON `sma_products`.`id` = `PSales`.`product_id`
LEFT JOIN ( SELECT product_id, p.date as date, p.created_by as created_by, SUM(CASE WHEN pi.purchase_id IS NOT NULL THEN quantity ELSE 0 END) as purchasedQty, SUM(quantity_balance) as balacneQty, SUM( unit_cost * quantity_balance ) balacneValue, SUM( (CASE WHEN pi.purchase_id IS NOT NULL THEN (pi.subtotal) ELSE 0 END) ) totalPurchase from sma_purchase_items pi LEFT JOIN sma_purchases p on p.id = pi.purchase_id WHERE pi.status = 'received'  AND pi.warehouse_id = '1'  GROUP BY pi.product_id ) PCosts ON `sma_products`.`id` = `PCosts`.`product_id`
WHERE `sma_products`.`type` = 'standard'
GROUP BY `sma_products`.`code`
ORDER BY `sold` DESC, `purchased` DESC
 LIMIT 10
