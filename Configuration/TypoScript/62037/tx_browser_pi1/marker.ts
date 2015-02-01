plugin.tx_browser_pi1 {
  marker {
    fdTmplMainListColLeftSmall {
      value = 12
    }
    fdTmplMainListColLeftMedium {
      value = 3
    }
    fdTmplMainListColLeftLarge {
      value = 3
    }
    fdTmplMainListColRightSmall {
      value = 12
    }
    fdTmplMainListColRightMedium {
      value = 9
    }
    fdTmplMainListColRightLarge {
      value = 9
    }
    my_shipping_note = TEXT
    my_shipping_note {
      value = shipping
      lang {
        de = Versand
        en = shipping
      }
      typolink.parameter = {$plugin.quick_shop.pages.shipping}
      prepend = TEXT
      prepend {
        value = plus
        lang {
          de = zzgl.
          en = plus
        }
        noTrimWrap = | ||
      }
      noTrimWrap = | ||
    }
  }
}