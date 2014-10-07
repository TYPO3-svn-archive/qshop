plugin.tx_linkhandler {
  tx_quickshop_products {
    forceLink        = 0
    useCacheHash     = 1
    parameter        = {$plugin.quick_shop.pages.shop}
    additionalParams = &tx_browser_pi1[{$plugin.tx_browser_pi1.navigation.showUid}]={field:uid}
    additionalParams {
      insertData = 1
    }
  }
}