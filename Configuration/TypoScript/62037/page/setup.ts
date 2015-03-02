page {
  includeCSS {
    // add the quick shop default css
    quick_shop = EXT:quick_shop/Ressources/Public/Templates/default.css
  }
}

[globalVar = GP:tx_browser_pi1|{$plugin.tx_browser_pi1.templates.listview.url.0.showUid} > 0] && [globalVar = TSFE:id = {$plugin.quick_shop.pages.shop}]
  page.10 {
    subparts {
      columnscontent {
        select {
          where = colPos=0 AND list_type = "browser_pi1"
        }
      }
    }
  }
[end]

[globalVar = GP:tx_browser_pi1|pointer > 0] && [globalVar = TSFE:id = {$plugin.quick_shop.pages.shop}]
  page.10 {
    subparts {
      columnscontent {
        select {
          where = colPos=0 AND list_type = "browser_pi1"
        }
      }
    }
  }
[end]