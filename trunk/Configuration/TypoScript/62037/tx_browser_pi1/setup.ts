plugin.tx_browser_pi1 {

    // #53378, 131107, dwildt, 1-
  general_stdWrap >

  flexform {
    socialmedia {
      socialbookmarks {
        wraps {
          stdWrap_items.wrap = <div class="bookmark_items">|</div>
        }
      }
    }
  }
  navigation.pageBrowser.showResultCount = 0
}

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:quick_shop/Configuration/TypoScript/62037/tx_browser_pi1/marker.ts">