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
      }
    }
  }
}

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:quick_shop/Configuration/TypoScript/62037/tx_browser_pi1/single/marker.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:quick_shop/Configuration/TypoScript/62037/tx_browser_pi1/single/sql.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:quick_shop/Configuration/TypoScript/62037/tx_browser_pi1/single/tableFields.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:quick_shop/Configuration/TypoScript/62037/tx_browser_pi1/single/htmlSnippets.ts">