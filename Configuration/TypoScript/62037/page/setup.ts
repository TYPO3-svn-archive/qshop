page {
  includeCSS {
    // add the quick shop default css
    quick_shop = EXT:quick_shop/Ressources/Public/Templates/default.css
  }
}

// #i0021/#163
[globalVar = GP:tx_browser_pi1|{$plugin.tx_browser_pi1.templates.listview.url.0.showUid} > 0] && [globalVar = TSFE:id = {$plugin.quick_shop.pages.shop}]
  page.10 {
    subparts {
      columnscontent {
        20 {
          select {
            where = colPos=0 AND (list_type = "browser_pi1" OR CType = "html")
          }
        }
      }
    }
  }
[end]

// #i0025
[globalVar = GP:tx_browser_pi1|pointer > 0] && [globalVar = TSFE:id = {$plugin.quick_shop.pages.shop}]
  page.10 {
    subparts {
      columnscontent {
        20 {
          select {
            where = colPos=0 AND (list_type = "browser_pi1" OR CType = "html")
          }
        }
      }
    }
  }
[end]