plugin.quick_shop {

  # cat=Quick Shop - Currency/dims/200; type=string; label= Currency symbol (e.g. &euro; or $)
  base.currencySymbol = &euro;
  # cat=Quick Shop - Currency/dims/210; type=string; label= Decimal symbol: e.g. , (comma) or . (dot): 1.99 $, 1,99 EUR.
  base.dec_point = ,
  # cat=Quick Shop - Currency/dims/220; type=string; label= Thousands separator: e.g. , (comma) or . (dot). 1,000 US-$ or 1.000 EUR
  base.thousands_sep = .
  # cat=Quick Shop - Currency/others/998;    type=user[EXT:quick_shop/lib/userfunc/class.tx_quickshop_userfunc.php:tx_quickshop_userfunc->promptExternalLinks]; label=Powered by:die-netzmacher.de
  base.externalLinks = Click me!
  # cat=Quick Shop - Currency/others/999;    type=user[EXT:quick_shop/lib/userfunc/class.tx_quickshop_userfunc.php:tx_quickshop_userfunc->promptSponsors]; label=Subsidise the Caddy project!
  base.externalSponsors = Click me!

  # cat=Quick Shop - Filter/enable/101;     type=boolean; label=Category:Enable the category filter in the frontend.
  filter.category         = 1
  # cat=Quick Shop - Filter/enable/102;     type=boolean; label=Dimensions:Enable the filter for dimensions in the frontend.
  filter.dimension        = 1
  # cat=Quick Shop - Filter/enable/103;     type=boolean; label=Material:Enable the filter for materials in the frontend.
  filter.material         = 1
  # cat=Quick Shop - Filter/others/998;     type=user[EXT:quick_shop/lib/userfunc/class.tx_quickshop_userfunc.php:tx_quickshop_userfunc->promptExternalLinks]; label=Powered by:die-netzmacher.de
  filter.externalLinks    = Click me!
  # cat=Quick Shop - Filter/others/999;     type=user[EXT:quick_shop/lib/userfunc/class.tx_quickshop_userfunc.php:tx_quickshop_userfunc->promptSponsors]; label=Subsidise the Caddy project!
  filter.externalSponsors = Click me!

  # cat=Quick Shop - Images/dims/101; type=string; label= List view max height:Max height of the image in the list view
  images.list.maxH = 140m
  # cat=Quick Shop - Images/dims/102; type=string; label= List view max width:Max width of the image in the list view
  images.list.maxW = 140
  # cat=Quick Shop - Images/others/998;    type=user[EXT:quick_shop/lib/userfunc/class.tx_quickshop_userfunc.php:tx_quickshop_userfunc->promptExternalLinks]; label=Powered by:die-netzmacher.de
  images.externalLinks = Click me!
  # cat=Quick Shop - Images/others/999;    type=user[EXT:quick_shop/lib/userfunc/class.tx_quickshop_userfunc.php:tx_quickshop_userfunc->promptSponsors]; label=Subsidise the Caddy project!
  images.externalSponsors = Click me!

  # cat=Quick Shop - Layout/enable/101;     type=options[in text right,at the bottom]; label= Caddy position:Position of the caddy in single views
  layout.caddy.position = at the bottom
  # cat=Quick Shop - Layout/enable/102;     type=boolean; label= Link to shipping costs:Recommended: Link to shipping costs in list and single views. Disable it, if you sell your items without any shipping costs.
  layout.caddy.shippingnote = 1
  # cat=Quick Shop - Layout/others/998;     type=user[EXT:quick_shop/lib/userfunc/class.tx_quickshop_userfunc.php:tx_quickshop_userfunc->promptExternalLinks]; label=Powered by:die-netzmacher.de
  layout.externalLinks = Click me!
  # cat=Quick Shop - Layout/others/999;     type=user[EXT:quick_shop/lib/userfunc/class.tx_quickshop_userfunc.php:tx_quickshop_userfunc->promptSponsors]; label=Subsidise the Caddy project!
  layout.externalSponsors = Click me!

  # cat=Quick Shop - Pages/enable/301; type=integer; label= Shop / root page:Uid of the page which contains the browser plugin for the quick shop.
  pages.shop =
  # cat=Quick Shop - Pages/enable/302; type=integer; label= Caddy:Uid of the page with the caddy - your shopping cart
  pages.caddy =
  # cat=Quick Shop - Pages/enable/304; type=integer; label= Shipping:Uid of the page with the shipping terms
  pages.shipping =
  # cat=Quick Shop - Pages/enable/305; type=integer; label= Items:Uid of the folder which contains the quick shop items. Usually the root page.
  pages.items =
  # cat=Quick Shop - Pages/others/998;    type=user[EXT:quick_shop/lib/userfunc/class.tx_quickshop_userfunc.php:tx_quickshop_userfunc->promptExternalLinks]; label=Powered by:die-netzmacher.de
  pages.externalLinks = Click me!
  # cat=Quick Shop - Pages/others/999;    type=user[EXT:quick_shop/lib/userfunc/class.tx_quickshop_userfunc.php:tx_quickshop_userfunc->promptSponsors]; label=Subsidise the Caddy project!
  pages.externalSponsors = Click me!
}
  // plugin.quick_shop