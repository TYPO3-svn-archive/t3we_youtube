<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['t3we_youtube']);
if (is_array($extConf) && array_key_exists('includeDefaultContentElements', $extConf)) {
	$includeDefaultContentElements = $extConf['includeDefaultContentElements'];
} else {
	$includeDefaultContentElements = TRUE;
}

if ($includeDefaultContentElements) {
	tx_t3weyoutube_lib::addContentElement($_EXTKEY, 'youtube');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'static/', 'T3WE // Youtube');
?>
