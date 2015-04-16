  'paket' => array(
    array(
      'GETvar'      => 'tx_browser_pi1[itemUid]' ,
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
