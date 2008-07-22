<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2005 Juraj Sulek (juraj@sulek.sk)
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
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Plugin css_filelinks.
 *
 * $Id: class.tx_cssfilelinks.php,v 0.1.0 2005/28/12 20:02:15 typo3 Exp $
 *
 * @author	Juraj Sulek <juraj@sulek.sk>
 */
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 * TOTAL FUNCTIONS: 11
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */


	require_once(PATH_tslib."class.tslib_pibase.php");

	class tx_pageflexform extends tslib_pibase {

		/**
 * Returns an array of object reference to the hook object if any
 *
 * @param	string		Name of the function you want to call / hook key
 * @return	array		Array of Hook objects or empty array.
 */
		function pi_initPIflexForm($field='tx_pageflexform_ds')	{
			// Converting flexform data into array:
			$tempArray='';
			if (!is_array($GLOBALS['TSFE']->page[$field]) && $GLOBALS['TSFE']->page[$field])	{
				$tempArray = t3lib_div::xml2array($GLOBALS['TSFE']->page[$field]);
				if (!is_array($tempArray))	$tempArray=array();
			}
			return $tempArray;
		}

	}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pageflexform/class.tx_pageflexform.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pageflexform/class.tx_pageflexform.php']);
}
?>