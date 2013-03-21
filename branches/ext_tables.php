<?php

if (!defined ('TYPO3_MODE')) 
{
  die ('Access denied.');
}



    ///////////////////////////////////////////////////////////
    //
    // INDEX

    // TCA for tables
    // Get extension configuration
    // Add static template
    // Add pagetree icons



    ////////////////////////////////////
    //
    // TCA for tables

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
    ),
  );
    // Categories

    // Products
  $TCA['tx_quickshop_products'] = array (
    'ctrl' => array (
      'title'                     => 'LLL:EXT:quick_shop/locallang_db.xml:tx_quickshop_products',
      'label'                     => 'title',  
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
      'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
    ),
  );
    // Products
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
    t3lib_extMgm::allowTableOnStandardPages('tx_quickshop_products');
  }
    // get extension configuration



    ////////////////////////////////////
    //
    // Add static template

t3lib_extMgm::addStaticFile( $_EXTKEY, 'static/', 'Quick Shop' );
t3lib_extMgm::addStaticFile( $_EXTKEY, 'static/caddy/', '+Caddy Quick Shop' );
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

?>