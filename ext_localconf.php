<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_content.php']['cObjTypeAndClassDefault'][] = 'tx_t3weyoutube_cobj';
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_content.php']['getData'][] = 'tx_t3weyoutube_getXMLData';

$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['t3we_youtube']);
if (is_array($extConf) && array_key_exists('includeDefaultContentElements', $extConf)) {
	$includeDefaultContentElements = $extConf['includeDefaultContentElements'];
} else {
	$includeDefaultContentElements = TRUE;
}

if ($includeDefaultContentElements) {
	tx_t3weyoutube_lib::addTyposcript($_EXTKEY, 'youtube');
}

?>
