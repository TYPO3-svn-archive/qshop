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
// Localization support
$returnArray = array(
  'ctrl' => array(
    'title' => 'LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:tx_quickshop_dimension',
    'label' => 'title',
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'cruser_id' => 'cruser_id',
    'default_sortby' => 'ORDER BY title',
    'delete' => 'deleted',
    'enablecolumns' => array(
      'disabled' => 'hidden',
    ),
    'iconfile' => t3lib_extMgm::extRelPath( $_EXTKEY ) . 'ext_icon.gif',
    'searchFields' => 'title',
  //'treeParentField'   => 'uid_parent',
  ),
  'interface' => array(
    //'showRecordFieldList' => 'hidden,title,uid_parent'
    'showRecordFieldList' => 'hidden,title'
  ),
  'columns' => array(
    'hidden' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
      'config' => array(
        'type' => 'check',
        'default' => '0'
      )
    ),
    'title' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:tx_quickshop_dimension.title',
      'config' => array(
        'type' => 'input',
        'size' => '30',
        'eval' => 'required',
      )
    ),
    'uid_parent' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:tx_quickshop_dimension.uid_parent',
      'config' => array(
        'type' => 'select',
        'size' => 1,
        'minitems' => 0,
        'maxitems' => 2,
        'trueMaxItems' => 1,
        'foreign_table' => 'tx_quickshop_dimension',
        'foreign_table_where' => 'AND tx_quickshop_dimension.pid=###CURRENT_PID### ORDER BY tx_quickshop_dimension.title',
        'form_type' => 'user',
        'userFunc' => 'tx_cpstcatree->getTree',
        'treeView' => 1,
        'expandable' => 1,
        'expandFirst' => 0,
        'expandAll' => 0,
      ),
    ),
  ),
  'types' => array(
    //'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;%2%;;2-2-2, uid_parent' )
    '0' => array( 'showitem' => 'hidden;;1;;1-1-1, title;;%2%;;2-2-2' )
  ),
  'palettes' => array(
    '1' => array( 'showitem' => '' ),
    '2' => array( 'showitem' => '%title_lang_ol%' ),
  )
);
// Non localized
// Localization support
if ( $bool_LL )
{
  // Add language overlay fields to showRecordFieldList
  $showRecordFieldList = $returnArray[ 'interface' ][ 'showRecordFieldList' ];
  $returnArray[ 'interface' ][ 'showRecordFieldList' ] = $showRecordFieldList . ',title_lang_ol';
  // Add language overlay fields to showRecordFieldList
  // Add language overlay fields to type
  $showitem = $returnArray[ 'types' ][ '0' ][ 'showitem' ];
  $showitem = str_replace( '%2%', '2', $showitem );
  $returnArray[ 'types' ][ '0' ][ 'showitem' ] = $showitem;
  // Add language overlay fields to type
  // Add language overlay fields to palettes
  $showitem = $returnArray[ 'palettes' ][ '2' ][ 'showitem' ];
  $returnArray[ 'palettes' ][ '2' ][ 'showitem' ] = str_replace( '%title_lang_ol%', 'title_lang_ol', $showitem );
  // Add language overlay fields to palettes
  // Add language overlay fields to columns array
  $returnArray[ 'columns' ][ 'title_lang_ol' ] = array
    (
    'exclude' => 0,
    'label' => 'LLL:EXT:quick_shop/Ressources/Private/Language/locallang_db.xml:tx_quickshop_dimension.title_lang_ol',
    'config' => array(
      'type' => 'input',
      'size' => '30',
    )
  );
  // Add language overlay fields to columns array
}
if ( !$bool_LL )
{
  // Remove language overlay fields from type
  $showitem = $returnArray[ 'types' ][ '0' ][ 'showitem' ];
  $showitem = str_replace( '%2%', '', $showitem );
  $returnArray[ 'types' ][ '0' ][ 'showitem' ] = $showitem;
  // Remove language overlay fields from type
  // Remove language overlay fields from palettes
  $showitem = $returnArray[ 'palettes' ][ '2' ][ 'showitem' ];
  $returnArray[ 'palettes' ][ '2' ][ 'showitem' ] = str_replace( '%title_lang_ol%', '', $showitem );
  // Remove language overlay fields from palettes
}

return $returnArray;