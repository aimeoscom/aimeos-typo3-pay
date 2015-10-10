<?php

if ( ! defined( 'TYPO3_MODE' ) ) {
	die ( 'Access denied.' );
}


require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( $_EXTKEY ) . '/Resources/Libraries/autoload.php';


$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['aimeos']['extDirs']['1_'.$_EXTKEY] =
  'EXT:' . $_EXTKEY . '/Resources/Private/Extensions/';

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['aimeos']['confDirs']['1_'.$_EXTKEY] =
  'EXT:' . $_EXTKEY . '/Resources/Private/Config/';

?>