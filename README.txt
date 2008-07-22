If you want to register an another FLEXFORM as default to e.g. doktype 3 you can do it with this code

registerpageflexform::addPageFlexFormValue('3',"FILE:EXT:myextension/flexform_ds.xml");

---------------------------------------------------------------------------------------------
Here is an example how you can read values from flexform

require_once(PATH_tslib."class.tslib_pibase.php");
require_once(t3lib_extMgm::extPath('pageflexform').'class.tx_pageflexform.php');

class user_functions extends tslib_pibase {
	
	function getFlexValue($content,$conf){
		$flexvalue=tx_pageflexform::pi_initPIflexForm();
		return $this->pi_getFFvalue($flexvalue, 'defaultInput', 'sDEF');
	}
}
