plugin.tx_browser_pi1 {

  views {
    list {
      62037 {
        htmlSnippets =
        htmlSnippets {
          marker {
            filter = TEXT
            filter {
              value (
                <div class="filter">
                  ###TX_QUICKSHOP_CATEGORIES.TITLE###
                  ###TX_QUICKSHOP_DIMENSION.TITLE###
                  ###TX_QUICKSHOP_MATERIAL.TITLE###
                </div>
)
            }
          }
          subparts {
              // For foundation main_02.html
            //searchform < plugin.tx_browser_pi1.displayList.master_templates.subparts.listview.searchform.simpleMapOrderFilter
              // For foundation main_01.html
            searchform < plugin.tx_browser_pi1.displayList.master_templates.subparts.listview.searchform.simple
            listview = TEXT
            listview {
              value (
                <div id="c###TT_CONTENT.UID###-listview-###MODE###" class="columns listview listview-content listview-###MODE### listview-content-###MODE###">
                  <!-- ###LISTBODY### begin --><!-- ###LISTBODYITEM### begin -->
                  <div class="charges">
                    <div class="price">
                      ###TX_QUICKSHOP_PRODUCTS.PRICE###
                    </div>
                    <div class="tax_shipping">
                      ###TX_QUICKSHOP_PRODUCTS.TAX### ###MY_SHIPPING_NOTE###
                    </div>
                    ###TX_QUICKSHOP_PRODUCTS.TSTAMP###
                  </div>
                  ###SOCIALMEDIA_BOOKMARKS###
                  ###TX_QUICKSHOP_PRODUCTS.IMAGE###
                  ###TX_QUICKSHOP_PRODUCTS.TITLE###
                  ###TX_QUICKSHOP_PRODUCTS.SHORT###
                  <div style="clear:both"></div>
                  <!-- ###LISTBODYITEM### end --><!-- ###LISTBODY### end -->
                </div> <!-- /listview -->
)
            }
          }
        }
      }
    }
  }
}