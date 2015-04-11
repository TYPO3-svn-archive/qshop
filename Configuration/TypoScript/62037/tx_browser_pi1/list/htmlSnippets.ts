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
                <div class="row filter">
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
            //searchform < plugin.tx_browser_pi1.displayList.master_templates.subparts.listview.searchform.simple
            listview = TEXT
            listview {
              value (
                <div id="c###TT_CONTENT.UID###-listview-###MODE###" class="columns listview listview-content listview-###MODE### listview-content-###MODE###">
                  <div class="row">
                    <!-- ###LISTBODY### begin --><!-- ###LISTBODYITEM### begin -->
                    ###TX_QUICKSHOP_PRODUCTS.TITLE###
                    <!-- ###LISTBODYITEM### end --><!-- ###LISTBODY### end -->
                  </div> <!-- /row -->
                </div> <!-- /listview -->
)
            }
          }
        }
      }
    }
  }
}