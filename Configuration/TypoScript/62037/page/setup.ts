page {
  includeCSS {
    // add the quick shop default css
    quick_shop = EXT:quick_shop/Ressources/Public/Templates/default.css
  }
}

[globalVar = GP:tx_browser_pi1|itemUid > 0]
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