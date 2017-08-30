<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Aimeos payments',
	'description' => 'Aimeos TYPO3 payments extension for Aimeos project. It contains the Omnipay payment library (http://omnipay.thephpleague.com/) including all available payment drivers.',
	'category' => 'plugin',
	'author' => 'Aimeos GmbH',
	'author_email' => 'info@aimeos.com',
	'author_company' => 'Aimeos GmbH',
	'state' => 'beta',
	'clearCacheOnLoad' => 0,
	'createDirs' => '',
	'uploadfolder' => 0,
	'version' => '17.6.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.99.99',
			'aimeos' => '17.4.0-17.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
