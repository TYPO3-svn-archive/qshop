<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

$_EXTKEY = 'quick_shop';

///////////////////////////////////////
//
// Localization support

$bool_LL = FALSE;
$confArr = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'quick_shop' ] );
if ( strtolower( substr( $confArr[ 'LLsupport' ], 0, strlen( 'yes' ) ) ) == 'yes' )
{
  $bool_LL = TRUE;
}

$returnArray = array(
  'ctrl' => array(
    'title' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products',
    'label' => 'title',
    'label_alt' => 'price',
    'label_alt_force' => true,
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'cruser_id' => 'cruser_id',
    'cruser_id' => 'cruser_id',
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'default_sortby' => 'ORDER BY title',
    'delete' => 'deleted',
    'enablecolumns' => array(
      'disabled' => 'hidden',
      'starttime' => 'starttime',
      'endtime' => 'endtime',
      'fe_group' => 'fe_group',
    ),
    'hideAtCopy' => true,
    'dividers2tabs' => true,
    'dynamicConfigFile' => t3lib_extMgm::extPath( $_EXTKEY ) . 'tca.php',
    'thumbnail' => 'image',
    'iconfile' => t3lib_extMgm::extRelPath( $_EXTKEY ) . 'ext_icon.gif',
    'searchFields' => 'sku,title,short,description,'
    . 'datasheet,'
    . 'tx_quickshop_categories,tx_quickshop_dimension,tx_quickshop_material,'
    . 'price,tax,'
    . 'seo_keywords,seo_description'
    ,
    // #69258, 150821, dwildt, 1+
    'filter' => 'filter_for_all_fields',
  ),
  'interface' => array(
    'showRecordFieldList' => ''
    . 'sku,ean,title,short,description,'
    . 'teaser_description,teaser_short,teaser_title,'
    . 'datasheet,'
    . 'filterPrompt,tx_quickshop_categories,tx_quickshop_dimension,tx_quickshop_material,'
    . 'price,tax,stockquantity,stockmanagement,quantity_min,quantity_max,tx_quickshop_shippingcosts,'
    . 'image,imagewidth,imageheight,imageorient,imagecols,'
    . 'imageborder,image_frames,image_link,image_zoom,'
    . 'image_noRows,image_effects,image_compression,imageseo,'
    . 'caption,caption_position,'
    . 'hidden,starttime,endtime,fe_group,'
    . 'seo_keywords,seo_description'
  ),
  'columns' => array(
    'sku' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.sku',
      'config' => array(
        'type' => 'input',
        'size' => '30',
        'eval' => 'trim',
      )
    ),
    'ean' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.ean',
      'config' => array(
        'type' => 'input',
        'size' => '30',
        'eval' => 'trim',
      )
    ),
    'title' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.title',
      'config' => array(
        'type' => 'input',
        'size' => '30',
        'eval' => 'trim,required',
      )
    ),
    'short' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.short',
      'config' => array(
        'type' => 'text',
        'cols' => '30',
        'rows' => '5',
      )
    ),
    'teaser_description' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.teaser_description',
      'config' => array(
        'type' => 'text',
        'cols' => '30',
        'rows' => '5',
      )
    ),
    'teaser_short' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.teaser_short',
      'config' => array(
        'type' => 'input',
        'size' => '30',
        'eval' => 'trim',
      )
    ),
    'teaser_title' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.teaser_title',
      'config' => array(
        'type' => 'input',
        'size' => '30',
        'eval' => 'trim',
      )
    ),
    'datasheet' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.datasheet',
      'config' => array(
        'type' => 'text',
        'cols' => '30',
        'rows' => '5',
        'wizards' => array(
          '_PADDING' => 2,
          'RTE' => array(
            'notNewRecords' => 1,
            'RTEonly' => 1,
            'type' => 'script',
            'title' => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
            'icon' => 'wizard_rte2.gif',
            'script' => 'wizard_rte.php',
          ),
          'table' => $TCA[ 'tt_content' ][ 'columns' ][ 'bodytext' ][ 'config' ][ 'wizards' ][ 'table' ],
        ),
      )
    ),
    'description' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.description',
      'config' => array(
        'type' => 'text',
        'cols' => '30',
        'rows' => '5',
        'eval' => 'trim',
        'wizards' => array(
          '_PADDING' => 2,
          'RTE' => array(
            'notNewRecords' => 1,
            'RTEonly' => 1,
            'type' => 'script',
            'title' => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
            'icon' => 'wizard_rte2.gif',
            'script' => 'wizard_rte.php',
          ),
        ),
      )
    ),
    'filterPrompt' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.filterPrompt',
      'config' => array(
        'type' => 'user',
        'userFunc' => 'tx_quickshop_userfunc->tcaFilterPrompt',
      ),
    ),
    'tx_quickshop_categories' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.tx_quickshop_categories',
      'config' => array(
        'type' => 'select',
        'size' => 10,
        'minitems' => 0,
        'maxitems' => 10,
        'MM' => 'tx_quickshop_mm',
        "MM_match_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_categories'
        ),
        "MM_insert_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_categories'
        ),
        'foreign_table' => 'tx_quickshop_categories',
        'foreign_table_where' => 'AND tx_quickshop_categories.pid=###CURRENT_PID### ORDER BY tx_quickshop_categories.uid',
        'form_type' => 'user',
        'userFunc' => 'tx_cpstcatree->getTree',
        'treeView' => 1,
        'expandable' => 1,
        'expandFirst' => 0,
        'expandAll' => 0,
        'wizards' => array(
          '_PADDING' => 2,
          '_VERTICAL' => 1,
          'add' => array(
            'type' => 'script',
            'title' => 'Create new record',
            'icon' => 'add.gif',
            'params' => array(
              'table' => 'tx_quickshop_categories',
              'pid' => '###CURRENT_PID###',
              'setValue' => 'prepend'
            ),
            'script' => 'wizard_add.php',
          ),
          'list' => array(
            'type' => 'script',
            'title' => 'List',
            'icon' => 'list.gif',
            'params' => array(
              'table' => 'tx_quickshop_categories',
              'pid' => '###CURRENT_PID###',
            ),
            'script' => 'wizard_list.php',
          ),
          'edit' => array(
            'type' => 'popup',
            'title' => 'Edit',
            'script' => 'wizard_edit.php',
            'popup_onlyOpenIfSelected' => 1,
            'icon' => 'edit2.gif',
            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
          ),
        ),
      ),
      // #69258, 150821, dwildt, +
      'config_filter' => array(
        'type' => 'select',
        'size' => 1,
        'MM' => 'tx_quickshop_mm',
        "MM_match_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_categories'
        ),
        "MM_insert_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_categories'
        ),
        'foreign_table' => 'tx_quickshop_categories',
        'foreign_table_where' => 'AND tx_quickshop_categories.pid=###CURRENT_PID### ORDER BY tx_quickshop_categories.uid',
        'items' => array(
          'empty' => array(
            '0' => '',
            '1' => '',
          ),
        ),
      ),
    ),
    'tx_quickshop_dimension' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.tx_quickshop_dimension',
      'config' => array(
        'type' => 'select',
        'size' => 10,
        'minitems' => 0,
        'maxitems' => 10,
        'MM' => 'tx_quickshop_mm',
        "MM_match_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_dimension'
        ),
        "MM_insert_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_dimension'
        ),
        'foreign_table' => 'tx_quickshop_dimension',
        'foreign_table_where' => 'AND tx_quickshop_dimension.pid=###CURRENT_PID### ORDER BY tx_quickshop_dimension.title',
//        'form_type'           => 'user',
//        'userFunc'            => 'tx_cpstcatree->getTree',
//        'treeView'            => 1,
//        'expandable'          => 1,
//        'expandFirst'         => 0,
//        'expandAll'           => 0,
        'wizards' => array(
          '_PADDING' => 2,
          '_VERTICAL' => 1,
          'add' => array(
            'type' => 'script',
            'title' => 'Create new record',
            'icon' => 'add.gif',
            'params' => array(
              'table' => 'tx_quickshop_dimension',
              'pid' => '###CURRENT_PID###',
              'setValue' => 'prepend'
            ),
            'script' => 'wizard_add.php',
          ),
          'list' => array(
            'type' => 'script',
            'title' => 'List',
            'icon' => 'list.gif',
            'params' => array(
              'table' => 'tx_quickshop_dimension',
              'pid' => '###CURRENT_PID###',
            ),
            'script' => 'wizard_list.php',
          ),
          'edit' => array(
            'type' => 'popup',
            'title' => 'Edit',
            'script' => 'wizard_edit.php',
            'popup_onlyOpenIfSelected' => 1,
            'icon' => 'edit2.gif',
            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
          ),
        ),
      ),
      // #69258, 150821, dwildt, +
      'config_filter' => array(
        'type' => 'select',
        'size' => 1,
        'MM' => 'tx_quickshop_mm',
        "MM_match_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_dimension'
        ),
        "MM_insert_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_dimension'
        ),
        'foreign_table' => 'tx_quickshop_dimension',
        'foreign_table_where' => 'AND tx_quickshop_dimension.pid=###CURRENT_PID### ORDER BY tx_quickshop_dimension.title',
        'items' => array(
          'empty' => array(
            '0' => '',
            '1' => '',
          ),
        ),
      ),
    ),
    'tx_quickshop_material' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.tx_quickshop_material',
      'config' => array(
        'type' => 'select',
        'size' => 10,
        'minitems' => 0,
        'maxitems' => 10,
        'MM' => 'tx_quickshop_mm',
        "MM_match_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_material'
        ),
        "MM_insert_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_material'
        ),
        'foreign_table' => 'tx_quickshop_material',
        'foreign_table_where' => 'AND tx_quickshop_material.pid=###CURRENT_PID### ORDER BY tx_quickshop_material.title',
//        'form_type'           => 'user',
//        'userFunc'            => 'tx_cpstcatree->getTree',
//        'treeView'            => 1,
//        'expandable'          => 1,
//        'expandFirst'         => 0,
//        'expandAll'           => 0,
        'wizards' => array(
          '_PADDING' => 2,
          '_VERTICAL' => 1,
          'add' => array(
            'type' => 'script',
            'title' => 'Create new record',
            'icon' => 'add.gif',
            'params' => array(
              'table' => 'tx_quickshop_material',
              'pid' => '###CURRENT_PID###',
              'setValue' => 'prepend'
            ),
            'script' => 'wizard_add.php',
          ),
          'list' => array(
            'type' => 'script',
            'title' => 'List',
            'icon' => 'list.gif',
            'params' => array(
              'table' => 'tx_quickshop_material',
              'pid' => '###CURRENT_PID###',
            ),
            'script' => 'wizard_list.php',
          ),
          'edit' => array(
            'type' => 'popup',
            'title' => 'Edit',
            'script' => 'wizard_edit.php',
            'popup_onlyOpenIfSelected' => 1,
            'icon' => 'edit2.gif',
            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
          ),
        ),
      ),
      // #69258, 150821, dwildt, +
      'config_filter' => array(
        'type' => 'select',
        'size' => 1,
        'MM' => 'tx_quickshop_mm',
        "MM_match_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_material'
        ),
        "MM_insert_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_material'
        ),
        'foreign_table' => 'tx_quickshop_material',
        'foreign_table_where' => 'AND tx_quickshop_material.pid=###CURRENT_PID### ORDER BY tx_quickshop_material.title',
        'items' => array(
          'empty' => array(
            '0' => '',
            '1' => '',
          ),
        ),
      ),
    ),
    'price' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 0,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.price',
      'config' => array(
        'type' => 'input',
        'size' => '30',
        'eval' => 'required,double2,nospace',
      )
    ),
    'tax' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 0,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.tax',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array( 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.tax.I.0', '1' ),
          array( 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.tax.I.1', '2' ),
        ),
        'size' => 1,
        'maxitems' => 1,
        'eval' => 'required',
      )
    ),
    'stockmanagement' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.stockmanagement',
      'config' => array(
        'type' => 'check',
        'default' => 0,
      )
    ),
    'stockquantity' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.stockquantity',
      'config' => array(
        'type' => 'input',
        'size' => '10',
        'eval' => 'int',
        'default' => 1
      )
    ),
    'quantity_min' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.quantity_min',
      'config' => array(
        'type' => 'input',
        'size' => '10',
        'eval' => 'int',
      )
    ),
    'quantity_max' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.quantity_max',
      'config' => array(
        'type' => 'input',
        'size' => '10',
        'eval' => 'int',
      )
    ),
    'tx_quickshop_shippingcosts' => array(
      'l10n_mode' => 'exclude',
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.tx_quickshop_shippingcosts',
      'config' => array(
        'type' => 'select',
        'size' => 10,
        'minitems' => 0,
        'maxitems' => 1,
        'MM' => 'tx_quickshop_mm',
        "MM_match_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_shippingcosts'
        ),
        "MM_insert_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_shippingcosts'
        ),
        'foreign_table' => 'tx_quickshop_shippingcosts',
        'foreign_table_where' => 'AND tx_quickshop_shippingcosts.pid=###CURRENT_PID### ORDER BY tx_quickshop_shippingcosts.value',
        'wizards' => array(
          '_PADDING' => 2,
          '_VERTICAL' => 1,
          'add' => array(
            'type' => 'script',
            'title' => 'Create new record',
            'icon' => 'add.gif',
            'params' => array(
              'table' => 'tx_quickshop_shippingcosts',
              'pid' => '###CURRENT_PID###',
              'setValue' => 'prepend'
            ),
            'script' => 'wizard_add.php',
          ),
          'list' => array(
            'type' => 'script',
            'title' => 'List',
            'icon' => 'list.gif',
            'params' => array(
              'table' => 'tx_quickshop_shippingcosts',
              'pid' => '###CURRENT_PID###',
            ),
            'script' => 'wizard_list.php',
          ),
          'edit' => array(
            'type' => 'popup',
            'title' => 'Edit',
            'script' => 'wizard_edit.php',
            'popup_onlyOpenIfSelected' => 1,
            'icon' => 'edit2.gif',
            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
          ),
        ),
      ),
      // #69258, 150821, dwildt, +
      'config_filter' => array(
        'type' => 'select',
        'size' => 1,
        'MM' => 'tx_quickshop_mm',
        "MM_match_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_shippingcosts'
        ),
        "MM_insert_fields" => array(
          'table_local' => 'tx_quickshop_products',
          'table_foreign' => 'tx_quickshop_shippingcosts'
        ),
        'foreign_table' => 'tx_quickshop_shippingcosts',
        'foreign_table_where' => 'AND tx_quickshop_shippingcosts.pid=###CURRENT_PID### ORDER BY tx_quickshop_shippingcosts.value',
        'items' => array(
          'empty' => array(
            '0' => '',
            '1' => '',
          ),
        ),
      ),
    ),
    'image' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.image',
      'config' => array(
        'type' => 'group',
        'internal_type' => 'file',
        'allowed' => $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'GFX' ][ 'imagefile_ext' ],
        'max_size' => $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'BE' ][ 'maxFileSize' ],
        'uploadfolder' => 'uploads/tx_quickshop',
        'show_thumbs' => 1,
        'size' => 10,
        'minitems' => 0,
        'maxitems' => 20,
      )
    ),
    'imageseo' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.imageseo',
      'config' => array(
        'type' => 'text',
        'cols' => '30',
        'rows' => '5',
      )
    ),
    'imagewidth' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:imagewidth',
      'config' => array(
        'type' => 'input',
        'size' => '6',
        'max' => '6',
        'eval' => 'trim',
        'checkbox' => '0',
        'default' => 0
      )
    ),
    'imageheight' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:imageheight',
      'config' => array(
        'type' => 'input',
        'size' => '6',
        'max' => '6',
        'eval' => 'trim',
        'checkbox' => '0',
        'default' => 0
      )
    ),
    'imageorient' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:imageorient',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.0', 0, 'selicons/above_center.gif' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.1', 1, 'selicons/above_right.gif' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.2', 2, 'selicons/above_left.gif' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.3', 8, 'selicons/below_center.gif' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.4', 9, 'selicons/below_right.gif' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.5', 10, 'selicons/below_left.gif' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.6', 17, 'selicons/intext_right.gif' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.7', 18, 'selicons/intext_left.gif' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.8', '--div--' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.9', 25, 'selicons/intext_right_nowrap.gif' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imageorient.I.10', 26, 'selicons/intext_left_nowrap.gif' )
        ),
        'selicon_cols' => 6,
        'default' => '0',
        'iconsInOptionTags' => 1,
      )
    ),
    'imageborder' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:imageborder',
      'config' => array(
        'type' => 'check'
      )
    ),
    'image_noRows' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:image_noRows',
      'config' => array(
        'type' => 'check'
      )
    ),
    'image_1stforlistonly' => array(
      'exclude' => $bool_exclude_default,
      'l10n_mode' => 'exclude',
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tca_phrase.image_1stforlistonly',
      'config' => array(
        'type' => 'check'
      ),
    ),
    'image_link' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:image_link',
      'config' => array(
        'type' => 'input',
        'size' => '15',
        'max' => '256',
        'checkbox' => '',
        'eval' => 'trim',
        'wizards' => array(
          '_PADDING' => 2,
          'link' => array(
            'type' => 'popup',
            'title' => 'Link',
            'icon' => 'link_popup.gif',
            'script' => 'browse_links.php?mode=wizard',
            'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
          )
        ),
        'softref' => 'typolink[linkList]'
      )
    ),
    'image_zoom' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:image_zoom',
      'config' => array(
        'type' => 'check'
      )
    ),
    'image_effects' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:image_effects',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array( 'LLL:EXT:cms/locallang_ttc.php:image_effects.I.0', 0 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_effects.I.1', 1 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_effects.I.2', 2 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_effects.I.3', 3 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_effects.I.4', 10 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_effects.I.5', 11 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_effects.I.6', 20 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_effects.I.7', 23 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_effects.I.8', 25 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_effects.I.9', 26 )
        )
      )
    ),
    'image_frames' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:image_frames',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array( 'LLL:EXT:cms/locallang_ttc.php:image_frames.I.0', 0 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_frames.I.1', 1 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_frames.I.2', 2 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_frames.I.3', 3 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_frames.I.4', 4 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_frames.I.5', 5 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_frames.I.6', 6 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_frames.I.7', 7 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_frames.I.8', 8 )
        )
      )
    ),
    'image_compression' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:image_compression',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array( 'LLL:EXT:lang/locallang_general.php:LGL.default_value', 0 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_compression.I.1', 1 ),
          array( 'GIF/256', 10 ),
          array( 'GIF/128', 11 ),
          array( 'GIF/64', 12 ),
          array( 'GIF/32', 13 ),
          array( 'GIF/16', 14 ),
          array( 'GIF/8', 15 ),
          array( 'PNG', 39 ),
          array( 'PNG/256', 30 ),
          array( 'PNG/128', 31 ),
          array( 'PNG/64', 32 ),
          array( 'PNG/32', 33 ),
          array( 'PNG/16', 34 ),
          array( 'PNG/8', 35 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_compression.I.15', 21 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_compression.I.16', 22 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_compression.I.17', 24 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_compression.I.18', 26 ),
          array( 'LLL:EXT:cms/locallang_ttc.php:image_compression.I.19', 28 )
        )
      )
    ),
    'imagecols' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:imagecols',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array( '1', 1 ),
          array( '2', 2 ),
          array( '3', 3 ),
          array( '4', 4 ),
          array( '5', 5 ),
          array( '6', 6 ),
          array( '7', 7 ),
          array( '8', 8 )
        ),
        'default' => 1
      )
    ),
    'caption' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.caption',
      'config' => array(
        'type' => 'text',
        'cols' => '30',
        'rows' => '5',
      )
    ),
    'caption_position' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_ttc.php:imagecaption_position',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array( '', '' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imagecaption_position.I.1', 'center' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imagecaption_position.I.2', 'right' ),
          array( 'LLL:EXT:cms/locallang_ttc.php:imagecaption_position.I.3', 'left' )
        ),
        'default' => ''
      )
    ),
    'hidden' => array(
      'exclude' => 1,
      'l10n_mode' => 'exclude',
      'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
      'config' => array(
        'type' => 'check',
        'default' => '0'
      ),
    ),
    'starttime' => array(
      'exclude' => 1,
      'l10n_mode' => 'exclude',
      'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
      'config' => array(
        'type' => 'input',
        'size' => '8',
        'max' => '20',
        'eval' => 'date',
        'default' => '0',
        'checkbox' => '0'
      ),
    ),
    'endtime' => array(
      'exclude' => 1,
      'l10n_mode' => 'exclude',
      'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
      'config' => array(
        'type' => 'input',
        'size' => '8',
        'max' => '20',
        'eval' => 'date',
        'checkbox' => '0',
        'default' => '0',
      ),
    ),
    'fe_group' => array(
      'exclude' => 1,
      //'l10n_mode'   => 'mergeIfNotBlank',
      'label' => 'LLL:EXT:lang/locallang_general.php:LGL.fe_group',
      'config' => array(
        'type' => 'select',
        'size' => 10,
        'maxitems' => 20,
        'items' => array(
          array( 'LLL:EXT:lang/locallang_general.php:LGL.hide_at_login', -1 ),
          array( 'LLL:EXT:lang/locallang_general.php:LGL.any_login', -2 ),
          array( 'LLL:EXT:lang/locallang_general.php:LGL.usergroups', '--div--' ),
        ),
        'exclusiveKeys' => '-1,-2',
        'foreign_table' => 'fe_groups'
      ),
    ),
    'seo_keywords' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tca_phrase.seo_keywords',
      'l10n_mode' => 'prefixLangTitle',
      'config' => array(
        'type' => 'input',
        'size' => '80',
        'eval' => 'trim'
      ),
    ),
    'seo_description' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:quick_shop/locallang_db.xml:tca_phrase.seo_description',
      'l10n_mode' => 'prefixLangTitle',
      'config' => array(
        'type' => 'text',
        'cols' => '50',
        'rows' => '10',
      ),
    ),
  ),
  'types' => array(
    '0' => array(
      'showitem' => null
      . '--div--;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.div.product,'
      . '--palette--;LLL:EXT:quick_shop/locallang_db.xml:palette.skuean;skuean,'
      . 'title;;;;2-2-2, short;;;;3-3-3, description;;;richtext[]:rte_transform[mode=ts],'
      . '--div--;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.div_teaser,'
      . '  teaser_title,teaser_short,teaser_description,'
      . '--div--;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.div.datasheet,'
      . 'layout;;10;;3-3-3, cols, datasheet;;9;nowrap:wizards[table], pi_flexform,'
      . '--div--;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.div.filter,'
      . 'filterPrompt,tx_quickshop_categories,tx_quickshop_dimension,tx_quickshop_material,'
      . '--div--;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.div.price_quantity,'
      . '--palette--;LLL:EXT:quick_shop/locallang_db.xml:palette.price;price,'
      . '--palette--;LLL:EXT:quick_shop/locallang_db.xml:palette.stockmanagement;stockmanagement,'
      . '--palette--;LLL:EXT:quick_shop/locallang_db.xml:palette.quantity;quantity,'
      . 'tx_quickshop_shippingcosts,'
      . '--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.images,'
      . '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imagefiles;imagefiles,'
      . '  --palette--;LLL:EXT:quick_shop/locallang_db.xml:palette.image_1stforlistonly;image_1stforlistonly,'
      . '--palette--;LLL:EXT:quick_shop/locallang_db.xml:palette.image_accessibility;image_accessibility,'
      . '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imageblock;imageblock,'
      . '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imagelinks;imagelinks,'
      . '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_settings;image_settings,'
      . '--div--;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.div.control,'
      . 'hidden,'
      . '--palette--;LLL:EXT:quick_shop/locallang_db.xml:palette.startendtime;startendtime,'
      . 'fe_group,'
      . '--div--;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.div.seo,'
      . 'seo_keywords, seo_description,'
    ,
    ),
  ),
  'palettes' => array(
    '1' => array( 'showitem' => '' ),
    'image_1stforlistonly' => array(
      'showitem' => 'image_1stforlistonly;LLL:EXT:quick_shop/locallang_db.xml:tca_phrase.image_1stforlistonly,',
      'canNotCollapse' => 1,
    ),
    'image_accessibility' => array(
      'showitem' => 'imageseo;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.imageseo,',
      'canNotCollapse' => 1,
    ),
    'imageblock' => array(
      'showitem' => 'imageorient;LLL:EXT:cms/locallang_ttc.xml:imageorient_formlabel, imagecols;LLL:EXT:cms/locallang_ttc.xml:imagecols_formlabel, --linebreak--,' .
      'image_noRows;LLL:EXT:cms/locallang_ttc.xml:image_noRows_formlabel,caption_position;LLL:EXT:cms/locallang_ttc.xml:imagecaption_position_formlabel',
      'canNotCollapse' => 1,
    ),
    'imagefiles' => array(
      'showitem' => 'image;LLL:EXT:cms/locallang_ttc.xml:image_formlabel,caption;LLL:EXT:cms/locallang_ttc.xml:imagecaption_formlabel,',
      'canNotCollapse' => 1,
    ),
    'imagelinks' => array(
      'showitem' => 'image_zoom;LLL:EXT:cms/locallang_ttc.xml:image_zoom_formlabel, image_link;LLL:EXT:cms/locallang_ttc.xml:image_link_formlabel',
      'canNotCollapse' => 1,
    ),
    'image_settings' => array(
      'showitem' => 'imagewidth;LLL:EXT:cms/locallang_ttc.xml:imagewidth_formlabel, imageheight;LLL:EXT:cms/locallang_ttc.xml:imageheight_formlabel, imageborder;LLL:EXT:cms/locallang_ttc.xml:imageborder_formlabel, --linebreak--,' .
      'image_compression;LLL:EXT:cms/locallang_ttc.xml:image_compression_formlabel, image_effects;LLL:EXT:cms/locallang_ttc.xml:image_effects_formlabel, image_frames;LLL:EXT:cms/locallang_ttc.xml:image_frames_formlabel',
      'canNotCollapse' => 1,
    ),
    'price' => array(
      'showitem' => 'price;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.price,tax;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.tax,',
      'canNotCollapse' => 1,
    ),
    'quantity' => array(
      'showitem' => 'quantity_min;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.quantity_min,quantity_max;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.quantity_max,',
      'canNotCollapse' => 1,
    ),
    'skuean' => array(
      'showitem' => 'sku;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.sku,ean;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.ean,',
      'canNotCollapse' => 1,
    ),
    'startendtime' => array(
      'showitem' => 'starttime;LLL:EXT:lang/locallang_general.xml:LGL.starttime,endtime;LLL:EXT:lang/locallang_general.xml:LGL.endtime,',
      'canNotCollapse' => 1,
    ),
    'stockmanagement' => array(
      'showitem' => 'stockmanagement;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.stockmanagement,stockquantity;LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products.stockquantity,',
      'canNotCollapse' => 1,
    ),
  )
);

$returnArray[ 'columns' ][ 'cols' ] = $TCA[ 'tt_content' ][ 'columns' ][ 'cols' ];
$returnArray[ 'columns' ][ 'pi_flexform' ] = $TCA[ 'tt_content' ][ 'columns' ][ 'pi_flexform' ];
unset( $returnArray[ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds' ] );
unset( $returnArray[ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds_pointerField' ] );
unset( $returnArray[ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'search' ] );
$returnArray[ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds' ][ 'default' ] = 'FILE:EXT:css_styled_content/flexform_ds.xml';
$returnArray[ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds_pointerField' ] = 'title';

// Localization support
if ( $bool_LL )
{
  // Add language overlay fields to showRecordFieldList
  $showRecordFieldList = $returnArray[ 'interface' ][ 'showRecordFieldList' ];
  $TCA[ 'tx_jobmarket_sectorgroup' ][ 'interface' ][ 'tx_quickshop_products' ] = $showRecordFieldList . ',sys_language_uid,l10n_parent,l10n_diffsource';
  // Add language overlay fields to showRecordFieldList
  // Add localization fields to columns array
  $returnArray[ 'columns' ][ 'sys_language_uid' ] = array
    (
    'l10n_mode' => 'exclude',
    'exclude' => 1,
    'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
    'config' => array(
      'type' => 'select',
      'foreign_table' => 'sys_language',
      'foreign_table_where' => 'ORDER BY sys_language.title',
      'items' => array(
        array( 'LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1 ),
        array( 'LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0 )
      )
    )
  );
  $returnArray[ 'columns' ][ 'l10n_parent' ] = array
    (
    'l10n_mode' => 'exclude',
    'displayCond' => 'FIELD:sys_language_uid:>:0',
    'exclude' => 1,
    'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
    'config' => array(
      'type' => 'select',
      'items' => array(
        array( '', 0 ),
      ),
      'foreign_table' => 'tx_quickshop_products',
      'foreign_table_where' => 'AND tx_quickshop_products.pid=###CURRENT_PID### AND tx_quickshop_products.sys_language_uid IN (-1,0)',
    )
  );
  $returnArray[ 'columns' ][ 'l10n_diffsource' ] = array
    (
    'config' => array(
      'type' => 'passthrough'
    )
  );
  // Add localization fields to columns array
}

return $returnArray;