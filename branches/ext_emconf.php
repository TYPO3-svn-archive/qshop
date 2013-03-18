<?php

########################################################################
# Extension Manager/Repository config file for ext "quick_shop".
#
# Auto generated 04-03-2012 22:28
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Quick Shop',
	'description' => 'Quick Shop - the fastest shop in the history of TYPO3. Install the complete shop with one mouse click! Quick Shop itself hasn\'t any line PHP code. You need only TypoScript for extending the shop with new database fields and tables. Quick Shop is a team play with the Browser - TYPO3 without PHP -, Caddy - your shopping cart - and Powermail.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '3.0.0',
	'dependencies' => 'browser,caddy,css_styled_content,powermail',
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
			'browser' => '',
			'caddy' => '',
			'css_styled_content' => '',
			'powermail' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'quickshop_installer' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:30:{s:9:"ChangeLog";s:4:"656e";s:21:"ext_conf_template.txt";s:4:"d56d";s:12:"ext_icon.gif";s:4:"2501";s:14:"ext_tables.php";s:4:"7e8b";s:14:"ext_tables.sql";s:4:"4900";s:16:"locallang_db.xml";s:4:"489e";s:7:"tca.php";s:4:"bbfd";s:14:"doc/manual.pdf";s:4:"bc08";s:14:"doc/manual.sxw";s:4:"bbf8";s:16:"doc/tutorial.pdf";s:4:"a4b5";s:16:"doc/tutorial.sxw";s:4:"cb5b";s:37:"lib/class.tx_quickshop_extmanager.php";s:4:"7e00";s:36:"lib/class.tx_quickshop_userfuncs.php";s:4:"4878";s:17:"lib/locallang.xml";s:4:"750f";s:37:"lib/icons/die-netzmacher.de_200px.gif";s:4:"48b3";s:31:"lib/icons/your-logo_de-blue.gif";s:4:"19f7";s:31:"lib/icons/your-logo_de-grey.gif";s:4:"1fbc";s:36:"lib/icons/your-logo_default-blue.gif";s:4:"710c";s:36:"lib/icons/your-logo_default-grey.gif";s:4:"6fdc";s:15:"res/default.css";s:4:"3093";s:16:"res/default.tmpl";s:4:"6d82";s:23:"res/tmpl_fieldwrap.html";s:4:"c439";s:38:"res/images/alternate_image_400x300.gif";s:4:"91b6";s:44:"res/images/quick_shop_header_image_210px.jpg";s:4:"6cd7";s:20:"res/v1.4/default.css";s:4:"b18a";s:21:"res/v1.4/default.tmpl";s:4:"5a4a";s:20:"static/constants.txt";s:4:"0ddf";s:16:"static/setup.txt";s:4:"aecc";s:31:"static/quick_shop/constants.txt";s:4:"d41d";s:27:"static/quick_shop/setup.txt";s:4:"8e73";}',
	'suggests' => array(
		'quickshop_installer' => '',
	),
);

?>