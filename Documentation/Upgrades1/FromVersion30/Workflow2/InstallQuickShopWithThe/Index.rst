.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _upgrades-1-from-version-30-workflow-2-install-quick-shop-with-the:

Install Quick Shop with the Quick Shop Installer
""""""""""""""""""""""""""""""""""""""""""""""""

TIP: If you like a more detailed manual, please use the manual of the quick shop installer.

- Install Quick Shop with the Quick Shop Installer 3.x.
- Create the installer page by the extension manager. See: tab [Configuration].
- Move the installer page from the top level into your page tree.
- Configure the installer plugin:

  - Tab [Plugin]

    - Installation: [Quick Shop only]
    - Choose the preferred backend user
    - Add the e-mail of the shop owner.

- Call the installer page in the frontend.
- Install Quick Shop.
- Reload your page tree in the backend.
- If your previous caddy and your new caddy have the same page label, please redefine the label of
  your pervious caddy like "Caddy" -> "Caddy old" or "Warenkorb" -> "Warenkorb alt"
- Move the new caddy page near the previous caddy page.
- Maintain the list of included TypoScript templates at the page, where you have configured Quick
  Shop in main. [#ftn7]_ This should be the list of the included templates [#ftn8]_:

  - ...
  - Browser (browser)
  - Quick Shop – Basic Template (base_quickshop) [#ftn9]_
  - Quick Shop (quick_shop)
  - Caddy (caddy)
  - +Caddy CSS (caddy) [#ftn10]_
  - +Caddy Quick Shop (quick_shop)
  - ...

- Maintain page ids on the current page with the TypoScript Constant Editor:

  - Web Modul > Template
  - Page tree: your page
  - Edit area: Constant Editor [CADDY – PAGES]

    - Caddy: Uid of the page with the caddy - your shopping cart. TIP: Don't use the uid of your
      "Caddy old" or "Warenkorb alt"



    - Caddy mini: Uid of the page with the caddy mini - the cart for marginal column. TIP: Don't use
      the uid of your Caddy Mini in your "Caddy old" or "Warenkorb alt"
    - Shop: Uid of the page which contains the items. Usually the root page. TIP: Use the uid of
      your previous shop page, don't use the uid of the new installed page.
    - Power of Revocation: Uid of the page with the revocation info (German: Widerrufsbelehrung)
      TIP: Use the uid of your previous page with power of revocation, if you have this page.
    - Terms & Conditions: Uid of the page with the terms & conditions (German: AGB) TIP: Use the uid
      of your previous term & conditions page, don't use the uid of the new installed page.

  - Edit area: Constant Editor [QUICK SHOP – PAGES]

    - Shop / root page: Uid of the page which contains the quick shop items. Usually the root page.
      TIP: Use the uid of your previous shop page, don't use the uid of the new installed page.
    - Caddy: Uid of the page with the caddy - your shopping cart TIP: Don't use the uid of your
      "Caddy old" or "Warenkorb alt"
    - Shipping: Uid of the page with the shipping terms TIP: Use the uid of your previous page with
      power of revocation, if you have this page.

- Update your Browser Plugin at the page, where you are offering your shop (Quick Shop). [#ftn11]_
  The HTML template is moved. You will get an error prompt in the Frontend.

  - Browser Plugin/Flexform > [Plug-In] > [Templating] Field: HTML-Template: [Browser: Main
    (browser)]

- Update the Powermail plugin in the Caddy page: Copy and paste the content of your text file into
  the Powermail plugin.

  - BE AWARE: Powermail 2.x is using fluid marker instead of hash marker. Take care of these marker.
    Caddy won't run proper without some of this marker. TIP: After configuration the Caddy plugin
    will check, if your marker are proper.
  - These were the tabs for paste your data:

    - [Sender] [#ftn12]_
    - [Receiver] [#ftn13]_ and
    - [Submit page]

- Update links in the Powermail plugin in the Caddy page:

  - Fields: "Terms & Conditions" (or in German "AGB")
  - Fields: "Power of Revocation" (or in German "Wiederrufsbelehrung")

- Update label in the Powermail plugin in the Caddy page:

  - Fields: "Terms & Conditions" (or in German "AGB")
  - Fields: "Power of Revocation" (or in German "Wiederrufsbelehrung")
  - Fields: "Test Quick Shop" (the submit Button) [#ftn14]_

- Remove not needed pages

  - The new installed pages:

    - Quick Shop

      - Shipping
      - Power of Revocation
      - Items

  - The previous pages

    - Shopping cart old (Warenkorb alt)

- Use the Recycler for clean up your database: Web > Recycler

  - Remove your "removed" pages finally [#ftn15]_

That was a lot of stuff!

.. -- FOOTNOTES GO HERE --

.. [#ftn7] This is often the root page.

.. [#ftn8] Take care of the order.

.. [#ftn9] If you are using The Quick Shop Basic Template.

.. [#ftn10] If you like to use the default Caddy CSS.

.. [#ftn11] This is often the root page.

.. [#ftn12] Customer

.. [#ftn13] Shop owner

.. [#ftn14] If your items aren't for free, the label of the button must be contain something like "with costs"

.. [#ftn15] Without a final removing you will get unproper results in context with relations (in the backend
   only). Background: A simple removing marks your pages as deleted only. And MM relations doesn't have
   this property. MM relations won't deleted till local records and foreign records are removed
   finally. 