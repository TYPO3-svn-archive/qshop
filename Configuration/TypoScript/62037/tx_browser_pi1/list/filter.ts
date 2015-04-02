plugin.tx_browser_pi1 {

  views {
    list {
      62037 {
        filter {
          tx_quickshop_categories {
              // #42072, dwildt, 1-, 1+
            //title < plugin.tx_browser_pi1.displayList.master_templates.selectbox
            title < plugin.tx_browser_pi1.displayList.master_templates.treeview
            title {
              condition >
              condition = TEXT
              condition {
                value = {$plugin.quick_shop.filter.category}
              }
              count_hits = 0
              treeview {
                enabled {
                  value = 1
                }
              }
              first_item {
                cObject {
                  20 {
                    data = LLL:EXT:quick_shop/locallang_db.xml:filter_phrase.tx_quickshop_categories
                  }
                }
              }
                // #43641, dwildt, 1-, 1+
              //wrap = <span class="selectbox">|</span>
              // wrap for all filters in one row
              wrap = <div class="columns small-12 medium-4 category_menu category_menu_treeview">|</div>
              // wrap for all filters in one column
              wrap = <div class="category_menu category_menu_treeview">|</div>
            }
          }
          tx_quickshop_dimension {
            title < plugin.tx_browser_pi1.displayList.master_templates.selectbox
            title {
              condition >
              condition = TEXT
              condition {
                value = {$plugin.quick_shop.filter.dimension}
              }
              //count_hits = 0
              first_item {
                cObject {
                  20 {
                    data = LLL:EXT:quick_shop/locallang_db.xml:filter_phrase.tx_quickshop_dimension
                  }
                }
              }
              // wrap for all filters in one row
              wrap = <div class="columns small-12 medium-4 selectbox dimension selectbox-dimension">|</div>
              // wrap for all filters in one column
              wrap = <div class="selectbox dimension selectbox-dimension">|</div>
            }
          }
          tx_quickshop_material {
            title < plugin.tx_browser_pi1.displayList.master_templates.selectbox
            title {
              condition >
              condition = TEXT
              condition {
                value = {$plugin.quick_shop.filter.material}
              }
              //count_hits = 0
              first_item {
                cObject {
                  20 {
                    data = LLL:EXT:quick_shop/locallang_db.xml:filter_phrase.tx_quickshop_material
                  }
                }
              }
              // wrap for all filters in one row
              wrap = <div class="columns small-12 medium-4 selectbox material selectbox-material">|</div>
              // wrap for all filters in one column
              wrap = <div class="selectbox material selectbox-material">|</div>
            }
          }
        }
      }
    }
  }
}