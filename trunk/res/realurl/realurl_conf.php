<?php

  //////////////////////////////////
  //
  // TEMPLATE
  
  // Template file for
  // typo3conf/realurl_conf.php


  //////////////////////////////////
  //
  // Default real URL configuration

$TYPO3_CONF_VARS['EXTCONF']['realurl'] = array
(
  '_DEFAULT' => array
  (
    'init' => array
    (
      'respectSimulateStaticURLs' => 0,
      'enableCHashCache'          => 1,
      'appendMissingSlash'        => 'ifNotFile',
      'enableUrlDecodeCache'      => 1,
      'enableUrlEncodeCache'      => 1,
      'reapplyAbsRefPrefix'       => 1,
    ),
    'pagePath' => array
    (
      'type'              => 'user',
      'userFunc'          => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
      'spaceCharacter'    => '-',
      'languageGetVar'    => 'L',
      'expireDays'        => 7,
      'rootpage_id'       => 0,
      'firstHitPathCache' => 1,
    ),
    'preVars' => array
    (
      array
      (
        'GETvar'    => 'no_cache',
        'valueMap'  => array
        (
          'nc' => 1,
        ),
        'noMatch' => 'bypass',
      ),
    ),
  ),
);


  ////////////////////////////////////////////
  //
  // Real URL configuration for quick shop

$domain       = 'typo3-quick-shop.de';  // <- your domain without any protocol (like: http://) and without any slash
$rootpage_id  = 1;                      // <- your rootpage id

$TYPO3_CONF_VARS['EXTCONF']['realurl'][$domain] = $TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'];
$TYPO3_CONF_VARS['EXTCONF']['realurl'][$domain]['pagePath']['rootpage_id'] = $rootpage_id;    

$TYPO3_CONF_VARS['EXTCONF']['realurl'][$domain]['postVarSets']['_DEFAULT'] = array(
  'produkt' => array(
    array(
      'GETvar'      => 'tx_browser_pi1[showUid]' ,
      'lookUpTable' => array(
        'table'               => 'tx_quickshop_products',
        'id_field'            => 'uid',
        'alias_field'         => 'title',
        'addWhereClause'      => ' AND NOT deleted AND NOT hidden',
        'useUniqueCache'      => 1,
        'useUniqueCache_conf' => array(
          'strtolower'     => 1,
          'spaceCharacter' => '-',
        ),
      ),
    ),
  ),
  'index' => array(
    array(
      'GETvar' => 'tx_browser_pi1[azTab]' ,
    ),
  ),
  'ansicht' => array(
    array(
      'GETvar' => 'tx_browser_pi1[mode]' ,
    ),
  ),
  'seite' => array(
    array(
      'GETvar' => 'tx_browser_pi1[pointer]' ,
    ),
  ),
  'element' => array(
    array(
      'GETvar'      => 'tx_browser_pi1[plugin]' ,
      'lookUpTable' => array(
        'table'               => 'tt_content',
        'id_field'            => 'uid',
        'alias_field'         => 'header',
        'addWhereClause'      => ' AND NOT deleted AND NOT hidden',
        'useUniqueCache'      => 1,
        'useUniqueCache_conf' => array(
          'strtolower'     => 1,
          'spaceCharacter' => '-',
        ),
      ),
    ),
  ),
  'sort' => array(
    array(
     'GETvar' => 'tx_browser_pi1[sort]' ,
    ),
  ),
  'suche' => array(
    array(
      'GETvar' => 'tx_browser_pi1[sword]' ,
    ),
  ),
);

?>