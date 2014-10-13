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
                    // Buy now
                  10 = COA
                  10 {
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
                                  en = ,
                                }
                              }
                            }
                          }
                        }
                        noTrimWrap = || &euro;|
                      }
                      wrap  = <li class="price" style="font-weight:bold">|</li>
                    }
                      // tax
                      // my_shipping_note
                    30 = COA
                    30 {
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
                      20 = TEXT
                      20 {
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
          }
            // title
          xxxtitle = COA
          xxxtitle {
              // image in case of: above ... and beside ...
            10 = CASE
            10 {
              key {
                field = tx_quickshop_products.imageorient
              }
              // don't handle
              default = TEXT
              default {
                value =
              }
              // above-center: div.column ul.block-grid image /ul /div
              0 = COA
              0 {
                10 = TEXT
                10 {
                  field = tx_quickshop_products.imagecols
                  wrap = <div class="columns large-12 above-center"><ul class="clearing-thumbs small-block-grid-|" data-clearing>
                }
                  // image
                20 < plugin.tx_browser_pi1.displaySingle.master_templates.tableFields.image.0
                20 {
                  wrap >
                }
                // above-right: /ul /div
                30 = TEXT
                30 {
                  value = </ul></div>
                }
              }
              // above-right: div.column ul.block-grid image /ul /div
              1 < .0
              1 {
                10 {
                  wrap = <div class="columns large-6 large-offset-6 above-right"><ul class="clearing-thumbs small-block-grid-|" data-clearing>
                }
              }
              // above-left: div.column ul.block-grid
              2 < .0
              2 {
                10 {
                  wrap = <div class="columns large-6 above-left"><ul class="clearing-thumbs small-block-grid-|" data-clearing>
                }
              }
              // intext-right: div.columns ul.block-grid
              17 < .0
              17 {
                10 {
                  wrap = <div class="columns large-4 large-push-8 intext-right"><ul class="clearing-thumbs small-block-grid-|" data-clearing>
                }
              }
              // intext-left: div.columns ul.block-grid
              18 < .0
              18 {
                10 {
                  wrap = <div class="columns large-4 intext-left"><ul class="clearing-thumbs small-block-grid-|" data-clearing>
                }
              }
              // intext-right-nowrap: div.columns ul.block-grid
              25 < .0
              25 {
                10 {
                  wrap = <div class="columns large-4 large-push-8 intext-right-nowrap"><ul class="clearing-thumbs small-block-grid-|" data-clearing>
                }
              }
              // intext-left-nowrap: div.columns ul.block-grid
              26 < .0
              26 {
                10 {
                  wrap = <div class="columns large-4 intext-left-nowrap"><ul class="clearing-thumbs small-block-grid-|" data-clearing>
                }
              }
            }
              // text
            20 = CASE
            20 {
              key {
                field = tx_quickshop_products.imageorient
              }
              // don't handle
              default = TEXT
              default {
                value =
              }
              // above-center: div.columns
              0 = COA
              0 {
                wrap = <div class="columns large-12">|</div>
                  // Buy now
                10 = COA
                10 {
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
                                en = ,
                              }
                            }
                          }
                        }
                      }
                      noTrimWrap = || &euro;|
                    }
                    wrap  = <li class="price" style="font-weight:bold">|</li>
                  }
                    // tax
                    // my_shipping_note
                  30 = COA
                  30 {
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
                    20 = TEXT
                    20 {
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
              // above-right: div.columns
              1 < .0
              1 {
                wrap = <div class="columns large-12">|</div>
              }
              // above-left: div.columns
              2 < .0
              2 {
                wrap = <div class="columns large-12">|</div>
              }
              // below-center: div.columns
              8 < .0
              8 {
                wrap = <div class="columns large-12">|</div>
              }
              // below-right: div.columns
              9 < .0
              9 {
                wrap = <div class="columns large-12">|</div>
              }
              // below-left: div.columns
              10 < .0
              10 {
                wrap = <div class="columns large-12">|</div>
              }
              // intext-right: div.columns
              17 < .0
              17 {
                wrap = <div class="columns large-8 large-pull-4">|</div>
              }
              // intext-left: div.columns
              18 < .0
              18 {
                wrap = <div class="columns large-8">|</div>
              }
              // intext-right-nowrap: div.columns
              25 < .0
              25 {
                wrap = <div class="columns large-8 large-pull-4">|</div>
              }
              // intext-left-nowrap: div.columns
              26 < .0
              26 {
                wrap = <div class="columns large-8">|</div>
              }
            }
              // image in case of: below ...
            30 = CASE
            30 {
              key {
                field = tx_quickshop_products.imageorient
              }
              // don't handle
              default = TEXT
              default {
                value =
              }
              // below-center: div.column ul.block-grid
              8 = COA
              8 {
                10 = TEXT
                10 {
                  field = tx_quickshop_products.imagecols
                  wrap = <div class="columns large-12 below-center"><ul class="clearing-thumbs small-block-grid-|" data-clearing>
                }
                  // image
                20 < plugin.tx_browser_pi1.displaySingle.master_templates.tableFields.image.0
                20 {
                  wrap >
                }
                // above-right: /ul /div
                30 = TEXT
                30 {
                  value = </ul></div>
                }
              }
              // below-right: div.column ul.block-grid
              9 < .8
              9 {
                10 {
                  wrap = <div class="columns large-6 large-offset-6 below-right"><ul class="clearing-thumbs small-block-grid-|" data-clearing>
                }
              }
              // below-left: div.column ul.block-grid
              10 < .8
              10 {
                10 {
                  wrap = <div class="columns large-6 below-left"><ul class="clearing-thumbs small-block-grid-|" data-clearing>
                }
              }
            }
          }


        }
      }
    }
  }
}