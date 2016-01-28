.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _change-log:

Change Log
==========

6.1.1 **Feature**   \* #69258: Backend filter

6.1.0 **Improvement**   \* #i0034: clearing lightbox: update for Browser 7.0.7  \* #i0033: Update
for Caddy 6.1 (mini caddy)

6.0.15 **Improvement**   \* #i0032: YouTube video installation

6.0.12 **Improvements**   \* #i0026: Fields are moved   Update: Please use SQL statement from  
<text:s text:c="11"/>\* Ressources/Private/Upgrades/4x_6x/migration.sql

6.0.11 **Improvements**   \* #i0024: Quick Shop hides all content elements but the Browser plugin  
\* in the single view,   <text:s text:c="11"/>\* or if a pointer is given   <text:s text:c="11"/>See
#i0021/#163

6.0.10 **New Feature**   \* #i0024: tax in list views

6.0.9 **New Feature**   \* #i0023: Table tx_quickshop_shippingcosts

6.0.8 **Improvements**   \* #i0022: Display link to shipping details in the list view   <text:s
text:c="17"/>Link to shipping details can be disabled by   <text:s text:c="17"/>\* New property in
the Constant Editor   <text:s text:c="20"/>plugin.quick_shop.layout.caddy.shippingnote  \*
#i0021/#163: Quick Shop displays in the single view the Browser plugin only: it hides other content
elements   <text:s text:c="17"/>This is the default, if you have installed Quick Shop with the whole
website.   <text:s text:c="17"/>See sample configuration at:   <text:s text:c="17"/>\*
Configuration/TypoScript/62037/page/setup.ts   <text:s text:c="17"/>\*
Ressources/Private/Samples/TypoScript/displayShopOnly   <text:s text:c="19"/>\* extension   <text:s
text:c="21"/>\* automaketemplate/setup.txt   <text:s text:c="21"/>\* fluid/setup.txt  \*
#i0020/#162: Caddy position can be [right in text] or [at the bottom]   <text:s text:c="17"/>\* New
property in the Constant Editor   <text:s text:c="20"/>plugin.quick_shop.layout.caddy.position

6.0.7 **Improvements**   \* #i0019: Upgrade for Browser 6.0.7

6.0.2 **Manual** \* #i0018: Update

6.0.0 **Major Features**   \* #62059: teaser fields  \* #62036: Manage all relations in one table 
\* #62029: Upgrade TYPO3 6.2   \* Browser 6.0   \* Foundation 5.4   \* TYPO3 6.2  **Improvement**  
\* #62037: unique uid for the view: 62037  \* #i0015: showUid is moved to itemUid

4.0.6 **Improvement**   \* #i0014: Corporate design: modified icon

4.0.5 **Improvement**   \* #i0013: tca.php: exclude fields are maintained  \* #i0012: ean (new)  \*
#i0011: SKU isn't required  \* #i0010: SKU is required  **Bugfix**   \* #i0011: inkl. MwSt. wasn't
localised

4.0.4 **Feature**   \* #55726: (Caddy) Stock management: decrease item quantity after ordering  \*
Moving SQL fields:   \* in_stock -> stockquantity   \* stock -> stockManagement

4.0.3 **Features**   \* #55002: LinkHandlerConfiguration   ! without effect: linkhandler 0.3.1 has
an error in TYPO3 6.x  \* #55001: Template for Imagecycle no conflict  \* #i0009: List view:
thumbnail links to single view (former: image popup)  \* #54992: Replace marker

4.0.2 **Features**   \* #54872: SEO: move support from Browser - TYPO3 without PHP - to SEO Dynamic
2  \* #54793: RealURL: Template

4.0.1 **Feature**   \* #i0008: TCA search fields

4.0.0 **Features**   \* #53422: In stock amount  \* #i0009: Filter can enable and disable by the
constant editor  \* #i0008: Backend thumbnails  \* #53378: Table field for data  \* #53377: Filter
for size and material  \* #53362: Fit it into TYPO3 6.x

3.0.8 **Improvement** # \*i0006: caddy icon is controlled by Caddy constant  # \*i0007: caddy button
is simplified   \* my_caddybutton substitutes   \* my_caddyimgsrc   \* my_caddyimgalt   \*
my_caddylabel

3.0.7 **Bugfix** # \*i0005: double div-tag in single view

3.0.6 **Improvements** # \*i0004: Update for Caddy 2.0.8

3.0.5 **Improvement** \* #i0003: Improved caddy table structure

3.0.4 **Feature** \* #47068: Remove HTML template

3.0.3 **Feature** \* #47017: Ready TypoScript SEO configuration

3.0.2 **Feature**   \* #42072: nested categories

3.0.0 **Features** \* #46387: Caddy for list view  \* #46386: Update CSS  \* #46380: Introduce
sponsors  \* #46377: Button Caddy with an Icon   \* marker is moved: ###MY_CART_BUTTON### ->
###MY_CADDYLABEL###  \* #45775: FORK from wt_cart to caddy   \* marker are moved   \*
###MY_CART_PAGE_URL### -> ###MY_CADDYURL###   \* my_cart_quantity (removed)   \* CSS properties are
moved   \* #form-order -> form.caddy  **Improvement** \* #i0002: Configuring of caddy constants is
moved from installer to quick_shop  \* #46381: See #46379  \* #46379: Clean up TypoScript files  \*
#46378: Clean up \*.tmpl files  \* #i0001: Key for page tree icon moved from quick_shop to quickshop

2.2.3 **New Feature**   \* #00000: RealUrl configuration file

2.2.2 **Update TYPO3 4.7** \* #00000: $ICON_TYPES -> t3lib_SpriteManager::addTcaTypeIcon  **Update**
\* #00000: Update to Browser version 3.9.14

2.2.1 **Improvements** \* #00000: Update for wt_cart_orderpdf 0.0.9

2.2.0 **Improvements** \* #00000: New fields   \* sku - stock keeping unit   \* quantity_min -
minimum of order quantity   \* quantity_max - maximum of order quantity   \* starttime   \* endtime 
 \* fe_group   \* seo_keywords   \* seo_description   \* Effected files    \* ext_tables.php    \*
ext_tables.sql    \* locallang_db.xml    \* tca.php    \* res/v1.4/default.css    \*
static/setup.txt  \* #00000: Additional template res/v1.4/default_select_30.tmpl   \* Select box for
quantity instead of an input field  **Update for**   \* wt_cart 1.4.3   \* #00000: field
quantity_min - minimum of order quantity     field quantity_max - maximum of order quantity  \*
wt_cart 1.4.2   \* #00000: field sku - stock keeping unit  \* Browser version 4.0 - step 1   \*
#00000: a-z-browser is renamed as index browser   Effects   \* CSS : azSelector -> indexBrowser   \*
HTML : AZSELECTOR -> INDEXBROWSER

2.1.5 **Update Manual** 

2.1.0 **New Feature**    \* #27041: Record browser for the single view / Prev-next Switcher in the
single view

2.0.1 **New Feature**   \* #13145: Number formats: userfunc

2.0.0 **Improvement**   - Individual layout for each product

1.3.3 **Bugfixes**   - 12236: Possible conflict with TypoScript constant   myConst.pages.root is
moved to myConst.pages.quick_shop

1.3.2 **Improvement**   - CSS is extended for wt_cart 1.2.1  - quick_shop provides the
quick_shop_header_image_210px.jpg  - static template was extended for browser 3.6.0

1.3.1 **Improvement**   - 11114: Make Javascript Backbutton invisible

1.3.0 **New Features**   - #11054: Quick Shop supports German and English by default

1.2.0 **New Features**   - #9659: AJAX   - default.tmpl   - reset button got the class reset  
<text:s text:c="3"/>- listarea is wrapped with <div class="listarea">...</div>  - #10224:
Integration of templates of 3rd party extensions  - #00000: Template integration into the Browser
plugin/flexform

1.1.1 **Manual**  - New section: Integration in Facebook

1.1.0 **New Feature**  - Optional manual ordering of records added

1.0.1 **Initial release** 
