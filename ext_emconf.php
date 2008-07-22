<?php

########################################################################
# Extension Manager/Repository config file for ext: "pageflexform"
#
# Auto generated 22-07-2008 10:30
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Flexforms in page properties',
	'description' => 'This extension provide the use of Flexform in page properties. It adds the field \'tx_pageflexform_ds\' of type \'flex\' to the pages table. It is inspired by "ce_flexform".',
	'category' => 'misc',
	'shy' => 0,
	'version' => '0.0.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'pages',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Juraj Sulek',
	'author_email' => 'juraj@sulek.sk',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '3.5.0-0.0.0',
			'php' => '3.0.0-0.0.0',
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:12:{s:10:"README.txt";s:4:"ca12";s:30:"class.registerpageflexform.php";s:4:"926e";s:25:"class.tx_pageflexform.php";s:4:"2a0c";s:21:"ext_conf_template.txt";s:4:"fb3b";s:12:"ext_icon.gif";s:4:"423f";s:17:"ext_localconf.php";s:4:"d339";s:14:"ext_tables.php";s:4:"c1b8";s:14:"ext_tables.sql";s:4:"559d";s:15:"flexform_ds.xml";s:4:"e46b";s:16:"locallang_db.php";s:4:"1136";s:17:"locallang_tca.php";s:4:"ab21";s:14:"doc/manual.sxw";s:4:"b2c5";}',
);

?>