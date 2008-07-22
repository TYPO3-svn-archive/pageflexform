<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2006 Juraj Sulek (juraj@sulek.sk)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Calss pagesflexform for the pagesflexform extension.
 *
 * @author	Juraj Sulek <juraj@sulek.sk>
 */

class registerpageflexform{

	/**
	 * Adds an entry to the "ds" array of the tt_content field "pagesflexform".
	 * This is used by content elements to add a flexform XML reference / content for use when they are selected.
	 * Usage: 0
	 *
	 * @param	string		The same value as the key for the content element
	 * @param	string		Either a reference to a flex-form XML file (eg. "FILE:EXT:newloginbox/flexform_ds.xml") or the XML directly.
	 * @return	void
	 */
	 
	function addPageFlexFormValue($CTypeKeyToMatch,$value){
		global $TCA;
		t3lib_div::loadTCA('pages');
		if (is_array($TCA['pages']['columns']) && is_array($TCA['pages']['columns']['tx_pageflexform_ds']['config']['ds']))	{
			$TCA['pages']['columns']['tx_pageflexform_ds']['config']['ds'][$CTypeKeyToMatch] = $value;
		}
	}
}
	/*if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pageflexform/class.registerpageflexform.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pageflexform/class.registerpageflexform.php']);
*/

?>