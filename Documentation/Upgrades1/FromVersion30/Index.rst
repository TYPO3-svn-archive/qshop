.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _upgrades-1-from-version-30:

From version < 3.0
------------------

Quick Shop 3.0 has two important innovations:

#. Quick Shop 3.0 supports Powermail 1.x and 2.x
#. Quick Shop 3.0 is using the TYPO3 shopping cart Caddy.

The easiest way of an update is:

- Update your extensions. Powermail 2.x is recommended but not obligated.
- Install quick shop with the quick shop installer.
- Replace your previous cart page [#ftn5]_ with the new installed caddy page.
- Adapt TypoScript, the configuration of the plugins caddy and powermail to your needs.

See details below.

.. toctree::
    :maxdepth: 2
    :titlesonly:

    Workflow2/Index
    ThisPropertiesAreChanged/Index


.. [#ftn5] It contains the wt_cart plugin and the powermail plugin.