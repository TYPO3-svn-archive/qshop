plugin.tx_browser_pi1 {

  views {
    list {
      62037 {
        select (
          tx_quickshop_products.title,
          tx_quickshop_products.description,
          tx_quickshop_products.image,
          tx_quickshop_products.imageseo,
          tx_quickshop_products.price,
          tx_quickshop_products.short,
          tx_quickshop_products.sku,
          tx_quickshop_products.stockmanagement,
          tx_quickshop_products.stockquantity,
          tx_quickshop_products.tax,
          tx_quickshop_products.teaser_description,
          tx_quickshop_products.teaser_short,
          tx_quickshop_products.teaser_title,
          tx_quickshop_products.tstamp,
          tx_quickshop_products.uid,
          tx_quickshop_categories.uid
        )
        orderBy = tx_quickshop_products.price DESC, tx_quickshop_products.title, tx_quickshop_categories.title
        csvLinkToSingleView = tx_quickshop_products.title
      }
    }
  }
}