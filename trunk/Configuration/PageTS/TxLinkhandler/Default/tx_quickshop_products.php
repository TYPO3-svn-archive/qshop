<?php

if (!defined ('TYPO3_MODE'))
{
  die ('Access denied.');
}

  // Should tx_quickshop_products included?
$includeIt = $confArr['linkhandler.']['tx_quickshop_products'];

  // RETURN : tx_quickshop_products should not include
switch( $includeIt ) 
{
  case( 'No' ):
    return;
    break;
  case( 'Yes (recommended)' ):
  default:
    // follow the workflow
    break;
}
  // RETURN : tx_quickshop_products should not include


  // Init tsConfig
$tsConfig = '

mod.tx_linkhandler {
  tx_quickshop_products {
    label       = Items (quick_shop)
    listTables  = tx_quickshop_products
    %onlyPids%
  }
}

RTE.default.tx_linkhandler.tx_quickshop_products < mod.tx_linkhandler.tx_quickshop_products
';

$onlyPids = $confArr['linkhandler.']['tx_quickshop_products.']['onlyPids'];

switch( true )
{
  case( ! empty ( $onlyPids ) ):
    $onlyPids = 'onlyPids    = ' . $onlyPids;
    break;
  case( empty ( $onlyPids ) ):
  default;
    $onlyPids = null;
    break;  
}

$tsConfig = str_replace( '%onlyPids%', $onlyPids, $tsConfig );
t3lib_extMgm::addPageTSConfig( $tsConfig );

return;

?>
