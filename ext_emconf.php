<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Quick Shop – responsive, ready-to-use, one-click-installation',
	'description' => ''
  . 'http://typo3-quick-shop.de. Quick Shop is optimised for desktops, tablets and smartphones. '
  . 'You are welcome to install Quick Shop with one mouse-click – responsive and ready-to-use. '
  . 'Quick Shop is e-commerce for small budget and small-scale enterprises. '
  . 'Manual: http://typo3-quick-shop.de/typo3conf/ext/quick_shop/doc/manual.pdf',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '6.0.8',
	'dependencies' => 'browser,caddy,cps_devlib,cps_tcatree,css_styled_content,powermail,seo_dynamic_tag',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Dirk Wildt (Die Netzmacher)',
	'author_email' => 'http://wildt.at.die-netzmacher.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'browser' => '6.0.0-',
			'caddy' => '6.0.0-',
      'cps_devlib' => '0.9.1-',
      'cps_tcatree' => '0.4.2-',
			'css_styled_content' => '',
      'linkhandler' => '1.1.0-',
			'seo_dynamic_tag' => '2.4.2-',
			'typo3' => '4.5.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:32:{s:9:"ChangeLog";s:4:"20a4";s:21:"ext_conf_template.txt";s:4:"bf36";s:12:"ext_icon.gif";s:4:"2501";s:14:"ext_tables.php";s:4:"1a51";s:14:"ext_tables.sql";s:4:"ea85";s:16:"locallang_db.xml";s:4:"a01e";s:7:"tca.php";s:4:"6eca";s:14:"doc/manual.pdf";s:4:"d282";s:14:"doc/manual.sxw";s:4:"e957";s:16:"doc/tutorial.pdf";s:4:"a4b5";s:16:"doc/tutorial.sxw";s:4:"cb5b";s:37:"lib/class.tx_quickshop_extmanager.php";s:4:"60d5";s:18:"lib/localllang.xml";s:4:"e882";s:41:"lib/icons/die-netzmacher-logo-quadrat.png";s:4:"a7d4";s:37:"lib/icons/die-netzmacher.de_200px.gif";s:4:"48b3";s:38:"lib/icons/made-in-nature.de_120x90.gif";s:4:"1bea";s:30:"lib/icons/typo3_quick_shop.gif";s:4:"2671";s:31:"lib/icons/your-logo_de-blue.gif";s:4:"19f7";s:31:"lib/icons/your-logo_de-grey.gif";s:4:"1fbc";s:36:"lib/icons/your-logo_default-blue.gif";s:4:"710c";s:36:"lib/icons/your-logo_default-grey.gif";s:4:"6fdc";s:44:"lib/userfunc/class.tx_quickshop_userfunc.php";s:4:"5860";s:26:"lib/userfunc/locallang.xml";s:4:"a3fe";s:38:"res/images/alternate_image_400x300.gif";s:4:"91b6";s:44:"res/images/quick_shop_header_image_210px.jpg";s:4:"6cd7";s:34:"res/pdf/typo3-quick-shop-draft.pdf";s:4:"f9bc";s:48:"res/samples/jQuery/slider_for_deliveryaddress.js";s:4:"556e";s:36:"res/samples/realurl/realurl_conf.php";s:4:"ef1e";s:25:"res/templates/default.css";s:4:"3b91";s:20:"static/constants.txt";s:4:"4470";s:16:"static/setup.txt";s:4:"f068";s:26:"static/caddy/constants.txt";s:4:"01bd";}',
	'suggests' => array(
		'quickshop_installer' => '',
	),
);

?>
