#
# INDEX
#
# 'tx_quickshop_categories'
# 'tx_quickshop_dimension'
# 'tx_quickshop_material'
# 'tx_quickshop_products'
# 'tx_quickshop_shippingcosts'
# 'tx_quickshop_mm'



#
# Table structure for table 'tx_quickshop_categories'
#
CREATE TABLE tx_quickshop_categories (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  cruser_id int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  title tinytext,
  title_lang_ol tinytext,
  uid_parent int(11) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid)
);


#
# Table structure for table 'tx_quickshop_dimension'
#
CREATE TABLE tx_quickshop_dimension (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  cruser_id int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  title tinytext,
  title_lang_ol tinytext,
  uid_parent int(11) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid)
);



#
# Table structure for table 'tx_quickshop_material'
#
CREATE TABLE tx_quickshop_material (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  cruser_id int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  title tinytext,
  title_lang_ol tinytext,
  uid_parent int(11) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid)
);



#
# Table structure for table 'tx_quickshop_products'
#
CREATE TABLE tx_quickshop_products (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  cruser_id int(11) DEFAULT '0' NOT NULL,
  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumtext,
  sorting int(10) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,

  sku tinytext,
  ean tinytext,
  title tinytext,
  short text,
  description text,

  price double(11,2) DEFAULT '0.00' NOT NULL,
  tax int(11) DEFAULT '0' NOT NULL,
  stockquantity tinyint(3) DEFAULT '0' NOT NULL,
  stockmanagement tinyint(3) DEFAULT '0' NOT NULL,
  quantity_min int(11) DEFAULT '0' NOT NULL,
  quantity_max int(11) DEFAULT '0' NOT NULL,
  weight double(11,2) DEFAULT '0.00' NOT NULL,

  datasheet text,
  cols int(11) DEFAULT '0' NOT NULL,
  pi_flexform mediumtext,

  filterPrompt tinytext,

  image text,
  imagewidth tinytext,
  imageheight tinytext,
  imageorient tinyint(4) unsigned NOT NULL default '0',
  imagecols tinyint(4) unsigned NOT NULL default '0',
  imageborder tinyint(4) unsigned NOT NULL default '0',
  image_1stforlistonly tinyint(3) unsigned NOT NULL default '0',
  image_frames tinyint(3) unsigned NOT NULL default '0',
  image_link text,
  image_zoom tinyint(3) unsigned NOT NULL default '0',
  image_noRows tinyint(3) unsigned NOT NULL default '0',
  image_effects tinyint(3) unsigned NOT NULL default '0',
  image_compression tinyint(3) unsigned NOT NULL default '0',
  imageseo text,
  caption text,
  caption_position varchar(12) default '',

  hidden tinyint(4) DEFAULT '0' NOT NULL,
  starttime int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,
  fe_group int(11) DEFAULT '0' NOT NULL,
  seo_keywords text,
  seo_description text,

  teaser_description text,
  teaser_short text,
  teaser_title tinytext,

  tx_quickshop_categories int(11) DEFAULT '0' NOT NULL,
  tx_quickshop_dimension int(11) DEFAULT '0' NOT NULL,
  tx_quickshop_material int(11) DEFAULT '0' NOT NULL,
  tx_quickshop_shippingcosts int(11) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid)
);



#
# Table structure for table 'tx_quickshop_shippingcosts'
#
CREATE TABLE tx_quickshop_shippingcosts (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  cruser_id int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  title tinytext,
  title_lang_ol tinytext,
  value int(11) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid)
);



#
# Table structure for table 'tx_quickshop_mm'
#
CREATE TABLE tx_quickshop_mm (
  uid_local int(11) unsigned NOT NULL DEFAULT '0',
  uid_foreign int(11) unsigned NOT NULL DEFAULT '0',
  sorting         int(11) unsigned NOT NULL DEFAULT '0',
  sorting_foreign int(11) unsigned NOT NULL DEFAULT '0',
  table_local varchar(100) NOT NULL DEFAULT '',
  table_foreign varchar(100) NOT NULL DEFAULT '',
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);