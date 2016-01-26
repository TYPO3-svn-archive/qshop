plugin.tx_browser_pi1 {

  views {
    list {
      62037 {
        tx_quickshop_products {
            // tx_quickshop_products.title
          title = TEXT
          title {
            field = tx_quickshop_products.title
            typolink {
              parameter         = {$plugin.quick_shop.pages.shop} - linktosingle
              additionalParams {
                wrap  = &tx_browser_pi1[{$plugin.tx_browser_pi1.navigation.showUid}]=|
                field = tx_quickshop_products.uid
              }
              useCacheHash = 1
              title {
                data = LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:linktosingleview
              }
            }
            wrap  = <h2 class="title">|</h2>
          }
            // tx_quickshop_products.short, detail
          short = COA
          short {
              // tx_quickshop_products.short
            10 = TEXT
            10 {
              field = tx_quickshop_products.short
            }
              // detail
            20 = TEXT
            20 {
              data = LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:linktosingleview
              typolink {
                parameter         = {$plugin.quick_shop.pages.shop} - linktosingle
                additionalParams {
                  wrap  = &tx_browser_pi1[{$plugin.tx_browser_pi1.navigation.showUid}]=|
                  field = tx_quickshop_products.uid
                }
                useCacheHash = 1
                title {
                  data = LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:linktosingleview
                }
              }
              noTrimWrap = | ||
            }
            wrap = <p class="short">|</p>
          }
          image < plugin.tx_browser_pi1.displayList.master_templates.tableFields.image.0.default
          image {
            wrap = <div class="image">|</div>
          }
          price = COA
          price {
            wrap = |&nbsp;{$plugin.quick_shop.base.currencySymbol}
            10 = USER
            10.userFunc = tx_browser_typoscript->numberFormat
            10.userFunc {
              number = TEXT
              number {
                field = tx_quickshop_products.price
              }
              decimal   = 2
              dec_point = {$plugin.quick_shop.base.dec_point}
              thousands_sep = {$plugin.quick_shop.base.thousands_sep}
            }
          }
          tax < plugin.tx_quickshop.templates.tax
            // placeholder for the caddy form
          tstamp < plugin.tx_quickshop.templates.form
        }
      }
    }
  }
}