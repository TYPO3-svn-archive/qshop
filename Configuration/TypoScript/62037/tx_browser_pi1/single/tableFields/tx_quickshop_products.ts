plugin.tx_browser_pi1 {

  views {
    single {
      62037 {
        tx_quickshop_products {
            // title
          title < plugin.tx_browser_pi1.displaySingle.master_templates.tableFields.imageText.0
          title {
            20 {
              0 {
                10 >
                10 = COA
                10 {
                    // Into the Caddy
                  10 < temp.intoTheCaddy.inTextRight
                    // social bookmarks
                  19 = TEXT
                  19 {
                    value (
                      <div class="sbmFloatRight">
                        ###SOCIALMEDIA_BOOKMARKS###
                      </div>
  )
                  }
                    // title
                  20 = TEXT
                  20 {
                    field = tx_quickshop_products.title
                    wrap = <h1>|</h1>
                  }
                    // short
                  30 = TEXT
                  30 {
                    field = tx_quickshop_products.short
                    wrap = <h2>|</h2>
                    required = 1
                  }
                    // description
                  40 = TEXT
                  40 {
                    field     = tx_quickshop_products.description
                    required  = 1
                    stdWrap {
                      parseFunc < lib.parseFunc_RTE
                    }
                  }
                    // datasheet
                  50 < tt_content.table.20
                  50 {
                    userFunc = tx_browser_cssstyledcontent->render_table
                    userFunc {
                        // add the value of a field to another field in cObj->data
                      cObjDataFieldWrapper =
                      cObjDataFieldWrapper {
                        cols            = tx_quickshop_products.cols
                        pi_flexform     = tx_quickshop_products.pi_flexform
                        uid             = tx_quickshop_products.uid
                      }
                    }
                    field = tx_quickshop_products.datasheet
                    stdWrap {
                        // With a prefix comment there won't be any output!
                      prefixComment >
                    }
                  }
                    // sku
                  60 = COA
                  60 {
                      // label
                    10 = TEXT
                    10 {
                      data        = LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.sku
                      noTrimWrap  = ||: |
                    }
                      // value
                    20 = TEXT
                    20 {
                      field = tx_quickshop_products.sku
                    }
                  }
                }
              }
              1 {
                10 >
                10 < plugin.tx_browser_pi1.views.single.62037.tx_quickshop_products.title.20.0.10
              }
              2 {
                10 >
                10 < plugin.tx_browser_pi1.views.single.62037.tx_quickshop_products.title.20.0.10
              }
              8 {
                10 >
                10 < plugin.tx_browser_pi1.views.single.62037.tx_quickshop_products.title.20.0.10
              }
              9 {
                10 >
                10 < plugin.tx_browser_pi1.views.single.62037.tx_quickshop_products.title.20.0.10
              }
              10 {
                10 >
                10 < plugin.tx_browser_pi1.views.single.62037.tx_quickshop_products.title.20.0.10
              }
              17 {
                10 >
                10 < plugin.tx_browser_pi1.views.single.62037.tx_quickshop_products.title.20.0.10
              }
              18 {
                10 >
                10 < plugin.tx_browser_pi1.views.single.62037.tx_quickshop_products.title.20.0.10
              }
              25 {
                10 >
                10 < plugin.tx_browser_pi1.views.single.62037.tx_quickshop_products.title.20.0.10
              }
              26 {
                10 >
                10 < plugin.tx_browser_pi1.views.single.62037.tx_quickshop_products.title.20.0.10
              }
            }
              // Into the Caddy
            40 < temp.intoTheCaddy.belowContent
          }
        }
      }
    }
  }
}