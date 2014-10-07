plugin.tx_browser_pi1 {
  marker {
    fdTmplMainSingleColLeftSmall {
      value = 12
    }
    fdTmplMainSingleColLeftMedium {
      value = 12
    }
    fdTmplMainSingleColLeftLarge {
      value = 3
    }
    fdTmplMainSingleColRightSmall {
      value = 12
    }
    fdTmplMainSingleColRightMedium {
      value = 12
    }
    fdTmplMainSingleColRightLarge {
      value = 9
    }
    my_singleviewbackbutton = COA
    my_singleviewbackbutton {
        // History Back
      10 = TEXT
      10 {
        value = Back
        lang {
          de = Zur&uuml;ck
          en = Back
        }
        noTrimWrap  = |<a href="javascript:history.back()">&laquo; |</a>|
      }
        // Devider
      20 = TEXT
      20 {
        value = |
        noTrimWrap  = | | |
      }
        // List
      30 = TEXT
      30 {
        value = All items
        lang {
          de = Alle Artikel
          en = All items
        }
        stdWrap {
          noTrimWrap  = || &raquo;|
        }
        typolink {
          parameter = {$plugin.quick_shop.pages.shop}
        }
      }
    }
  }
}