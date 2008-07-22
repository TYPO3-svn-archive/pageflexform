<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$tempColumns = Array (
	'tx_pageflexform_ds' => Array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:pageflexform/locallang_db.php:pages.tx_pageflexform_ds',		
		'config' => Array (
			'type' => 'flex',	
			'ds_pointerField' => 'doktype',
			'ds' => Array(
				'default' => 'FILE:'.$GLOBALS['T3_VAR']['ext']['pageflexform']['setup']['defaultFlexform'],
			),
		),
	),
);

t3lib_div::loadTCA("pages");
t3lib_extMgm::addTCAcolumns("pages",$tempColumns,1);

$defaultPostfix=$GLOBALS['T3_VAR']['ext']['pageflexform']['setup']['defaultpostfix'];
$defaultPosition=$GLOBALS['T3_VAR']['ext']['pageflexform']['setup']['defaultposition'];
/* pridat kontrolu na defaultpostfix a defaulposition*/

if(trim($GLOBALS['T3_VAR']['ext']['pageflexform']['setup']['registertodoktypes'])!=''){
	$doktypesArray=t3lib_div::trimExplode(",",$GLOBALS['T3_VAR']['ext']['pageflexform']['setup']['registertodoktypes']);
	foreach($doktypesArray as $val){
		$addType=t3lib_div::trimExplode("/",$val);
		if($addType[1]==''){$addType[1]=$defaultPostfix;};
		if($addType[2]==''){$addType[2]=$defaultPosition;};
		t3lib_extMgm::addToAllTCAtypes('pages','tx_pageflexform_ds'.$addType[1],$addType[0],$addType[2]);
	}

}


?>