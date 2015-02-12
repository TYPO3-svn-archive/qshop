<?php

if (!defined ('TYPO3_MODE'))
{
  die ('Access denied.');
}

  ///////////////////////////////////////////////////////////
  //
  // INDEX

  // Methods for backend workflows
  // TCA for tables
  // Get extension configuration
  // Add static template
  // Add pagetree icons



  ///////////////////////////////////////////////////////////
  //
  // Methods for backend workflows

require_once(t3lib_extMgm::extPath( $_EXTKEY ) . 'lib/userfunc/class.tx_quickshop_userfunc.php' );
  // Methods for backend workflows



    ////////////////////////////////////
    //
    // TCA for tables

    // Products
  $TCA['tx_quickshop_products'] = array (
    'ctrl' => array (
      'title'                     => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products',
      'label'                     => 'title',
      'label_alt'                 => 'price',
      'label_alt_force'           => true,
      'tstamp'                    => 'tstamp',
      'crdate'                    => 'crdate',
      'cruser_id'                 => 'cruser_id',
      'cruser_id'                 => 'cruser_id',
      'languageField'             => 'sys_language_uid',
      'transOrigPointerField'     => 'l10n_parent',
      'transOrigDiffSourceField'  => 'l10n_diffsource',
      'default_sortby'            => 'ORDER BY title',
      'delete'                    => 'deleted',
      'enablecolumns'             => array (
        'disabled'  => 'hidden',
        'starttime' => 'starttime',
        'endtime'   => 'endtime',
        'fe_group'  => 'fe_group',
      ),
      'hideAtCopy'        => true,
      'dividers2tabs'     => true,
      'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
      'thumbnail'         => 'image',
      'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
      'searchFields'      =>  'sku,title,short,description,' .
                              'datasheet,' .
                              'category,dimension,material,' .
                              'price,tax,' .
                              'seo_keywords,seo_description'
    ),
  );
    // Products
    // Categories
  $TCA['tx_quickshop_categories'] = array (
    'ctrl' => array (
      'title'     => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_categories',
      'label'     => 'title',
      'tstamp'    => 'tstamp',
      'crdate'    => 'crdate',
      'cruser_id' => 'cruser_id',
      'delete'    => 'deleted',
      'enablecolumns' => array (
        'disabled' => 'hidden',
      ),
      'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
      'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
      'searchFields'      => 'title',
      'treeParentField'   => 'uid_parent',
    ),
  );
    // Categories

    // Dimension
  $TCA['tx_quickshop_dimension'] = array (
    'ctrl' => array (
      'title'             => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_dimension',
      'label'             => 'title',
      'tstamp'            => 'tstamp',
      'crdate'            => 'crdate',
      'cruser_id'         => 'cruser_id',
      'default_sortby'    => 'ORDER BY title',
      'delete'            => 'deleted',
      'enablecolumns'     => array (
        'disabled' => 'hidden',
      ),
      'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
      'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
      'searchFields'      => 'title',
      //'treeParentField'   => 'uid_parent',
    ),
  );
    // Dimension

    // Material
  $TCA['tx_quickshop_material'] = array (
    'ctrl' => array (
      'title'             => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_material',
      'label'             => 'title',
      'tstamp'            => 'tstamp',
      'crdate'            => 'crdate',
      'cruser_id'         => 'cruser_id',
      'default_sortby'    => 'ORDER BY title',
      'delete'            => 'deleted',
      'enablecolumns'     => array (
        'disabled' => 'hidden',
      ),
      'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
      'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
      'searchFields'      => 'title',
      //'treeParentField'   => 'uid_parent',
    ),
  );
    // Material
    // Shippingcosts
  $TCA['tx_quickshop_shippingcosts'] = array (
    'ctrl' => array (
      'title'             => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_shippingcosts',
      'label'             => 'value',
      'label_alt'         => 'title',
      'label_alt_force'   => true,
      'tstamp'            => 'tstamp',
      'crdate'            => 'crdate',
      'cruser_id'         => 'cruser_id',
      'default_sortby'    => 'ORDER BY value',
      'delete'            => 'deleted',
      'enablecolumns'     => array (
        'disabled' => 'hidden',
      ),
      'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
      'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
      'searchFields'      => 'title',
    ),
  );
    // Shippingcosts

    // TCA for tables



    ////////////////////////////////////
    //
    // Get extension configuration

  $confArr = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['quick_shop']);
  if (empty ($confArr['tcaProductOrdering']))
  {
    $TCA['tx_quickshop_categories']['ctrl']['default_sortby'] = 'ORDER BY title';
  }
  else
  {
      $TCA['tx_quickshop_products']['ctrl']['sortby'] = 'sorting';
  }
  if (!empty ($confArr['products_on_standardpages']))
  {
    t3lib_extMgm::allowTableOnStandardPages('tx_quickshop_categories');
    t3lib_extMgm::allowTableOnStandardPages('tx_quickshop_dimension');
    t3lib_extMgm::allowTableOnStandardPages('tx_quickshop_material');
    t3lib_extMgm::allowTableOnStandardPages('tx_quickshop_products');
    t3lib_extMgm::allowTableOnStandardPages('tx_quickshop_shippingcosts');
  }
    // get extension configuration



    ////////////////////////////////////
    //
    // Add static template

t3lib_extMgm::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/62037/',       'Quick Shop [1] Basis' );
t3lib_extMgm::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Caddy/',       'Quick Shop [2] + Caddy' );
t3lib_extMgm::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Imagecycle/',  'Quick Shop [9] + ImageCycle: no conflict' );
    // Add static template



    ////////////////////////////////////////////////////////////////////////////
    //
    // Add pagetree icons

  $TCA['pages']['columns']['module']['config']['items'][] =
     array('Quick Shop', 'quickshop', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif');
  // 120613, dwildt, 1-
  //$ICON_TYPES['quick_shop']   = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif');
  // 120613, dwildt, 1+
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-quickshop', '../typo3conf/ext/quick_shop/ext_icon.gif');
    // Add pagetree icons



  /////////////////////////////////////////////////
  //
  // Add default page and user TSconfig

require_once( PATH_typo3conf . 'ext/quick_shop/Configuration/PageTS/TxLinkhandler/Default/tx_quickshop_products.php' );
  // Add default page and user TSconfig
?>
