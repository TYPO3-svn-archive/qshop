.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _illustration-18-page-page-quick-shop-typoscript-pagequickshop002:

page_quickshop_002
""""""""""""""""""

Please edit the constants with the Constant Editor.

[General] Constants:

////////////////////////////////////////////////////////

//

// INDEX

//

// plugin.base_quickshop

// plugin.caddy

// plugin.quick_shop

// plugin.tx_browser_pi1

// plugin.tx_powermail

// plugin.tx_seodynamictag

// base_quickshop

plugin.base_quickshop {

client {

name = TYPO3 Quick Shop Installer

}

// for baseURL

host = http://www.v6x.typo3-quick-shop.de/

pages {

root = 1

root {

caddymini = 4

libraries {

footer = 11

//header = 12

header {

logo = 13

slider {

content = 14

}

}

menu {

topbar = 15

bottom = 16

}

}

}

}

}

// base_quickshop

// caddy

plugin.caddy {

pages {

caddy <text:s text:c="6"/>= 3

caddymini <text:s text:c="2"/>= 4

revocation = 6

shop <text:s text:c="7"/>= 2

terms <text:s text:c="6"/>= 7

}

url {

showUid = itemUid

}

}

// caddy

// quick_shop

plugin.quick_shop {

pages {

caddy <text:s text:c="6"/>= 3

items <text:s text:c="6"/>= 10

shipping <text:s text:c="3"/>= 5

shop <text:s text:c="7"/>= 2

}

}

// quick_shop

// plugin.tx_browser_pi1

plugin.tx_browser_pi1 {

frameworks {

foundation {

templating {

components {

navigation {

topbar {

name = TYPO3 Quick Shop

}

}

}

}

}

}

navigation {

showUid = itemUid

}

}

// plugin.tx_browser_pi1

// plugin.tx_powermail

// This is for powermail 2.x and hasn't any effect in powermail 1.x

plugin.tx_powermail {

settings {

javascript {

powermailJQuery =

powermailJQueryUi =

}

}

}

// This is for powermail 2.x and hasn't any effect in powermail 1.x

// plugin.tx_powermail

// plugin.tx_seodynamictag

plugin.tx_seodynamictag {

condition {

single {

begin = globalVar = GP:tx_browser_pi1|itemUid > 0] && [globalVar = TSFE:id = 2

}

}

}

// plugin.tx_seodynamictag

[General] Setup

////////////////////////////////////////////////////////

//

// INDEX

//

// config

// plugin.tx_browser_pi1

// TYPO3-Browser: ajax page object I

// TYPO3-Browser: ajax page object II

// config

config {

admPanel <text:s text:c="31"/>= 1

baseURL <text:s text:c="32"/>= http://www.v6x.typo3-quick-shop.de/

disablePrefixComment <text:s text:c="19"/>= 1

doctype <text:s text:c="32"/>= html5

xmlprologue = none

htmlTag_langKey <text:s text:c="24"/>= en

language <text:s text:c="31"/>= en

locale_all <text:s text:c="29"/>= en_GB

metaCharset <text:s text:c="28"/>= UTF-8

//no_cache <text:s text:c="31"/>= 1

spamProtectEmailAddresses <text:s text:c="14"/>= 5

spamProtectEmailAddresses_atSubst <text:s text:c="6"/>= <span
style="display:none;">spamfilter</span><span class="dummy">@</span>

spamProtectEmailAddresses_lastDotSubst = <span style="display:none;">spamfilter</span><span
class="dummy">.</span>

tx_realurl_enable <text:s text:c="22"/>= 0

xhtml_cleaning <text:s text:c="25"/>= all

}

// config

// plugin.tx_browser_pi1

plugin.tx_browser_pi1 {

// Don't display any order box

displayList.selectBox_orderBy.display = 0

}

// plugin.tx_browser_pi1

// TYPO3-Browser: ajax page object I

// Add this snippet into the setup of the TypoScript

// template of your page.

// Use 'page', if the name of your page object is 'page'

// (this is a default but there isn't any rule)

[globalString = GP:tx_browser_pi1|segment=single] || [globalString = GP:tx_browser_pi1|segment=list]
|| [globalString = GP:tx_browser_pi1|segment=searchform]

page >

page < plugin.tx_browser_pi1.javascript.ajax.page

[global]

// TYPO3-Browser: ajax page object I

// TYPO3-Browser: ajax page object II

// In case of localisation:

// \* Configure the id of sys_language in the Constant Editor.

// \* Move in this line ...jQuery.default to ...jQuery.de (i.e.)

browser_ajax < plugin.tx_browser_pi1.javascript.ajax.jQuery.en

// TYPO3-Browser: ajax page object II

[Options]

- [X] Constants
- [X] Setup
- [X] Rootlevel

[Includes] Include static (from extensions):

- CSS Styled Content (css_styled_content)
- Browser [0] + Foundation Framework (browser)
- Browser [1] Basis (browser)
- Browser [5] + Foundation Templates (browser)
- Caddy [1] Basis (caddy)
- Caddy [2.1] + orange (caddy)
- Caddy [3] + Foundation 5.x (caddy)
- Caddy [3.1] + Foundation 5.x CSS (caddy)
- Caddy [7] + Language: German (caddy)
- Quick Shop [0] + Template (base_quickshop)
- Quick Shop [1] Basis (quick_shop)
- Quick Shop [2] + Caddy (quick_shop)
