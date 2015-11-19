plugin.tx_browser_pi1 {

  views {
    single {
      62037 {
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
          tx_quickshop_products.image_1stforlistonly,
          tx_quickshop_products.image_frames,
          tx_quickshop_products.image_link,
          tx_quickshop_products.image_zoom,
          tx_quickshop_products.image_noRows,
          tx_quickshop_products.image_effects,
          tx_quickshop_products.image_compression,

          tx_quickshop_products.caption,
          tx_quickshop_products.caption_position,
          tx_quickshop_products.tax,
          tx_quickshop_products.price,

          tx_quickshop_products.seo_description,
          tx_quickshop_products.seo_keywords,

          tx_quickshop_products.stockmanagement,
          tx_quickshop_products.stockquantity,
          tx_quickshop_products.tstamp,

          tx_quickshop_categories.title,

          tx_quickshop_shippingcosts.title,
          tx_quickshop_shippingcosts.value
)
      }
    }
  }
}