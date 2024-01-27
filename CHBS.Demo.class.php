<?php

/******************************************************************************/
/******************************************************************************/

class CHBSDemo
{
	/**************************************************************************/
	
	function __construct()
	{

	}
	
	/**************************************************************************/
	
	function import()
	{
		error_reporting(E_ALL);
		
		ob_start();
		ob_clean();
		
		/***/
		
		if(!defined('WP_LOAD_IMPORTERS')) define('WP_LOAD_IMPORTERS',true);

		CHBSInclude::includeFile(ABSPATH.'wp-admin/includes/import.php');

		$includeClass=array
		(
			array
			(
				'class'=>'WP_Import',
				'path'=>PLUGIN_CHBS_LIBRARY_PATH.'wordpress-importer/wordpress-importer.php'				
			)
		);

		foreach($includeClass as $value)
		{
			$r=CHBSInclude::includeClass($value['path'],array($value['class']));
			if($r!==true) break;
		}

		if($r===false) return(false);

		/***/
		
		$Import=new WP_Import();
		$Import->fetch_attachments=true;
		$Import->import(PLUGIN_CHBS_DEMO_PATH.'demo.xml.gz');
	
		/***/
		
		$BookingFormStyle=new CHBSBookingFormStyle();
		$BookingFormStyle->createCSSFile();
		
		/***/
		
		$buffer=ob_get_clean();
		if(ob_get_contents()) ob_end_clean();
		
		return($buffer);
	}
	
	/**************************************************************************/
	
	function createMenu($attr,$content=null)
	{
		extract(shortcode_atts(array('name'=>null),$attr));
		return(wp_nav_menu(array('menu'=>'chbs-demo-menu','menu_class'=>'chbs-demo-menu','echo'=>false)));	
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/