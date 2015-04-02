TRUNCATE TABLE `tx_quickshop_mm`;

# Relation from tx_quickshop_products (local) to tx_quickshop_categories (foreign).
INSERT INTO tx_quickshop_mm (uid_local, uid_foreign, sorting, table_local, table_foreign)
SELECT uid_local, uid_foreign, sorting, 'tx_quickshop_products', 'tx_quickshop_categories' FROM tx_quickshop_products_category_mm;

# Relation from tx_quickshop_products (local) to tx_quickshop_dimension (foreign).
INSERT INTO tx_quickshop_mm (uid_local, uid_foreign, sorting, table_local, table_foreign)
SELECT uid_local, uid_foreign, sorting, 'tx_quickshop_products', 'tx_quickshop_dimension' FROM tx_quickshop_products_dimension_mm;

# Relation from tx_quickshop_products (local) to tx_quickshop_material (foreign).
INSERT INTO tx_quickshop_mm (uid_local, uid_foreign, sorting, table_local, table_foreign)
SELECT uid_local, uid_foreign, sorting, 'tx_quickshop_products', 'tx_quickshop_material' FROM tx_quickshop_products_material_mm;


ALTER TABLE tx_quickshop_products CHANGE category tx_quickshop_categories INT( 11 ) NOT NULL DEFAULT '0';
ALTER TABLE tx_quickshop_products CHANGE dimension tx_quickshop_dimension INT( 11 ) NOT NULL DEFAULT '0';
ALTER TABLE tx_quickshop_products CHANGE material tx_quickshop_material INT( 11 ) NOT NULL DEFAULT '0';