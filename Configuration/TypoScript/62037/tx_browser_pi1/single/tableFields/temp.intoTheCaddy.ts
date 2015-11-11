  // Buy now
temp.intoTheCaddy = COA
temp.intoTheCaddy {
  inTextRight = COA
  inTextRight {
      // if [in text right]
    if =
    if {
      value = {$plugin.quick_shop.layout.caddy.position}
      equals = in text right
    }
    wrap = <div style="float:right;padding:0 0 1em 1em;width:40%;"><ul class="pricing-table">|</ul></div>
      // price
    10 = TEXT
    10 {
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
                  en = .
                }
              }
            }
          }
        }
        noTrimWrap = || &euro;|
      }
      wrap  = <li class="price" style="font-weight:bold">|</li>
    }
      // tax, my_shipping_note
    30 = COA
    30 {
        // tax
      10 < plugin.tx_quickshop.templates.tax
      10 {
        1 {
          wrap  = <li class="bullet-item">|</li>
          wrap  = |<br />
        }
        2 {
          wrap  = <li class="bullet-item">|</li>
          wrap  = |<br />
        }
      }
        // my_shipping_note
      20 = TEXT
      20 {
        if {
          isTrue = {$plugin.quick_shop.layout.caddy.shippingnote}
        }
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
        noTrimWrap = | ||
      }
      wrap  = <li class="bullet-item">|</li>
    }
    60 < plugin.tx_quickshop.templates.formWiSelect
    60 {
      wrap = <li class="caddyWoMargin">|</li>
    }
  }
  belowContent = COA
  belowContent {
      // if [at the bottom]
    if =
    if {
      value = {$plugin.quick_shop.layout.caddy.position}
      equals = at the bottom
    }
    wrap = <div class="columns" style="clear:both;"><ul class="pricing-table pricing-table-below row">|</ul></div>
      // title, price
    10 = COA
    10 {
        // title
      10 = TEXT
      10 {
        field = tx_quickshop_products.title
        noTrimWrap = |<span class="item">|</span> |
      }
        // <br /> show-for-small-only
      11 = TEXT
      11 {
        value = <br />
        wrap = <span class="show-for-small-only">|</span>
      }
        // price
      20 = TEXT
      20 {
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
                    en = .
                  }
                }
              }
            }
          }
          noTrimWrap = || &euro; |
        }
      }
        // <br /> show-for-small-only
      21 = TEXT
      21 {
        value = <br />
        wrap = <span class="hide-for-large-up">|</span>
      }
        // tax, shipping
      30 = COA
      30 {
          // tax
        10 < plugin.tx_quickshop.templates.tax
        10 {
          1 {
            wrap  >
            noTrimWrap = || |
          }
          2 {
            wrap  >
            noTrimWrap = || |
          }
        }
          // <br /> show-for-small-only
        11 = TEXT
        11 {
          value = <br />
          wrap = <span class="show-for-small-only">|</span>
        }
          // my_shipping_note
        20 = TEXT
        20 {
          if {
            isTrue = {$plugin.quick_shop.layout.caddy.shippingnote}
          }
          value = shipping
          lang {
            de = Versand
            en = shipping
          }
          stdWrap {
            noTrimWrap = || &raquo; |
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
          noTrimWrap = | ||
        }
        wrap  = <span class="tax-and-shippingnote">|</span>
      }
      wrap  = <li class="price columns small-12 medium-8">|</li>
    }
    60 < plugin.tx_quickshop.templates.formWiSelect
    60 {
      wrap = <li class="columns small-12 medium-4 caddyWoMargin">|</li>
    }
  }
}