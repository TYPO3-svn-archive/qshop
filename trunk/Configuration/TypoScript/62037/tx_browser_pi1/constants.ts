plugin.tx_browser_pi1 {
  jQuery {
    plugin {
      jstree {
        tablefield_01 = tx_quickshop_categories.title
      }
    }
  }
  templates {
    listview {
      header {
        0 {
          crop  = 24|...|1
          field = tx_quickshop_products.teaser_title // tx_quickshop_products.title
        }
        1 {
          crop  = 30|...|1
          field = tx_quickshop_products.teaser_short // tx_quickshop_products.short
        }
      }
      image {
        0 {
          default = EXT:quick_shop/Ressources/Public/Images/quickshop_default_300x200.gif
          file    = tx_quickshop_products.image
          height  = 188c
          path    = uploads/tx_quickshop/
          seo     = tx_quickshop_products.imageseo
          width   = 188c
        }
      }
      text {
        0 {
          crop = 56|...|1
          field = tx_quickshop_products.teaser_short // tx_quickshop_products.short // tx_quickshop_products.description
        }
      }
      url {
        0 {
          key       = tx_quickshop_products.type
          page      = tx_quickshop_products.page
          record    = tx_quickshop_products.uid
          showUid   = itemUid
          #singlePid =
          url       = tx_quickshop_products.url
        }
        1 {
          key       = tx_org_staff.type
          page      = tx_org_staff.page
          record    = tx_org_staff.uid
          showUid   = staffUid
          #singlePid =
          url       = tx_org_staff.url
        }
        2 {
          key       = type
          page      = page
          record    = uid
          showUid   = headquartersUid
          #singlePid =
          url       = url
        }
      }
    }
    singleview {
      image {
        0 {
          file    = tx_quickshop_products.image
          height  =
          path    = uploads/tx_quickshop/
          seo     = tx_quickshop_products.imageseo
          width   = 
        }
      }
    }
  }
}