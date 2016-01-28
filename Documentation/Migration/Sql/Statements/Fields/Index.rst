.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _migration-sql-statements-fields:

Fields
""""""

The statements from below will rename some fields.

You can use the statements from below once only.

ALTER TABLE tx_quickshop_products CHANGE category tx_quickshop_categories INT( 11 ) NOT NULL DEFAULT
'0';

ALTER TABLE tx_quickshop_products CHANGE dimension tx_quickshop_dimension INT( 11 ) NOT NULL DEFAULT
'0';

ALTER TABLE tx_quickshop_products CHANGE material tx_quickshop_material INT( 11 ) NOT NULL DEFAULT
'0';
