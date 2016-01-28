.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _illustration-18-page-illustration-22-controlling-typoscript-1-pagecaddy003:

+page_caddy_003
"""""""""""""""

[General] Setup

plugin.tx_powermail {

_LOCAL_LANG {

default {

confirmation_next = Order without commitment

}

de {

confirmation_next = Unverbindlich testen

}

}

}

[Includes] Include static (from extensions):

- Main Template (powermail)
- Caddy [5] Powermail 2.x (caddy)
- Caddy [6] + Powermail 2.x Foundation 5.x (caddy)
