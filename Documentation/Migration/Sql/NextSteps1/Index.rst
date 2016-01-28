.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _migration-sql-next-steps-1:

Next Steps
^^^^^^^^^^

Please check, if relations are migrated proper.

If the migration is successful, you can remove the tables:

- tx_quickshop_products_category_mm
- tx_quickshop_products_dimension_mm
- tx_quickshop_products_material_mm

You can use

- Modul: System > Install > Important actions > Database analyzer
- Button [Compare current database with specification]
