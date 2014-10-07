<?php

  //////////////////////////////////////////////
  //
  // INDEX
  //
  // configuration in principle
  // rootpage_id
  // postVarSets



  //////////////////////////////////////////////
  //
  // configuration in principle

$TYPO3_CONF_VARS['EXTCONF']['realurl'] = array(
  '_DEFAULT' => array(
    'init' => array(
      'respectSimulateStaticURLs' => 0,
      'enableCHashCache'       => 1,
      'appendMissingSlash'     => 'ifNotFile',
      'enableUrlDecodeCache'   => 1,
      'enableUrlEncodeCache'   => 1,
      'reapplyAbsRefPrefix'    => 1,
      'postVarSet_failureMode' => 'redirect_goodUpperDir',
    ),
    'redirects' => array(),
    'preVars' => array(
      array(
        'GETvar' => 'no_cache',
        'valueMap' => array(
          'nc' => 1,
        ),
        'noMatch' => 'bypass',
      ),
      array(
        'GETvar' => 'L',
        'valueMap' => array(
//          'de' => '0',
//          'en' => '1',
        ),
        'noMatch' => 'bypass',
      ),
    ),
    'pagePath' => array(
      'type' => 'user',
      'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
      'spaceCharacter' => '-',
      'languageGetVar' => 'L',
      'expireDays' => 7,
      'rootpage_id' => 0,
      'firstHitPathCache' => 1,
    ),
    'fixedPostVars' => array(),
    'postVarSets'   => array(),
    // configure filenames for different pagetypes
    'fileName' => array(
      'index' => array(
        'druck.html' => array(
          'keyValues' => array(
            'type' => 98,
          ),
        ),
        'rss.xml' => array(
          'keyValues' => array(
            'type' => 100,
          ),
        ),
        'rss091.xml' => array(
          'keyValues' => array(
            'type' => 101,
          ),
        ),
        'rdf.xml' => array(
          'keyValues' => array(
            'type' => 102,
          ),
        ),
        'atom.xml' => array(
          'keyValues' => array(
            'type' => 103,
          ),
        ),
        'druck.html' => array(
          'keyValues' => array(
            'type' => 98,
          ),
        ),
      ),
    ),
  ),
);
  // configuration in principle



  //////////////////////////////////////////////
  //
  // rootpage_id

  // Please configure:
  //  * URL of your website. Here: typo3-quick-shop.de
  //  * ID of the rootpage of your website. Here: 1

$TYPO3_CONF_VARS['EXTCONF']['realurl']['typo3-quick-shop.de'] = $TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'];
$TYPO3_CONF_VARS['EXTCONF']['realurl']['typo3-quick-shop.de']['pagePath']['rootpage_id'] = 1;
  // rootpage_id



  //////////////////////////////////////////////
  //
  // postVarSets

  // Please configure:
  //  * The keys of the postVarSets arrays.
  //    In the example below are used german keys. Adapt it to your needs.

$TYPO3_CONF_VARS['EXTCONF']['realurl']['typo3-quick-shop.de']['postVarSets']['_DEFAULT'] = array(
  'produkt' => array(
    array(
      'GETvar'      => 'tx_browser_pi1[itemUid]' ,
      'lookUpTable' => array(
        'table'               => 'tx_greencars_main',
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
  // postVarSets


?>