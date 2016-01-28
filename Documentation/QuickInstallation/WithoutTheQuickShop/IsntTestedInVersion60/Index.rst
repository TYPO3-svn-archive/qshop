.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _quick-installation-without-the-quick-shop-isnt-tested-in-version-60:

Isn't tested in version 6.0!
^^^^^^^^^^^^^^^^^^^^^^^^^^^^

- Install the extensions browser, caddy and powermail.
- Add two pages "shop" and "caddy" and the sysfolder "items".
- Add to the sysfolder "items" some products or items.
- Add to the page "shop"

  - a template

    - Include the "browser" template
    - Include the "quick shop" template

  - the plugin "browser"

    - Link the startingpoint to the folder with the items

  - Configure TypoScript

- Add to the page "caddy"

  - a template and include the "caddy" templates
  - the plugin "caddy"
  - the plugin "powermail" and configure it (sorry, this isn't documented below)
  - configure TypoScript
  - add powermail fieldsets and fields (sorry, this isn't documented below)
