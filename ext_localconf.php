<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$GLOBALS['T3_VAR']['ext']['pageflexform']['setup'] = unserialize($_EXTCONF);
require_once(t3lib_extMgm::extPath($_EXTKEY).'class.registerpageflexform.php');



?>