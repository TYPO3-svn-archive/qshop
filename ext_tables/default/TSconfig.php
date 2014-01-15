<?php
if (!defined ('TYPO3_MODE'))
{
  die ('Access denied.');
}

$path = PATH_typo3conf . 'ext/quick_shop/tsConfig/page/tx_linkhandler/default/';

  // Items
require_once( $path . 'tx_quickshop_products.php' );

?>