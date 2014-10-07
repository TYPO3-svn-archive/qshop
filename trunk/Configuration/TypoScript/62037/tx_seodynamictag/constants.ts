plugin.tx_seodynamictag {

  canonical {
    single {
        // Only this parameter are allowed:
      additionalParams = &tx_browser_pi1[itemUid]={GP:tx_browser_pi1|itemUid}
    }
  }

  condition {
    single {
        // Please replace xxx with the uid of the page with the news plugin for the single view
        // Please use the Constant Editor
      begin = globalVar = GP:tx_browser_pi1|itemUid > 0] && [globalVar = TSFE:id = xxx
    }
  }

  database {
    table = tx_quickshop_products
    var.1 = tx_browser_pi1[itemUid]
    field {
      author        = "TYPO3 Quick Shop"
      description   = seo_description
      keywords      = seo_keywords
      title         = title
      short         = short
    }
  }

  default {
    description = Description is empty! Please maintain the current product record of the TYPO3 Quick Shop. See tab [Search Engine] field [Description]
  }

  keywords {
    default         = Keywords are empty! Please maintain the current product record of the TYPO3 Quick Shop. See tab [Search Engine] field [Keywords]
    moveToKeywords  = 0
  }
}