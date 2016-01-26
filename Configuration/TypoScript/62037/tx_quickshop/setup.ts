  // plugin.tx_quickshop.templates.form
  // plugin.tx_quickshop.templates.tax



  //////////////////////////////////////
  //
  // plugin.tx_quickshop.templates.form

plugin.tx_quickshop.templates.form = COA
plugin.tx_quickshop.templates.form {
    // if: even in stock
  10 = COA
  10 {
      // if: even in stock
    if =
    if {
      isTrue {
        field = tx_quickshop_products.stockmanagement
      }
      negate = 1
    }
      // order form
    10 < plugin.tx_caddy_pi1.templates.html.form.order.foundation.5x.woSelect
  }
    // if: not even in stock
  20 = COA
  20 {
      // if: even in stock is false
    if =
    if {
      isTrue {
        field = tx_quickshop_products.stockmanagement
      }
    }
      // if: amount in stock is >= 1
    10 = COA
    10 {
        // if: amount in stock is >= 1
      if =
      if {
        value = 0
        isGreaterThan {
          field = tx_quickshop_products.stockquantity
        }
      }
        // order form
      10 < plugin.tx_caddy_pi1.templates.html.form.order.foundation.5x.woSelect
    }
      // if: amount in stock is < 1
    20 = COA
    20 {
        // if: amount in stock is < 1
      if =
      if {
        value = 1
        isLessThan {
          field = tx_quickshop_products.stockquantity
        }
      }
      10 = CASE
      10{
        key {
          field = tx_quickshop_products.stockprompt
        }
        default = TEXT
        default {
          data = LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:tx_quickshop_products.stockprompt.selled
          wrap = <div class="notInStock selled">|</div>
        }
        booked = TEXT
        booked {
          data = LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:tx_quickshop_products.stockprompt.booked
          wrap = <div class="notInStock booked">|</div>
        }
        notavailable = TEXT
        notavailable {
          data = LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:tx_quickshop_products.stockprompt.notavailable
          wrap = <div class="notInStock notavailable">|</div>
        }
        refit = TEXT
        refit {
          data = LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:tx_quickshop_products.stockprompt.refit
          wrap = <div class="notInStock refit">|</div>
        }
        selled < .default
      }
        // prompt: not available
      XXX10 = TEXT
      XXX10 {
        data = LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:phrase_notInStock
        wrap = <div class="notInStock">|</div>
      }
    }
  }
}
  // plugin.tx_quickshop.templates.form

plugin.tx_quickshop.templates.formWiSelect < plugin.tx_quickshop.templates.form
plugin.tx_quickshop.templates.formWiSelect {
  10 {
    10 < plugin.tx_caddy_pi1.templates.html.form.order.foundation.5x.wiSelect
  }
  20 {
    10 {
      10 < plugin.tx_caddy_pi1.templates.html.form.order.foundation.5x.wiSelect
    }
  }
}

  //////////////////////////////////////
  //
  // plugin.tx_quickshop.templates.tax

plugin.tx_quickshop.templates.tax = CASE
plugin.tx_quickshop.templates.tax {
  key {
    field = tx_quickshop_products.tax
  }
  # reduced tax
  1 = TEXT
  1 {
    value = 7% VAT included
    lang {
      de = inkl. 7% MwSt.
      en = 7% VAT included
    }
  }
  2 = TEXT
  2 {
    value = 19% VAT included
    lang {
      de = inkl. 19% MwSt.
      en = 19% VAT included
    }
  }
}
  // plugin.tx_quickshop.templates.tax