plugin.tx_browser_pi1 {

  views {
    single {
      62037 = Quick Shop
      62037 {
        displaySingle < plugin.tx_browser_pi1.displaySingle
        displaySingle {
          image {
              // We don't want an alternate image
            file >
          }
        }
        select (
          tx_quickshop_products.title,
          tx_quickshop_products.sku,
          tx_quickshop_products.description,

          tx_quickshop_products.datasheet,
          tx_quickshop_products.cols,
          tx_quickshop_products.pi_flexform,

          tx_quickshop_products.image,
          tx_quickshop_products.imageseo,
          tx_quickshop_products.imagewidth,
          tx_quickshop_products.imageheight,
          tx_quickshop_products.imageorient,
          tx_quickshop_products.imagecols,
          tx_quickshop_products.imageborder,
          tx_quickshop_products.image_frames,
          tx_quickshop_products.image_link,
          tx_quickshop_products.image_zoom,
          tx_quickshop_products.image_noRows,
          tx_quickshop_products.image_effects,
          tx_quickshop_products.image_compression,

          tx_quickshop_products.caption,
          tx_quickshop_products.caption_position,
          tx_quickshop_products.caption,
          tx_quickshop_products.tax,
          tx_quickshop_products.price,

          tx_quickshop_products.seo_description,
          tx_quickshop_products.seo_keywords,

          tx_quickshop_products.stockmanagement,
          tx_quickshop_products.stockquantity,
          tx_quickshop_products.tstamp,

          tx_quickshop_categories.title
        )
        tx_quickshop_products {
            // title
          title = TEXT
          title {
            field = tx_quickshop_products.title
            wrap  = <h1>|</h1>
          }
            // Handle with an image
          image = COA
          image {
              // Handle with an image at least
            if {
                // If we have an image, tx_quickshop_products.image will render the description
              isTrue {
                field = tx_quickshop_products.image
              }
            }
              // tt_content.image.20
            10 < tt_content.image.20
            10 {
              imgList {
                field = tx_quickshop_products.image
              }
              imgPath = uploads/tx_quickshop/
              1 {
                file {
                  width {
                    field = tx_quickshop_products.imagewidth
                  }
                }
                titleText {
                  field = tx_quickshop_products.imageseo
                }
                imageLinkWrap {
                  ifEmpty {
                    typolink.parameter {
                      field = tx_quickshop_products.image_link
                    }
                  }
                  typolink.parameter {
                    field = tx_quickshop_products.image_link
                  }
                  enable {
                    field = tx_quickshop_products.image_zoom
                  }
                  width                       = 1000;
                  height                      = 800m;
                  //JSwindow = 0
                }
              }
              textPos {
                field = tx_quickshop_products.imageorient
              }
              equalH {
                field = tx_quickshop_products.imageheight
              }
              image_compression {
                field = tx_quickshop_products.image_compression
              }
              image_effects {
                field = tx_quickshop_products.image_effects
              }
              noRows {
                field = tx_quickshop_products.image_norows
              }
              cols {
                field = tx_quickshop_products.imagecols
              }
              border {
                field = tx_quickshop_products.imageborder
              }
              caption.1 {
                field = tx_quickshop_products.caption
              }
              captionAlign {
                field = tx_quickshop_products.caption_position
              }
              layout.key {
                field = tx_quickshop_products.imageorient
              }
              stdWrap {
                prefixComment >
                wrap          = <div class="image">|</div>
              }
                // description, sku
              text {
                  // description, datasheet, sku
                20 = COA
                20 {
                    // description
                  10 = TEXT
                  10 {
                    field = tx_quickshop_products.description
                    parseFunc < lib.parseFunc_RTE
                  }
                    // datasheet
                  20 < tt_content.table.20
                  20 {
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
                  30 = COA
                  30 {
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
                  wrap = <div class="csc-textpic-text"><p>|</p></div>
                }
              }
            }
          }
            // Handle without any image
          description < .image
          description {
            if {
              isTrue >
              isFalse {
                field = tx_quickshop_products.image
              }
            }
            10 {
              imgList = alternate_image_400x300.gif
              imgPath = EXT:quick_shop/Ressources/Public/Images/
            }
          }
            // price
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
            // tax
          tax < plugin.tx_quickshop.templates.tax
            // placeholder for the form
          tstamp < plugin.tx_quickshop.templates.form

        }
          // marker and subparts will replaced in the HTML template before data handling
          // #47068, 130409, dwildt
        htmlSnippets =
        htmlSnippets {
          subparts {
            singleview = TEXT
            singleview {
              value (
<!-- ###AREA_FOR_AJAX_LIST_01### begin -->
        <div id="c###TT_CONTENT.UID###-singleview-###MODE###" class="singleview singleview-###MODE###">
          ###RECORD_BROWSER###
          <!-- ###SINGLEBODY### begin --><!-- ###SINGLEBODYROW### begin -->
          <div class="charges">
            <div class="price">
              ###TX_QUICKSHOP_PRODUCTS.PRICE###
            </div>
            <div class="tax_shipping">
              ###TX_QUICKSHOP_PRODUCTS.TAX### ###MY_SHIPPING_NOTE###
            </div>
          </div>
          ###SOCIALMEDIA_BOOKMARKS###
          ###TX_QUICKSHOP_PRODUCTS.TITLE###
          ###TX_QUICKSHOP_PRODUCTS.IMAGE###
          ###TX_QUICKSHOP_PRODUCTS.DESCRIPTION###
          <div style="clear:both"></div>
          ###TX_QUICKSHOP_PRODUCTS.TSTAMP###
          <!-- ###SINGLEBODYROW### end --><!-- ###SINGLEBODY### end -->
<!-- ###AREA_FOR_AJAX_LIST_01### end -->
            <!-- ###BACKBUTTON### begin -->
            <p class="backbutton">
              ###BUTTON###
            </p>
          <!-- ###BACKBUTTON### end -->
<!-- ###AREA_FOR_AJAX_LIST_02### begin -->
        </div>
<!-- ###AREA_FOR_AJAX_LIST_02### end -->
)
            }
          }
        }
      }
    }
  }
}