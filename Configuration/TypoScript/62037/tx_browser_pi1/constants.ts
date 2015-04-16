plugin.tx_browser_pi1 {
  jQuery {
    plugin {
      jstree {
        tablefield_01 = tx_quickshop_categories.title
      }
    }
  }
  navigation {
    showUid = itemUid
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
      }
    }
    singleview {
      image {
        0 {
          caption     = tx_quickshop_products.caption
          file        = tx_quickshop_products.image
          height      = tx_quickshop_products.imageheight
          imagecols   = tx_quickshop_products.imagecols
          imageorient = tx_quickshop_products.imageorient
          path        = uploads/tx_quickshop/
          seo         = tx_quickshop_products.imageseo
          width       = tx_quickshop_products.imagewidth
        }
      }
    }
  }
}