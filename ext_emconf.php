<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "tk_svconsql_table".
 *
 * Auto generated 05-08-2013 20:49
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Table for Connector service SQL',
	'description' => 'Simple extension for presenting data from external database as HTML table.',
	'category' => 'plugin',
	'author' => 'Tomasz Krawczyk',
	'author_email' => 'tomasz@typo3.pl',
	'shy' => '',
	'dependencies' => 'adodb,svconnector,svconnector_sql',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '2.2.1',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-5.3.99',
			'typo3' => '4.5.0-6.1.99',
			'adodb' => '',
			'svconnector' => '',
			'svconnector_sql' => '',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
	'_md5_values_when_last_written' => 'a:14:{s:9:"ChangeLog";s:4:"a777";s:12:"ext_icon.gif";s:4:"3a52";s:17:"ext_localconf.php";s:4:"e183";s:14:"ext_tables.php";s:4:"1c76";s:14:"ext_tables.sql";s:4:"0688";s:19:"flexform_ds_pi1.xml";s:4:"00d0";s:16:"locallang_db.xml";s:4:"1862";s:10:"README.txt";s:4:"ee2d";s:14:"doc/manual.sxw";s:4:"865a";s:36:"pi1/class.tx_tksvconsqltable_pi1.php";s:4:"2413";s:17:"pi1/locallang.xml";s:4:"a3e7";s:24:"pi1/static/constants.txt";s:4:"5a15";s:20:"pi1/static/setup.txt";s:4:"520c";s:17:"res/template.html";s:4:"355d";}',
	'suggests' => 
	array (
	),
);

?>