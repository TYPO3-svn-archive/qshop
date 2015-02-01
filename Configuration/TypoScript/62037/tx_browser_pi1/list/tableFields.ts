plugin.tx_browser_pi1 {

  views {
    list {
      62037 {
        tx_quickshop_products {
            // title
          title = COA
          title {
            stdWrap {
              wrap = <div class="large-4 medium-4 columns"><ul class="pricing-table">|</ul></div>
            }
              // teaser_title
            10 < plugin.tx_browser_pi1.displayList.master_templates.tableFields.header.0.default
            10 {
              typolink.parameter.cObject.30.value = linktosingle button expand
              wrap  = <li class="title">|</li>
            }
              // category
            20 = COA
            20 {
              if =
              if {
                isTrue {
                  field = tx_quickshop_categories.uid
                }
              }
                // tx_quickshop_categories
              20 = CONTENT
              20 {
                table = tx_quickshop_categories
                select {
                  pidInList = {$plugin.quick_shop.pages.items}
                  //selectFields = tx_quickshop_categories.title
                  join = tx_quickshop_mm ON tx_quickshop_mm.uid_foreign = tx_quickshop_categories.uid
                  where {
                    field = tx_quickshop_products.uid
                    noTrimWrap = |tx_quickshop_categories.uid_parent = 0 AND tx_quickshop_mm.uid_local = | AND tx_quickshop_mm.table_local = 'tx_quickshop_products' AND tx_quickshop_mm.table_foreign = 'tx_quickshop_categories'|
                  }
                  orderBy = tx_quickshop_categories.title
                }
                  // tx_quickshop_products.title croped and linked
                renderObj = TEXT
                renderObj {
                  field = title
                  crop = 25 | ... | 1
                  noTrimWrap = |<li class="bullet-item">|</li>|
                }
              }
            }
              // teaser_short
            30 < plugin.tx_browser_pi1.displayList.master_templates.tableFields.text.0.default
            30 {
              wrap  = <li class="description">|</li>
            }
              // image
            40 < plugin.tx_browser_pi1.displayList.master_templates.tableFields.image.0.default
            40 {
              wrap = <li class="bullet-item">|</li>
            }
              // price
            50 < plugin.tx_browser_pi1.displayList.master_templates.tableFields.header.0.default
            50 {
              field = tx_quickshop_products.price
              stdWrap {
                numberFormat {
                  decimals = 2
                  dec_point {
                    cObject = TEXT
                    cObject {
                      value = .
                      stdWrap {
                        lang {
                          de = ,
                          en = ,
                        }
                      }
                    }
                  }
                }
                noTrimWrap = || &euro;|
              }
              wrap  = <li class="price">|</li>
            }
            51 = COA
            51 {
              10 = TEXT
              10 {
                value = shipping
                lang {
                  de = Versand
                  en = shipping
                }
                typolink.parameter = {$plugin.quick_shop.pages.shipping}
                prepend = TEXT
                prepend {
                  value = plus
                  lang {
                    de = zzgl.
                    en = plus
                  }
                }
              }
              wrap  = <li class="shipping">|</li>
            }
            60 < plugin.tx_quickshop.templates.form
            60 {
              wrap = <li class="caddyWoMargin">|</li>
            }
          }
        }
      }
    }
  }
}